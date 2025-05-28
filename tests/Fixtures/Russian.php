<?php

namespace AvaiBookSports\Component\RedsysMessages\Tests\Fixtures;

use AvaiBookSports\Component\RedsysMessages\CatalogInterface;

class Russian implements CatalogInterface
{
    public static function getIso639Alpha2(): string
    {
        return '';
    }

    public static function getIso639Alpha3(): string
    {
        return '';
    }

    public function getDsResponseMessage(string $code): ?string
    {
        return null;
    }

    public function getErrorMessage(string $code): ?string
    {
        return null;
    }
}
