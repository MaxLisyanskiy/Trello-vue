<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\SpaController;

Route::get('/{any}','App\Http\Controllers\SpaController@index')->where('any', '.*');
