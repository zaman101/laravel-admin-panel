<h2 align="center">Admin Panel</h2>

## Features

This package contains backend template for laravel framework.

## Installation

First, install the package via composer:

    composer require zaman101/laravel-adminlte3 dev-master


## Configuration

After updating composer, publish the configuration:

    php artisan vendor:publish --provider="Zaman101\LaravelAdminlte3\AdminPanelServiceProvider"   
    
You can publish configuration with tag also:
    
    php artisan vendor:publish --provider="Zaman101\LaravelAdminlte3\AdminPanelServiceProvider" --tag=views
    
This will copy the views to resource/backend where you can edit it. Also css are added to public/backend folder.
