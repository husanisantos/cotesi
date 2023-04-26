<?php

/**--------------------------
 * Configura a página inicial
 *---------------------------
 */

use Cocur\Slugify\Slugify;
use Cotesi\Helper\Assets;
use Cotesi\Helper\Data;

Flight::route('/', function() {

    $asset  = new Assets();
    $event  = new Data();
    $slug   = new Slugify();

    $data  = [
        'titulo'    => 'COTESI - Congresso de Tecnologia e Sistemas da Informação',
        'assets'    => $asset->url(),
        'eventos'   => $event->get('eventos'),
        'slugify'   => $slug
    ];
 
    Flight::render('header' , $data);
    Flight::render('home'   , $data);
    Flight::render('footer' , $data);
});