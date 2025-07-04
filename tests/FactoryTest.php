<?php

declare(strict_types=1);

namespace AvaiBookSports\Component\RedsysMessages\Tests;

use AvaiBookSports\Component\RedsysMessages\Exception\CatalogNotFoundException;
use AvaiBookSports\Component\RedsysMessages\Exception\RuntimeException;
use AvaiBookSports\Component\RedsysMessages\Factory;
use AvaiBookSports\Component\RedsysMessages\Loader\ArrayLoader;
use AvaiBookSports\Component\RedsysMessages\Loader\CatalogLoader;
use PHPUnit\Framework\TestCase;

final class FactoryTest extends TestCase
{
    public function testDsResponseMessage(): void
    {
        $loader = new Factory(new CatalogLoader());

        $this->assertEquals('Expired card', $loader->createCatalogByLanguage('en')->getDsResponseMessage('0101'));
        $this->assertEquals('Expired card', $loader->createCatalogByLanguage('eng')->getDsResponseMessage('0101'));
        $this->assertEquals('Tarjeta caducada', $loader->createCatalogByLanguage('es')->getDsResponseMessage('0101'));
        $this->assertEquals('Tarjeta caducada', $loader->createCatalogByLanguage('spa')->getDsResponseMessage('0101'));
    }

    public function testErrorMessage(): void
    {
        $loader = new Factory(new CatalogLoader());

        $this->assertEquals('Error genérico', $loader->createCatalogByLanguage('es')->getErrorMessage('9002'));
        $this->assertEquals('Error genérico', $loader->createCatalogByLanguage('es')->getErrorMessage('SIS0002'));
        $this->assertEquals('Nos llega un tipo de operación errónea', $loader->createCatalogByLanguage('es')->getErrorMessage('9030'));
        $this->assertEquals('Nos llega un tipo de operación errónea', $loader->createCatalogByLanguage('es')->getErrorMessage('SIS0030'));
    }

    public function testNonExistingLanguage(): void
    {
        $loader = new Factory(new CatalogLoader());

        $this->expectException(CatalogNotFoundException::class);
        $loader->createCatalogByLanguage('foo');
    }

    public function testNonExistingCatalog(): void
    {
        $this->expectException(RuntimeException::class);

        /** @phpstan-ignore argument.type */
        $loader = new Factory(new ArrayLoader([
            'test',
        ]));

        $loader->createCatalogByLanguage('es');
    }

    public function testIncompatibleCatalog(): void
    {
        $this->expectException(RuntimeException::class);

        /** @phpstan-ignore argument.type */
        $loader = new Factory(new ArrayLoader([
            'stdClass',
        ]));

        $loader->createCatalogByLanguage('es');
    }
}
