<?php

use Heseya\AppHelper\Http\Controllers\InfoController;

Route::get('/', [InfoController::class, 'index']);
