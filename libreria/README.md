
php artisan config:clear: Este comando se utiliza para borrar la caché de configuración de Laravel. Si has realizado cambios en los archivos de configuración de tu aplicación (ubicados en la carpeta config), ejecutar este comando asegurará que los cambios se reflejen correctamente.

php artisan view:clear: Se utiliza para borrar la caché de vistas. Si has realizado cambios en las vistas de tu aplicación (archivos .blade.php), ejecutar este comando garantiza que los cambios se tomen en cuenta y se vuelvan a generar las vistas cacheadas.

php artisan route:clear: Este comando borra la caché de rutas. Si has realizado cambios en las definiciones de rutas (archivo routes/web.php o routes/api.php), ejecutar este comando asegurará que las rutas se vuelvan a registrar correctamente.

php artisan config:cache: Combina y cachea la configuración de tu aplicación en un solo archivo para mejorar el rendimiento de carga. Es útil en entornos de producción.

php artisan migrate:reset: Deshace todas las migraciones ejecutadas previamente, lo que significa que revierte todos los cambios en la base de datos.

php artisan migrate:rollback: Deshace la última migración ejecutada, lo que significa que revierte el último cambio en la base de datos.

php artisan migrate:refresh: Deshace y luego ejecuta nuevamente todas las migraciones, lo que te permite reiniciar la base de datos a su estado inicial y luego aplicar todas las migraciones nuevamente.

php artisan migrate:status: Muestra el estado actual de todas las migraciones en la base de datos, indicando cuáles se han ejecutado y cuáles no.

composer dump-autoload: Actualiza el archivo de carga automática de clases de Composer, que se utiliza para cargar automáticamente las clases de tu proyecto. Se utiliza después de realizar cambios en la estructura de carpetas o en las clases para que Composer siga siendo capaz de cargar las clases correctamente.

# Inicia el servidor de desarrollo
npm run dev

# Inicia el servidor local de Laravel
php artisan serve

# Crea un conjunto de operaciones CRUD (crear, leer, actualizar, eliminar) para el modelo 'libros'
php artisan make:crud libros

# Publica los recursos del paquete de generación de CRUD con la etiqueta 'crud'
php artisan vendor:publish --tag=crud

# Requiere la instalación del generador de CRUD 'ibex/crud-generator' como dependencia de desarrollo
composer require ibex/crud-generator --dev

# Instala las vistas de interfaz de usuario de Bootstrap con autenticación
php artisan ui bootstrap --auth

# Instala el paquete de Laravel/UI para generar vistas de autenticación
composer require laravel/ui

# Ejecuta las migraciones de la base de datos
php artisan migrate

# Crea una migración para el modelo 'libros'
php artisan make:migration libros

# Publica los recursos del paquete de generación de CRUD con la etiqueta 'crud'
php artisan vendor:publish --tag=crud

# Requiere la instalación del generador de CRUD 'ibex/crud-generator' como dependencia de desarrollo
composer require ibex/crud-generator --dev

# Instala las vistas de interfaz de usuario de Bootstrap con autenticación
php artisan ui bootstrap --auth

# Instala el paquete de Laravel/UI para generar vistas de autenticación
composer require laravel/ui

# Requiere la instalación del paquete PHPMailer para manejar el envío de correos electrónicos
composer require phpmailer/phpmailer

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
