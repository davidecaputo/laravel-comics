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
    $data = [
        'comics' => config('comics')
        ];
    return view('home', $data);
});

Route::get('users/{id}', function ($id) {
    $comics = config('comics');
    if($id >= 0 && $id < count($comics)){
        $comic = $comics[$id];
        return view('pages.info', compact('comic'));
    } else {
        return abort(404);
    }
})->name('pages.info');
