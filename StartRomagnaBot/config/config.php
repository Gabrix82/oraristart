<?php
/**
 *  titolo: Orari Start Romagna
 *  autore: Gabriele Generale (http://startromagna.it)
 *  licenza: GPL3
 **/

    define('BOT_TOKEN', '');
    define('API_URL', 'https://api.telegram.org/bot'.BOT_TOKEN.'/');
    
    define('dir_doku', '../../www/wiki/');
    define('doku_data', dir_doku.'data/pages/');

    define('type_error_message', "Formato sbagliato, digita un semplice messaggio");
    define('welcome_message', "Benvenuto su Orari Start Romagna, \ndigitando il nome di un comune o inviando la tua posizione visualizzerai l'elenco di fermate dei mezzi pubblici più vicine a te. \n \nIl bot è stato realizzato utilizzando gli OpenData messi a disposizione da Start Romagna sotto licenza CC BY 3.0 http://servizi.startromagna.it/opendata/od/Home/30. \n \nRealizzato da Generale Gabriele, \nRilasciato sotto licenza GPL3.");
    define('help_message', "Digita il nome del comune e invia il messaggio oppure invia la tua posizione. \n\nPer qualsiasi dubbio, informazione o chiarimento puoi scrivermi su telegram oppure mandarmi una mail: gabrielegenerale@gmail.com");
    
    define('acapo', "\n");
