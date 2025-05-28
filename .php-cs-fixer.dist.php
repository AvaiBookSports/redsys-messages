<?php
$finder = PhpCsFixer\Finder::create()
    ->in('src')
    ->in('tests')
;
return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony' => true,
        '@PSR2' => true,
        'class_attributes_separation' => ['elements' => ['const', 'method', 'property']],
        //'strict_param' => true,
        'array_syntax' => ['syntax' => 'short'],
    ])
    ->setFinder($finder)
;
