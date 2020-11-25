# Redsys Messages

![Tests status](https://github.com/AvaiBookSports/redsys-messages/workflows/Test/badge.svg)
![Quality assurance status](https://github.com/AvaiBookSports/redsys-messages/workflows/Quality%20assurance/badge.svg)

## Installation

```
composer require avaibooksports/redsys-messages
```

## Usage

To use the built-in translations, just load the standard catalog:

```php
use AvaiBookSports\Component\RedsysMessages;

$redsysMessages = new RedsysMessages\Factory(new RedsysMessages\Loader\CatalogLoader());

// Returns "Expired card"
$redsysMessages->createCatalogByLanguage('en')->getDsResponseMessage('0101');

// You can load catalogs by ISO 639-1 and ISO 639-2
$redsysMessages->createCatalogByLanguage('eng')->getDsResponseMessage('0101');
```

### Creating and loading custom catalogs

To load a custom catalog, you must implement one or multiple classes implementing `AvaiBookSports\Component\RedsysMessages\CatalogInterface`.

After that, you just have to invoke the factory with an `ArrayLoader`:

```php
// src/Redsys/Messages/Italian.php

namespace App\Redsys\Messages;

use AvaiBookSports\Component\RedsysMessages\CatalogInterface;

class English implements CatalogInterface
{
    /**
     * @var string[]
     */
    private $dsResponseMessages = [
        '0101' => 'Carta scaduta',
        // ...
    ];

    /**
     * {@inheritdoc}
     */
    public static function getIso639Alpha2()
    {
        return 'it';
    }

    /**
     * {@inheritdoc}
     */
    public static function getIso639Alpha3()
    {
        return 'ita';
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
```

```php
use AvaiBookSports\Component\RedsysMessages;

$redsysMessages = new RedsysMessages\Factory(
    new RedsysMessages\Loader\ArrayLoader([
        \App\Redsys\Messages\Italian::class,
        // ...
    ])
);

// "Carta scaduta"
$redsysMessages->createCatalogByLanguage('it')->getDsResponseMessage('0101');
```

## Loading multiple catalogs

Probably you will want to load all the catalogs included in this library, and some custom catalogs for not supported languages.

You can use the `ChainLoader` for that purpose:

```php
use AvaiBookSports\Component\RedsysMessages;

$redsysMessages = new RedsysMessages\Factory(
    new RedsysMessages\ChainLoader([
        new RedsysMessages\Loader\CatalogLoader(),
        new RedsysMessages\Loader\ArrayLoader([
            \App\Redsys\Messages\Italian::class,
            // ...
        ])
        new App\Redsys\Loader\MyCustomLoader(), // Maybe you want to implement your own loader?
    ])
);
```

`AvaiBookSports\Component\RedsysMessages\CatalogInterface\Factory` will allow as a parameter any class implementing
`AvaiBookSports\Component\RedsysMessages\CatalogInterface\CatalogLoaderInterface`, and `ChainLoader` will allow you to load
multiple catalogs at once, so nothing stops you from making your custom catalog loader.

## Contributing

Contributions are very welcome, especially catalog translations. If you made your catalog to support your native language,
please consider making a pull request.

- Just keep an eye on the tests `vendor/bin/simple-phpunit` and don't use type-hinting except for `array` and `object`
to support PHP 5. Use phpDoc.
- Fix your code formatting with `vendor/bin/php-cs-fixer fix`
- Take a look at `psalm` to check what you can improve

Following these steps will guarantee you a green check in the pull request!
