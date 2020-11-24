<?php

namespace AvaiBookSports\Component\RedsysMessages;

interface CatalogInterface
{
    /**
     * @return string 2 letter language ISO code
     */
    public static function getIso639Alpha2();

    /**
     * @return string 3 letter language ISO code
     */
    public static function getIso639Alpha3();

    /**
     * @return string|null Friendly error message for the customer or null if not found
     */
    public function getDsResponseMessage(string $code);
}
