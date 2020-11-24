<?php

namespace AvaiBookSports\Component\RedsysMessages\Loader;

interface CatalogLoaderInterface
{
    /**
     * Get a FQCN catalog list.
     *
     * @return array
     */
    public function getCatalogs();
}
