<?php

$finder = PhpCsFixer\Finder::create()
    ->in(['config', 'database', 'lang', 'public', 'routes', 'src']);

$config = new PhpCsFixer\Config();
return $config->setRules([
    '@PSR12' => true,
])
    ->setFinder($finder);
