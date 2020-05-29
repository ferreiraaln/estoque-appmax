<?php

use Illuminate\Http\Request;



Route::apiResources([
    'adicionar-produtos' => 'api\AdcionarController',
    'baixar-produtos' => 'api\BaixarController'
]);
