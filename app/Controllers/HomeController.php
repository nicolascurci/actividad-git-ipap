<?php
namespace App\Controllers;

use App\core\App;

class HomeController {
    public function index() {
        $title = "Bienvenido a BabyFramework";
        return view('home', compact('title'));
    }
}