<?php

use App\Http\Controllers\ChildController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChildController::class, 'fathersWithChildren']);
