<?php

/**--------------------------
 * Configura a página inicial
 *---------------------------
 */

use Cocur\Slugify\Slugify;
use Cotesi\Helper\Assets;
use Cotesi\Helper\Data;
use Cotesi\Helper\Date;

Flight::route('/', function() {

    $asset  = new Assets();
    $event  = new Data();
    $slug   = new Slugify();
    $date   = new Date();

    $data  = [
        'titulo'    => 'COTESI - Congresso de Tecnologia e Sistemas da Informação',
        'assets'    => $asset->url(),
        'eventos'   => $event->get('eventos'),
        'slugify'   => $slug,
        'date'      => $date
    ];

    foreach ($data['eventos'] as $key => $value) {
        if ($key === key($data['eventos'])) {
            $data['eventos'][$key]->current = true;
        } else {
            $data['eventos'][$key]->current = false;
        }
    }
 
    Flight::render('header' , $data);
    Flight::render('home'   , $data);
    Flight::render('footer' , $data);
});