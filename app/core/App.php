<?php
namespace App\core;

use App\core\Router;
use App\core\Database;
use Dotenv\Dotenv;

class App {
    public static $app;
    public $router;
    public $db;

    public function __construct() {
        self::$app = $this;
        
        // Cargar variables de entorno
        $dotenv = Dotenv::createImmutable(dirname(__DIR__, 2));
        $dotenv->load();
        
        // Configurar base de datos
        $this->db = new Database();
        
        // Configurar router
        $this->router = new Router();
    }

    public function run() {
        $this->router->resolve();
    }
}