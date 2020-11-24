<?php

namespace AvaiBookSports\Component\RedsysMessages\Loader;

class ChainLoader implements CatalogLoaderInterface
{
    /**
     * @var CatalogLoaderInterface[]
     */
    private $loader = [];

    /**
     * This loader allows you to join multiple loaders together. For example, a CatalogLoader merged with an
     * ArrayLodader filled with your custom catalogs.
     *
     * @param CatalogLoaderInterface[] $loaders List of chained loaders
     */
    public function __construct(array $loaders = [])
    {
        foreach ($loaders as $loader) {
            $this->addLoader($loader);
        }
    }

    /**
     * @return self
     */
    public function addLoader(CatalogLoaderInterface $loader)
    {
        $this->loader[] = $loader;

        return $this;
    }

    /**
     * @return CatalogLoaderInterface[]
     */
    public function getLoaders()
    {
        return $this->loader;
    }

    /**
     * {@inheritdoc}
     */
    public function getCatalogs()
    {
        $catalogs = [];

        foreach ($this->getLoaders() as $loader) {
            $catalogs = array_merge($catalogs, $loader->getCatalogs());
        }

        $catalogs = array_unique($catalogs);

        return $catalogs;
    }
}
