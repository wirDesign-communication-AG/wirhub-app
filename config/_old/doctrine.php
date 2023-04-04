<?php

function getNameSpaceByRegex($src)
{
    $src = file_get_contents($src);
    if (preg_match('#(namespace)(\\s+)([A-Za-z0-9\\\\]+?)(\\s*);#sm', $src, $m)) {
        return $m[3];
    }

    return null;
}

$projectDirectory = $this->container->getParameter('kernel.project_dir');
$pluginDirs = array_filter(glob(sprintf('%s/plugins/vendor/wirdesign-communication-ag/*', $projectDirectory)), 'is_dir');

$mappings = [];
foreach ($pluginDirs as $pluginDir) {
    $pluginEntityDir = sprintf('%s/Entity', $pluginDir);
    if (true === is_dir($pluginEntityDir)) {
        $files = scandir($pluginEntityDir);
        $firstFile = sprintf('%s/%s', $pluginEntityDir, $files[2]);
        if (true !== is_file($firstFile)) {
            continue;
        }
        $nameSpace = getNameSpaceByRegex($firstFile);

        $pluginName = substr($pluginDir, strrpos($pluginDir, '/') + 1);
        $mappings[$pluginName] = [
            'type'      => 'annotation',
            'alias'     => $pluginName,
            'prefix'    => $nameSpace,
            'dir'       => sprintf('%s/Entity', $pluginDir),
            'is_bundle' => false,
        ];
    }
}

$configuration = [
    'dbal' => [
        'charset'               => 'utf8mb4',
        'default_table_options' => [
            'charset' => 'utf8mb4',
            'collate' => 'utf8mb4_unicode_ci',
        ],

        'driver' => '%env(string:DATABASE_DRIVER)%',
        'url'    => '%env(resolve:DATABASE_URL)%',
    ],

    'orm' => [
        'auto_generate_proxy_classes' => '%kernel.debug%',
        'entity_managers'             => [
            'default' => [
                'connection' => 'default',
                'dql'        => [
                    'string_functions' => [
                        'MATCH_AGAINST' => 'AppBundle\Component\Doctrine\MatchAgainst',
                    ],
                ],
                'mappings'   => [
                    'AppBundle'     => [
                        'type'   => 'annotation',
                        'dir'    => '%kernel.project_dir%/src/AppBundle/Entity',
                        'prefix' => 'AppBundle\Entity',
                    ],
                    'GedmoLoggable' => [
                        'type'      => 'annotation',
                        'alias'     => 'GedmoLoggable',
                        'prefix'    => 'Gedmo\Loggable\Entity',
                        'dir'       => "%kernel.project_dir%/vendor/gedmo/doctrine-extensions/src/Loggable/Entity",
                        'is_bundle' => false,
                    ],
                ],
            ],

        ],

    ],

];

$configuration['orm']['entity_managers']['default']['mappings'] = array_merge($configuration['orm']['entity_managers']['default']['mappings'], $mappings);

$this->container->loadFromExtension('doctrine', $configuration);