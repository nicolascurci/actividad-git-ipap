BabyFramework - Mini Framework PHP para Principiantes
Características principales
✅ Arquitectura MVC (Modelo-Vista-Controlador)

✨ Motor de plantillas Blade (igual que Laravel)

🎨 Bootstrap 5 integrado para diseño responsive

🛢️ PDO MySQL para conexiones seguras a bases de datos

🛣️ Sistema de rutas personalizado y fácil de usar

🛡️ Middleware para capas de seguridad

🐳 Docker listo para desarrollo (PHP + MySQL + PHPMyAdmin)

📦 Composer para gestión de dependencias

Requisitos mínimos
PHP 8.0 o superior

Composer 2.0+

MySQL 5.7+ o MariaDB

Opcional: Docker 20.10+ (para desarrollo con contenedores)

Instalación completa
1. Clonar el repositorio
bash
git clone https://github.com/tu-usuario/babyframework.git
cd babyframework
2. Configurar entorno
bash
cp .env.example .env  # Copiar archivo de configuración
3. Instalar dependencias
bash
composer install
4. Configuración con Docker (recomendado)
bash
docker-compose up -d
5. Acceder a la aplicación
Aplicación web: http://localhost:8000

PHPMyAdmin: http://localhost:8080 (usuario: root, contraseña: secret)

Estructura completa del proyecto
babyframework/
├── app/
│   ├── Controllers/    # Controladores de la aplicación
│   ├── Models/         # Modelos de base de datos
│   ├── Middleware/     # Middlewares
│   ├── Views/          # Vistas Blade (.blade.php)
│   └── core/           # Núcleo del framework
│       ├── App.php     # Clase principal
│       ├── Router.php  # Sistema de rutas
│       └── Database.php # Conexión a DB
├── config/
│   ├── app.php         # Configuración general
│   └── database.php    # Configuración DB
├── public/
│   ├── assets/         # CSS, JS, imágenes
│   └── index.php       # Punto de entrada
├── vendor/             # Dependencias de Composer
├── .env                # Variables de entorno
├── .env.example        # Plantilla de configuración
├── docker-compose.yml  # Configuración Docker
├── Dockerfile          # Imagen PHP personalizada
└── README.md           # Este archivo
Configuración de base de datos
Editar el archivo .env:

ini
DB_HOST=mysql       # Nombre del servicio en Docker
DB_NAME=babyframework  # Nombre de la base de datos
DB_USER=root        # Usuario
DB_PASS=secret      # Contraseña
Ejemplos de uso
Crear una nueva ruta
php
// En public/index.php
$app->router->get('/saludo', [SaludoController::class, 'mostrar']);
Crear un controlador
php
// app/Controllers/SaludoController.php
namespace App\Controllers;

class SaludoController {
    public function mostrar() {
        return view('saludo', ['mensaje' => 'Hola Mundo']);
    }
}
Crear una vista Blade
php
{{-- app/Views/saludo.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="alert alert-info">
        {{ $mensaje }}
    </div>
@endsection
Comandos Docker esenciales
Comando	Descripción
docker-compose up -d	Iniciar todos los servicios
docker-compose down	Detener todos los servicios
docker-compose ps	Ver servicios en ejecución
docker-compose exec app bash	Acceder al contenedor PHP
docker-compose logs -f	Ver logs en tiempo real
Cómo contribuir
Haz un fork del proyecto

Crea una rama para tu feature (git checkout -b feature/awesome-feature)

Haz commit de tus cambios (git commit -am 'Add awesome feature')

Haz push a la rama (git push origin feature/awesome-feature)

Abre un Pull Request

Licencia
Este proyecto está licenciado bajo la licencia MIT - ver el archivo LICENSE para más detalles.