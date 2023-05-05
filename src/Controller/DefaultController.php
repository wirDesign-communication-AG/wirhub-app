<?php

namespace App\Controller;

use DirectoryIterator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DefaultController
{
    private string $kernelProjectDir;

    public function __construct(string $kernelProjectDir)
    {
        $this->kernelProjectDir = $kernelProjectDir;
    }


    #[Template('default_releases.html.twig')]
    #[IsGranted('ROLE_USER')]
    #[Route(path: '/releases', name: 'app_default_releases')]
    #[Route(path: '/releases/page/{page}', name: 'app_default_releases_page')]
    public function releases(int $page = 1): array
    {
        if (0 === $page) {
            $page = 1;
        }

        $versionsByPage = 10;
        $directoryPath = sprintf('%s/doc/releases', $this->kernelProjectDir);
        $directory = new DirectoryIterator($directoryPath);
        $releases = [];

        foreach ($directory as $fileInfo) {
            if (false === $fileInfo->isFile()) {
                continue;
            }

            if (false === str_ends_with($fileInfo->getFilename(), '.md')) {
                continue;
            }
            $releases[$fileInfo->getFilename()] = $fileInfo->getRealPath();
        }

        $releaseKeys = array_keys($releases);
        array_multisort($releaseKeys, SORT_NATURAL, $releases);

        $totalCount = count($releases);

        $releases = array_reverse($releases);
        $releases = array_slice($releases, ($page - 1) * $versionsByPage, $versionsByPage);

        $releasesContent = [];

        foreach ($releases as $releasePath) {
            $releasesContent[] = file_get_contents($releasePath);
        }

        return [
            'releases_per_page' => $versionsByPage,
            'total_count'       => $totalCount,
            'page'              => $page,
            'releases'          => $releasesContent,
        ];
    }
}