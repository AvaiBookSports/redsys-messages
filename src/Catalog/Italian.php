<?php

namespace AvaiBookSports\Component\RedsysMessages\Catalog;

use AvaiBookSports\Component\RedsysMessages\AbstractCatalog;
use AvaiBookSports\Component\RedsysMessages\CatalogInterface;

class Italian extends AbstractCatalog
{
    /**
     * @var string[]
     */
    private $dsResponseMessages = [
        '0101' => 'Carta scaduta',
        '0102' => 'Carta in deroga transitoria o in sospetto di frode',
        '0106' => 'Tentativi di superamento del PIN',
        '0125' => 'Carta non efficace',
        '0129' => 'Codice di sicurezza errato (CVV2/CVC2)',
        '0180' => 'Scheda esterna',
        '0184' => 'Errore di autenticazione del titolare della carta',
        '0190' => 'Rifiuto dell\'emittente senza motivo',
        '0191' => 'Data di scadenza errata',
        '0195' => 'Richiede l\'autenticazione SCA',
        '0202' => 'Carta in deroga temporanea o in sospetto di frode con ritiro della carta',
        '0904' => 'Commercio non registrato presso FUC',
        '0909' => 'Errore di sistema',
        '0913' => 'Ripetere l\'ordine',
        '0944' => 'Sessione non corretta',
        '0950' => 'Operazione di ritorno non consentita',
        '9912' => 'Emettitore non disponibile',
        '0912' => 'Emettitore non disponibile',
        '9064' => 'Numero errato di posizioni della carta',
        '9078' => 'Tipo di operazione non consentita per quella carta',
        '9093' => 'Carta inesistente',
        '9094' => 'L\'emettitore ha rifiutato la transazione internazionale',
        '9104' => 'Trading con “supporto sicuro” e supporto senza chiave di acquisto sicura',
        '9218' => 'Il commercio non consente operazioni sicure per entrata/transazioni',
        '9253' => 'La carta non è conforme alla cifra di controllo',
        '9256' => 'Il commercio non può effettuare pre-autorizzazioni',
        '9257' => 'Questa carta non consente di effettuare operazioni di preautorizzazione.',
        '9261' => 'Operazione interrotta per superamento dei limiti di ingresso al SIS',
        '9915' => 'Su richiesta dell\'utente, il pagamento è stato annullato.',
        '9997' => 'Nel SIS è in corso l\'elaborazione di un\'altra transazione con la stessa carta.',
        '9998' => 'Operazione in corso di richiesta dei dati della carta',
        '9999' => 'Operazione che è stata reindirizzata all\'emittente per l\'autenticazione.',
    ];

    /**
     * @var string[]
     */
    private $errorMessages = [];

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

    /**
     * {@inheritdoc}
     */
    public function getErrorMessage($code)
    {
        if (array_key_exists($code, CatalogInterface::SIS_ERRORS)) {
            $this->getErrorMessage(CatalogInterface::SIS_ERRORS[$code]);
        }

        if (array_key_exists($code, $this->errorMessages)) {
            return $this->errorMessages[$code];
        }

        return null;
    }
}
