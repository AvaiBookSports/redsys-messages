<?php

namespace AvaiBookSports\Component\RedsysMessages;

use AvaiBookSports\Component\RedsysMessages\Exception\CatalogNotFoundException;
use AvaiBookSports\Component\RedsysMessages\Exception\RuntimeException;
use AvaiBookSports\Component\RedsysMessages\Loader\CatalogLoaderInterface;

class Factory
{
    /**
     * @var CatalogLoaderInterface
     */
    private $loader;

    public function __construct(CatalogLoaderInterface $loader)
    {
        $this->setLoader($loader);
    }

    public function setLoader(CatalogLoaderInterface $loader)
    {
        $this->checkCatalogs($loader->getCatalogs());

        $this->loader = $loader;
    }

    /**
     * @param string[] $catalogs
     *
     * @throws RuntimeException if a catalog is not found or doesn't implement CatalogInterface
     */
    private function checkCatalogs(array $catalogs)
    {
        foreach ($catalogs as $catalog) {
            if (!class_exists($catalog)) {
                throw new RuntimeException(sprintf('Class "%s" not found', $catalog));
            }

            if (!in_array(CatalogInterface::class, class_implements($catalog, true))) {
                throw new RuntimeException(sprintf('Class "%s" must implement %s', $catalog, CatalogInterface::class));
            }
        }
    }

    /**
     * Get a message catalog by language. Accepts ISO 639-1 and ISO 639-2 codes.
     *
     * @return CatalogInterface
     */
    public function createCatalogByLanguage(string $language)
    {
        foreach ($this->loader->getCatalogs() as $catalog) {
            if ($catalog::getIso639Alpha2() === $language || $catalog::getIso639Alpha3() === $language) {
                return new $catalog();
            }
        }

        throw new CatalogNotFoundException(sprintf('No catalog registered for language "%s"', $language));
    }
}
