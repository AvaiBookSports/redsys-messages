<?php

use AvaiBookSports\Component\RedsysMessages\Loader\ArrayLoader;
use AvaiBookSports\Component\RedsysMessages\Loader\CatalogLoader;
use AvaiBookSports\Component\RedsysMessages\Loader\ChainLoader;
use PHPUnit\Framework\TestCase;

final class CatalogLoaderTest extends TestCase
{
    public function testCatalogLoader()
    {
        $loader = new CatalogLoader();

        $this->assertIsArray($loader->getCatalogs());
        $this->assertContains('AvaiBookSports\Component\RedsysMessages\Catalog\Spanish', $loader->getCatalogs());
        $this->assertContains('AvaiBookSports\Component\RedsysMessages\Catalog\English', $loader->getCatalogs());
    }

    public function testArrayLoader()
    {
        $loader = new ArrayLoader([
            'Acme\RedsysMessages\German',
            'Acme\RedsysMessages\Russian',
        ]);

        $this->assertIsArray($loader->getCatalogs());
        $this->assertNotContains('AvaiBookSports\Component\RedsysMessages\Catalog\Spanish', $loader->getCatalogs());
        $this->assertNotContains('AvaiBookSports\Component\RedsysMessages\Catalog\English', $loader->getCatalogs());
        $this->assertContains('Acme\RedsysMessages\German', $loader->getCatalogs());
        $this->assertContains('Acme\RedsysMessages\Russian', $loader->getCatalogs());

        // Check catalog duplication
        $loader = new ArrayLoader([
            'Acme\RedsysMessages\German',
            'Acme\RedsysMessages\German',
        ]);

        $this->assertContains('Acme\RedsysMessages\German', $loader->getCatalogs());
        $this->assertCount(1, $loader->getCatalogs());

        $loader = new ArrayLoader([
            'Acme\RedsysMessages\German',
            'Acme\RedsysMessages\German',
            'Acme\RedsysMessages\Russian',
        ]);

        $this->assertContains('Acme\RedsysMessages\German', $loader->getCatalogs());
        $this->assertContains('Acme\RedsysMessages\Russian', $loader->getCatalogs());
        $this->assertCount(2, $loader->getCatalogs());
    }

    public function testChainLoader()
    {
        $loader = new ChainLoader([
            new CatalogLoader(),
            new ArrayLoader([
                'Acme\RedsysMessages\German',
                'Acme\RedsysMessages\Russian',
            ]),
            new ArrayLoader([
                'Acme\RedsysMessages\French',
            ]),
        ]);

        $this->assertIsArray($loader->getCatalogs());
        $this->assertContains('AvaiBookSports\Component\RedsysMessages\Catalog\Spanish', $loader->getCatalogs());
        $this->assertContains('AvaiBookSports\Component\RedsysMessages\Catalog\English', $loader->getCatalogs());
        $this->assertContains('Acme\RedsysMessages\German', $loader->getCatalogs());
        $this->assertContains('Acme\RedsysMessages\Russian', $loader->getCatalogs());
        $this->assertContains('Acme\RedsysMessages\French', $loader->getCatalogs());

        // Check catalog duplication
        $loader = new ChainLoader([
            new ArrayLoader([
                'Acme\RedsysMessages\German',
            ]),
            new ArrayLoader([
                'Acme\RedsysMessages\German',
            ]),
        ]);

        $this->assertContains('Acme\RedsysMessages\German', $loader->getCatalogs());
        $this->assertCount(1, $loader->getCatalogs());

        $loader = new ChainLoader([
            new ArrayLoader([
                'Acme\RedsysMessages\German',
                'Acme\RedsysMessages\Russian',
            ]),
            new ArrayLoader([
                'Acme\RedsysMessages\German',
            ]),
        ]);

        $this->assertContains('Acme\RedsysMessages\German', $loader->getCatalogs());
        $this->assertContains('Acme\RedsysMessages\Russian', $loader->getCatalogs());
        $this->assertCount(2, $loader->getCatalogs());

        $loader = new ChainLoader([
            new ArrayLoader([
                'Acme\RedsysMessages\German',
            ]),
            new ArrayLoader([
                'Acme\RedsysMessages\Russian',
                'Acme\RedsysMessages\German',
            ]),
        ]);

        $this->assertContains('Acme\RedsysMessages\German', $loader->getCatalogs());
        $this->assertContains('Acme\RedsysMessages\Russian', $loader->getCatalogs());
        $this->assertCount(2, $loader->getCatalogs());
    }
}
