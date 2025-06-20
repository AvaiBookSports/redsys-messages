<?php
$finder = PhpCsFixer\Finder::create()
    ->in('src')
    ->in('tests')
;
return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@PSR2' => true,
        'class_attributes_separation' => ['elements' => ['const' => 'one', 'method' => 'one', 'property' => 'one']],
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder)
;
