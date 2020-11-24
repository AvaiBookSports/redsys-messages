<?php

namespace AvaiBookSports\Component\RedsysMessages\Loader;

class ArrayLoader implements CatalogLoaderInterface
{
    private $catalogs = [];

    /**
     * Initialize with a FQCN catalog list.
     */
    public function __construct(array $catalogs)
    {
        foreach ($catalogs as $catalogClass) {
            $this->addCatalog($catalogClass);
        }
    }

    /**
     * Add a catalog FQCN to the loader.
     */
    public function addCatalog(string $catalogClass)
    {
        $this->catalogs[] = $catalogClass;
        $this->catalogs = array_unique($this->catalogs);
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }
}
