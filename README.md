# laravel-docsify

This package provides an easy way to add documentation to your project using docsify.

## Installation

You can install the package via Composer:

```bash
composer require acelords/laravel-docsify
```

The package will automatically register itself.

Optionally, publish its config file to config/docsify.php:

```bash
php artisan vendor:publish --provider="AceLords\Docsify\DocsifyServiceProvider"
```

## Documentation

Add your markdown documentation files in the docs/ folder and goto the /docs route to view your documentation.  
You can change the route and the route middleware in the config file.

### middleware 
Examples:
- permission:view-docs
- role: admin|sudo
- ['auth', 'role:sudo|admin']
- ['auth', 'permission:view-docs']
- ['auth', 'role:sudo|admin', 'permission:view-docs']
- ['auth:sanctum', 'role:sudo|admin', 'permission:view-docs']
