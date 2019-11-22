<?php
/**
 *  titolo: Orari Start Romagna
 *  autore: Gabriele Generale (http://startromagna.it)
 *  licenza GPL3
 **/

    require_once('config/config.php');
    require_once('class/telegramClass.php');
    require_once('class/trasportiClass.php');
    require_once('class/mezziClass.php');
    require_once('class/mezzi/strtfc.php');
    require_once('class/mezzi/strtrn.php');
    require_once('class/mezzi/strtra.php');
    
    
    $trasporti = new trasportiClass();       
    $trasporti->ProcessMessage();

