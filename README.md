# Test task for Webcoder

## Installation

## Deploying with Docker

    git clone https://github.com/bulbakh/webcoder.git
    cd webcoder
    docker-compose up

## Manual Deploying

    git clone https://github.com/bulbakh/webcoder.git
    cd webcoder
    composer dump-autoload

### Setup database config

    ./config.php

### Create tables

    ./database/create.sql

## SERVER SETTINGS

### DocumentRoot

    ./public

### Requirements

    PHP 8.3+
    PDO enabled

## SEO-friendly URL

### Nginx

    location / {
        try_files $uri $uri/ /index.php$is_args$args;
    }

### Apache

    .htaacess
    <IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    RewriteRule ^index\.php$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . /index.php [L]
    </IfModule>
