# Implementation of a test task for Webcoder

## Installation
### Install via Composer
```
    composer create-project bulbakh/webcoder
```

## Requirements
    PHP 8.3+
    PDO enabled

## Database config
    /config.php

## DocumentRoot
    /public

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


