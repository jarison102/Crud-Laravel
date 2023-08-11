
# Borrar la caché de configuración
php artisan config:clear

# Borrar la caché de vistas
php artisan view:clear

# Borrar la caché de rutas
php artisan route:clear

# Combinar y cachea la configuración
php artisan config:cache

# Deshacer todas las migraciones
php artisan migrate:reset

# Deshacer la última migración
php artisan migrate:rollback

# Reiniciar y ejecutar todas las migraciones
php artisan migrate:refresh

# Mostrar el estado de las migraciones
php artisan migrate:status

# Actualizar el archivo de carga automática de clases
composer dump-autoload

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
