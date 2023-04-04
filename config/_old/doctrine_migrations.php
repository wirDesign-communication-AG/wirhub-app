<?php
$projectDirectory = $this->container->getParameter('kernel.project_dir');
$pluginDirs = array_filter(glob(sprintf('%s/plugins/vendor/wirdesign-communication-ag/*', $projectDirectory)), 'is_dir');

$paths = [];
foreach ($pluginDirs as $pluginDir) {
    $pluginMigrationDir = sprintf('%s/DoctrineMigrations', $pluginDir);
    if(true === is_dir($pluginMigrationDir)){
        $pluginName = substr($pluginDir, strrpos($pluginDir, '/') + 1);
        $nameSpace = sprintf('Plugin\\%s\\DoctrineMigrations',str_replace(['-', '_'], '', ucwords($pluginName, '-_')));
        $paths[$nameSpace] = $pluginMigrationDir;
    }
}

$configuration = [
    'migrations_paths' => [
        'Application\Migrations' => sprintf('%s/app/DoctrineMigrations', $projectDirectory),
    ],
    'storage' => [
        'table_storage' => [
            'table_name' => 'migration_versions',
            'version_column_name' => 'version',
            'version_column_length' => 191,
            'executed_at_column_name' => 'executed_at',
        ],
    ],
    'all_or_nothing' => true,
    'organize_migrations' => 'BY_YEAR',
];

$configuration['migrations_paths'] = array_merge($configuration['migrations_paths'], $paths);
$this->container->loadFromExtension('doctrine_migrations', $configuration);