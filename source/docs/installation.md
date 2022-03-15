---
title: Installation
description: Install Pianola as a Laravel Package
extends: _layouts.documentation
section: content
---

## Laravel Installation

Go to the folder where you want the project repository to live, and create a new Laravel project:

```bash
laravel new [projectName]
```

Cd into the project, initialise git and make a first commit:

```bash
cd [projectName]
git init
git add .
git commit -m ‘initial commit’
```

## Fortify

- `composer require laravel/fortify`

- `php artisan vendor:publish —provider=“Laravel\Fortify\FortifyServiceProvider”`

- `php artisan migrate`

- register `App\Providers\FortifyServiceProvider` in config/app.php

- change fortify settings - `'views' => false,` - `'features' => [`
  ` // Features::registration(),`
  ` Features::resetPasswords(),`
  ` // Features::emailVerification(),`
  ` // Features::updateProfileInformation(),`
  ` // Features::updatePasswords(),`
  ` Features::twoFactorAuthentication([`
  ` 'confirmPassword' => false,`
  ` ]),`
  ` ],`

## Sanctum

- `composer require laravel/sanctum`

- `php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"`

- enable middleware in `app/Http/Kernel.php` :

```
'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    'throttle:api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],
```

- add the following paths in `config/cors.php`:

```
'paths' => [
        'api/*',
        'login',
        'logout',
        'user/*',
        'two-factor-challenge',
        'sanctum/csrf-cookie'
    ],
```

- set `'supports_credentials' => true,` in `config/cors.php`

- add `SESSION_DOMAIN` and `SANCTUM_STATEFUL_DOMAINS` to .env for local development:

```
SANCTUM_STATEFUL_DOMAINS=localhost,localhost:8081,localhost:8080,localhost:8000,127.0.0.1,127.0.0.1:8000,::1
SESSION_DOMAIN=localhost
```
