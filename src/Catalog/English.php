<?php

namespace AvaiBookSports\Component\RedsysMessages\Catalog;

use AvaiBookSports\Component\RedsysMessages\CatalogInterface;

class English implements CatalogInterface
{
    /**
     * @var string[]
     */
    private $dsResponseMessages = [
        '0101' => 'Expired card',
        '0102' => 'Card in transitional derogation or under suspicion of fraud',
        '0106' => 'Attempts to exceed PINs',
        '0125' => 'Card not effective',
        '0129' => 'Incorrect security code (CVV2/CVC2)',
        '0180' => 'External card',
        '0184' => 'Cardholder authentication error',
        '0190' => 'Refusal of the issuer without reason',
        '0191' => 'Wrong expiration date',
        '0195' => 'Requires SCA authentication',
        '0202' => 'Card in temporary derogation or under suspicion of fraud with card withdrawal',
        '0904' => 'Trade not registered with FUC',
        '0909' => 'System error',
        '0913' => 'Repeat order',
        '0944' => 'Incorrect Session',
        '0950' => 'Return operation not allowed',
        '9912' => 'Emitter not available',
        '0912' => 'Emitter not available',
        '9064' => 'Incorrect number of card positions',
        '9078' => 'Type of operation not allowed for that card',
        '9093' => 'Non-existent card',
        '9094' => 'Emitter rejected international transaction',
        '9104' => 'Trading with "secure holder" and holder without secure purchase key',
        '9218' => 'The trade does not allow safe operations per entry/transactions',
        '9253' => 'Card does not comply with check-digit',
        '9256' => 'Trade cannot make pre-authorizations',
        '9257' => 'This card does not allow pre-authorization operations',
        '9261' => 'Operation stopped for exceeding SIS entry restrictions',
        '9915' => 'At the user\'s request, the payment has been cancelled',
        '9997' => 'Another transaction is being processed in SIS with the same card',
        '9998' => 'Operation in process of card data request',
        '9999' => 'Operation that has been redirected to the issuer to be authenticated',
    ];

    /**
     * {@inheritdoc}
     */
    public static function getIso639Alpha2()
    {
        return 'en';
    }

    /**
     * {@inheritdoc}
     */
    public static function getIso639Alpha3()
    {
        return 'eng';
    }

    /**
     * {@inheritdoc}
     */
    public function getDsResponseMessage($code)
    {
        if (array_key_exists($code, $this->dsResponseMessages)) {
            return $this->dsResponseMessages[$code];
        }

        return null;
    }
}
