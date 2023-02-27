<?php

namespace Heseya\AppHelper\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Response;

class InfoController extends Controller
{
    public function index(): JsonResponse
    {
        return Response::json(Arr::only(Config::get('heseya'), [
            'name',
            'author',
            'version',
            'api_version',
            'description',
            'microfrontend_url',
            'icon',
            'licence_required',
            'required_permissions',
            'internal_permissions',
        ]));
    }
}
