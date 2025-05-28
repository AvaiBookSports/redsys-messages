<?php

declare(strict_types=1);

namespace AvaiBookSports\Component\RedsysMessages\Loader;

use AvaiBookSports\Component\RedsysMessages\Catalog\English;
use AvaiBookSports\Component\RedsysMessages\Catalog\Italian;
use AvaiBookSports\Component\RedsysMessages\Catalog\Spanish;

class CatalogLoader implements CatalogLoaderInterface
{
    public function getCatalogs()
    {
        return [
            Spanish::class,
            English::class,
            Italian::class,
        ];
    }
}
