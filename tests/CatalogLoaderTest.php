<?php

declare(strict_types=1);

namespace AvaiBookSports\Component\RedsysMessages\Tests;

use AvaiBookSports\Component\RedsysMessages\Loader\ArrayLoader;
use AvaiBookSports\Component\RedsysMessages\Loader\CatalogLoader;
use AvaiBookSports\Component\RedsysMessages\Loader\ChainLoader;
use PHPUnit\Framework\TestCase;

final class CatalogLoaderTest extends TestCase
{
    public function testCatalogLoader(): void
    {
        $loader = new CatalogLoader();

        $this->assertContains('AvaiBookSports\Component\RedsysMessages\Catalog\Spanish', $loader->getCatalogs());
        $this->assertContains('AvaiBookSports\Component\RedsysMessages\Catalog\English', $loader->getCatalogs());
    }

    public function testArrayLoader(): void
    {
        $loader = new ArrayLoader([
            Fixtures\German::class,
            Fixtures\Russian::class,
        ]);

        $this->assertNotContains('AvaiBookSports\Component\RedsysMessages\Catalog\Spanish', $loader->getCatalogs());
        $this->assertNotContains('AvaiBookSports\Component\RedsysMessages\Catalog\English', $loader->getCatalogs());
        $this->assertContains(Fixtures\German::class, $loader->getCatalogs());
        $this->assertContains(Fixtures\Russian::class, $loader->getCatalogs());

        // Check catalog duplication
        $loader = new ArrayLoader([
            Fixtures\German::class,
        ]);

        $this->assertContains(Fixtures\German::class, $loader->getCatalogs());
        $this->assertCount(1, $loader->getCatalogs());

        $loader = new ArrayLoader([
            Fixtures\German::class,
            Fixtures\German::class,
            Fixtures\Russian::class,
        ]);

        $this->assertContains(Fixtures\German::class, $loader->getCatalogs());
        $this->assertContains(Fixtures\Russian::class, $loader->getCatalogs());
        $this->assertCount(2, $loader->getCatalogs());
    }

    public function testChainLoader(): void
    {
        $loader = new ChainLoader([
            new CatalogLoader(),
            new ArrayLoader([
                Fixtures\German::class,
                Fixtures\Russian::class,
            ]),
            new ArrayLoader([
                Fixtures\French::class,
            ]),
        ]);

        $this->assertContains('AvaiBookSports\Component\RedsysMessages\Catalog\Spanish', $loader->getCatalogs());
        $this->assertContains('AvaiBookSports\Component\RedsysMessages\Catalog\English', $loader->getCatalogs());
        $this->assertContains(Fixtures\German::class, $loader->getCatalogs());
        $this->assertContains(Fixtures\Russian::class, $loader->getCatalogs());
        $this->assertContains(Fixtures\French::class, $loader->getCatalogs());

        // Check catalog duplication
        $loader = new ChainLoader([
            new ArrayLoader([
                Fixtures\German::class,
            ]),
            new ArrayLoader([
                Fixtures\German::class,
            ]),
        ]);

        $this->assertContains(Fixtures\German::class, $loader->getCatalogs());
        $this->assertCount(1, $loader->getCatalogs());

        $loader = new ChainLoader([
            new ArrayLoader([
                Fixtures\German::class,
                Fixtures\Russian::class,
            ]),
            new ArrayLoader([
                Fixtures\German::class,
            ]),
        ]);

        $this->assertContains(Fixtures\German::class, $loader->getCatalogs());
        $this->assertContains(Fixtures\Russian::class, $loader->getCatalogs());
        $this->assertCount(2, $loader->getCatalogs());

        $loader = new ChainLoader([
            new ArrayLoader([
                Fixtures\German::class,
            ]),
            new ArrayLoader([
                Fixtures\Russian::class,
                Fixtures\German::class,
            ]),
        ]);

        $this->assertContains(Fixtures\German::class, $loader->getCatalogs());
        $this->assertContains(Fixtures\Russian::class, $loader->getCatalogs());
        $this->assertCount(2, $loader->getCatalogs());
    }
}
