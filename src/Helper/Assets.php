<?php
namespace Cotesi\Helper;

use Flight;

class Assets {

    public function url() {
        $url = $_SERVER['SERVER_NAME'];
        $ptc = Flight::request()->scheme;
        return "$ptc://$url/public";  
    }

}