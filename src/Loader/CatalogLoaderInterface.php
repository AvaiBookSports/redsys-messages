<?php

namespace AvaiBookSports\Component\RedsysMessages\Loader;

use AvaiBookSports\Component\RedsysMessages\CatalogInterface;

interface CatalogLoaderInterface
{
    /**
     * Get a FQCN catalog list.
     *
     * @return class-string<CatalogInterface>[]
     */
    public function getCatalogs();
}
