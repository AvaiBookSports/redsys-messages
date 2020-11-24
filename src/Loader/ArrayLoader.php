<?php

namespace AvaiBookSports\Component\RedsysMessages\Loader;

use AvaiBookSports\Component\RedsysMessages\CatalogInterface;

class ArrayLoader implements CatalogLoaderInterface
{
    /**
     * @var class-string<CatalogInterface>[]
     */
    private $catalogs = [];

    /**
     * Initialize with a FQCN catalog list.
     *
     * @param class-string<CatalogInterface>[] $catalogs
     */
    public function __construct(array $catalogs)
    {
        foreach ($catalogs as $catalogClass) {
            $this->addCatalog($catalogClass);
        }
    }

    /**
     * Add a catalog FQCN to the loader.
     *
     * @param class-string<CatalogInterface> $catalogClass
     *
     * @return self
     */
    public function addCatalog($catalogClass)
    {
        $this->catalogs[] = $catalogClass;
        $this->catalogs = array_unique($this->catalogs);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogs()
    {
        return $this->catalogs;
    }
}
