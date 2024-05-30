<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Multitenancy\Models\Tenant;

Route::get('/', function () {
    return auth()->user();
    // return DB::table('users')->take(10)->get();
    // return Tenant::current();
    // return view('welcome');
});
