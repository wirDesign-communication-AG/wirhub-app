<?php

$finder = (new PhpCsFixer\Finder())
    ->in([
        __DIR__ . '/migrations',
        __DIR__ . '/src',
        __DIR__ . '/tests',
    ])
    ->exclude('var');

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'global_namespace_import' => [
            'import_classes' => true,
            'import_constants' => true,
            'import_functions' => true,
        ],
        'phpdoc_to_comment' => [
            'ignored_tags' => ['var'],
        ],
    ])
    ->setFinder($finder)
    ->setLineEnding("\n");
