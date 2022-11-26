<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@PhpCsFixer' => true,
        // 'classes_opening_brace' => 'same_line'
        // 'array_syntax' => ['syntax' => 'short'],
        // 'no_multiple_statements_per_line' => true
        'curly_braces_position' => ['functions_opening_brace' => 'same_line']
    ])
    ->setFinder($finder);