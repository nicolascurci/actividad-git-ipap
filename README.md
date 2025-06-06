# Actividad Git IPAP - BabyFramework + Poncho

Este proyecto es una práctica de integración de tecnologías realizada como parte de una actividad del curso del IPAP. Se basa en un microframework propio llamado **BabyFramework**, al que se le integró la plantilla visual **Poncho** del Gobierno Argentino.

---

## 🧱 Tecnologías Utilizadas

- PHP 8.2
- Composer (para autoloading)
- BabyFramework (estructura MVC mínima propia)
- Poncho (framework visual y de estilos)
- Bootstrap (incluido con Poncho)
- Docker (para contenerizar y facilitar despliegue)
- Git y GitHub (control de versiones)

---

## 📁 Estructura del Proyecto

```
actividad-git-ipap/
│
├── app/
│   ├── controllers/
│   │   └── PonchoController.php
│   ├── core/
│   │   └── App.php
│   ├── views/
│       ├── poncho.blade.php          # Layout principal
│       └── poncho-home.blade.php     # Vista de ejemplo con Poncho
│
├── public/
│   ├── index.php                     # Front controller
│   └── css/js/img                    # Recursos de Poncho copiados
│
├── vendor/                           # Composer autoload
├── docker-compose.yml                # Archivo para levantar contenedor PHP + servidor
├── Dockerfile                       # Imagen PHP 8.2 configurada
└── README.md
```

---

## 🚀 ¿Cómo ejecutar el proyecto?

### Opción 1: Usando Docker

1. Levantar el proyecto con Docker Compose:

   ```bash
   docker-compose up -d
   ```

2. Abrir en el navegador:

   ```
   http://localhost:8000/poncho/index
   ```

### Opción 2: Usando PHP nativo

1. Clonar el repositorio:

   ```bash
   git clone https://github.com/tuusuario/actividad-git-ipap.git
   cd actividad-git-ipap
   ```

2. Levantar servidor PHP embebido:

   ```bash
   php -S localhost:8000 -t public
   ```

3. Abrir en navegador:

   ```
   http://localhost:8000/poncho/index
   ```

---

## 🎨 Integración con Poncho

Poncho es un framework visual oficial del Gobierno Argentino que provee estilos, componentes y tipografías para sitios web institucionales.

Se integró copiando sus archivos CSS, JS e imágenes al directorio `public/` y armando un layout base (`poncho.blade.php`) que sirve para reutilizar el diseño en las vistas del framework propio.

---

## 🏛️ Repositorio clonado: Poncho - Gobierno Argentino

Este proyecto incluye archivos obtenidos del repositorio oficial de [Poncho](https://github.com/argob/poncho), el framework visual del Gobierno Argentino.

### ¿Qué es Poncho?

Poncho está pensado para crear sitios accesibles, consistentes y responsivos alineados con la identidad visual del Estado. Utiliza Bootstrap como base y adapta sus componentes a una estética gubernamental.

Repositorio oficial: [https://github.com/argob/poncho](https://github.com/argob/poncho)

---

## 🧠 Aprendé sobre ramas en Git

Aquí te compartimos dos herramientas interactivas para practicar ramas en Git:

### 1. [Learn Git Branching](https://learngitbranching.js.org/)

Simulador interactivo para practicar comandos de Git con visualizaciones que facilitan entender conceptos complejos.

### 2. [Git School – Visualizing Git](https://git-school.github.io/visualizing-git/)

Herramienta visual para entender cómo funcionan los commits y las ramas con diagramas animados.

---

## ✅ Objetivo del proyecto

- Practicar el uso de ramas con Git y manejo de conflictos.
- Integrar plantillas visuales oficiales a un framework propio.
- Aprender buenas prácticas en separación de lógica y presentación.
- Conocer herramientas modernas para desarrollo con PHP 8.2 y Docker.

---

## 📄 Licencia

Este proyecto es educativo y de uso libre con fines académicos.

---

# Demo de conflictto

Cambio una línea desden main.


Desarrollado con ❤️ para la capacitación del IPAP.
