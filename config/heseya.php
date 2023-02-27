<?php

use Illuminate\Support\Env;

return [

    'name' => Env::get('APP_NAME', 'Heseya Sample App'),
    'author' => Env::get('APP_NAME'),
    'description' => Env::get('APP_DESCRIPTION'),
    'icon' => Env::get('APP_ICON'),
    'version' => Env::get('APP_VER', '1.0.0'),
    'api_version' => Env::get('API_VER', '^3.0.0'),
    'microfrontend_url' => Env::get('MICROFRONTEND_URL'),
    'licence_required' => Env::get('LICENSE_REQUIRED', false),
    'required_permissions' => [],
    'internal_permissions' => [],

];
