<?php

namespace AvaiBookSports\Component\RedsysMessages\Loader;

use AvaiBookSports\Component\RedsysMessages\Catalog\English;
use AvaiBookSports\Component\RedsysMessages\Catalog\Italian;
use AvaiBookSports\Component\RedsysMessages\Catalog\Spanish;

class CatalogLoader implements CatalogLoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function getCatalogs()
    {
        return [
            Spanish::class,
            English::class,
            Italian::class
        ];
    }
}
