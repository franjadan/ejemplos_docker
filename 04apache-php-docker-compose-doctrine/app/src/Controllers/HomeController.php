<?php

namespace App\Controllers;

use App\Services\Doctrine;

class HomeController {
    public function index(Doctrine $doctrine) {
        var_dump($doctrine);
    }
}
