<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $bluethumbs = config('dbbluethumbs');
    $comics = config('db');
    $shops = config('dbshops');
    $dcs = config('dbdcs');
    $sites = config('dbsites');
    $dccomics = config('dbdccomics');
    return view('home', compact('bluethumbs', 'comics', 'shops', 'dcs', 'sites', 'dccomics'));
})->name('homepage');
