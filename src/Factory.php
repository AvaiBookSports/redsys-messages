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

    /**
     * @return self
     */
    final public function setLoader(CatalogLoaderInterface $loader)
    {
        $this->assertCatalogs($loader->getCatalogs());

        $this->loader = $loader;

        return $this;
    }

    /**
     * @param string[] $catalogs
     *
     * @return self
     *
     * @throws RuntimeException if a catalog is not found or doesn't implement CatalogInterface
     */
    private function assertCatalogs(array $catalogs)
    {
        foreach ($catalogs as $catalog) {
            if (!class_exists($catalog)) {
                throw new RuntimeException(sprintf('Class "%s" not found', $catalog));
            }

            if (!in_array(CatalogInterface::class, class_implements($catalog, true))) {
                throw new RuntimeException(sprintf('Class "%s" must implement %s', $catalog, CatalogInterface::class));
            }
        }

        return $this;
    }

    /**
     * Get a message catalog by language. Accepts ISO 639-1 and ISO 639-2 codes.
     *
     * @param string $language
     *
     * @return CatalogInterface
     */
    public function createCatalogByLanguage($language)
    {
        foreach ($this->loader->getCatalogs() as $catalog) {
            if ($catalog::getIso639Alpha2() === $language || $catalog::getIso639Alpha3() === $language) {
                return new $catalog();
            }
        }

        throw new CatalogNotFoundException(sprintf('No catalog registered for language "%s"', $language));
    }
}
