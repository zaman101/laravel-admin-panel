<h2 align="center">Laravel Admin Panel</h2>

## Features

This package contains backend template for laravel framework. This package contains AdmintLTE3 template. Also it contain a sample CRUD template.

## Installation

First, install the package via composer:

    composer require zaman101/laravel-admin-panel dev-master


## Configuration

After updating composer, publish the configuration:

    php artisan vendor:publish --provider="Zaman101\LaravelAdminPanel\AdminPanelServiceProvider"   
    
You can publish configuration with tag also:
    
    php artisan vendor:publish --provider="Zaman101\LaravelAdminPanel\AdminPanelServiceProvider" --tag=views
    
For access routes add this to web.php:
    
    require __DIR__.'/backend.php';
    
This will copy the views to resource/backend where you can edit it. Also css are added to public/backend folder.
Now serve the project and login to the system. You can see dashboard and a sample CRUD design.
