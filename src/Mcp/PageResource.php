<?php

namespace App\Mcp;

use AppBundle\Domain\Attribute\AccessControl;
use AppBundle\Entity\Category;
use AppBundle\Entity\User;
use AppBundle\Repository\CategoryRepository;
use AppBundle\Repository\User\AccessTokenRepository;
use AppBundle\Services\SpaceService;
use AppBundle\Services\User\AccessControlService;
use Mcp\Capability\Attribute\McpResource;
use Mcp\Capability\Attribute\McpResourceTemplate;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

readonly class PageResource
{
    public function __construct(
        private CategoryRepository $categoryRepository,
        private SpaceService $spaceService,
        private AccessControlService $accessControlService,
        private AccessTokenRepository $accessTokenRepository,
        private RequestStack $requestStack,
    ) {
    }

    #[McpResource(uri: 'page://list', name: 'pages')]
    public function getList(): array
    {
        $accessToken = $this->getAccessToken();

        $resultArray = [];

        $spaces = $this->spaceService->getAll(false, true, [AccessControl::ROLE_READ]);

        foreach ($spaces as $space) {
            if (false === $this->accessControlService->isGrantedRole($accessToken, AccessControl::ROLE_READ, $space)) {
                continue;
            }

            /** @var Category $category */
            foreach ($this->categoryRepository->findMenu($space) as $category) {
                $resultArray = array_merge($resultArray, $this->getCategoriesRecursive($accessToken, $category));
            }
        }

        /* Token Software + Marke: 1c6f9f75eb4fbad6e9fa96c1294aeb73fc9bb37b7d6d8bebdba5451178ca9fe0 */

        /* Token Global Read: a374484b416ad4d6c2a1e129948504d7213b7ecca1536770309e5b432f9ca5bc */

        return $resultArray;
    }

    #[McpResourceTemplate(uriTemplate: 'page://content/{id}', name: 'page-by-id', mimeType: 'text/html')]
    public function getContent(int $id): string
    {
        $accessToken = $this->getAccessToken();

        $category = $this->categoryRepository->find($id);
        if (false === $this->accessControlService->isGrantedRole($accessToken, AccessControl::ROLE_READ, $category)) {
            throw new AccessDeniedHttpException();
        }

        return '';
    }

    private function getCategoriesRecursive(User\AccessToken $accessToken, Category $category): array
    {
        if (false === $this->accessControlService->isGrantedRole($accessToken, AccessControl::ROLE_READ, $category)) {
            return [];
        }

        $resultArray = [
            [
                'uri' => sprintf('page://content/%d', $category->getId()),
                'name' => $category->getName(),
            ],
        ];

        foreach ($category->getChildren() as $categoryChild) {
            $resultArray = array_merge($resultArray, $this->getCategoriesRecursive($accessToken, $categoryChild));
        }

        return $resultArray;
    }

    private function getAccessToken(): User\AccessToken
    {
        $request = $this->requestStack->getCurrentRequest();

        if (null === $request) {
            throw new BadRequestHttpException();
        }

        if (false === $request->headers->has('authorization')) {
            throw new UnauthorizedHttpException('Bearer realm="api"', 'Missing or invalid token');
        }

        $token = $request->headers->get('authorization');
        if (false === str_starts_with($token, 'Bearer ')) {
            throw new UnauthorizedHttpException('Bearer realm="api"', 'Missing or invalid token');
        }

        $dummyToken = new User\AccessToken();
        $dummyToken->setPlainBearer(substr($token, 7));

        $accessToken = $this->accessTokenRepository->findOneByBearer($dummyToken->getBearer());
        if (null === $accessToken) {
            throw new UnauthorizedHttpException('Bearer realm="api"', 'Missing or invalid token');
        }

        return $accessToken;
    }
}
