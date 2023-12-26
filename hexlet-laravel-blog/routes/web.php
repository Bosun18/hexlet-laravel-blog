<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController_old;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$team = [
    ['name' => 'Hodor', 'position' => 'programmer'],
    ['name' => 'Joker', 'position' => 'CEO'],
    ['name' => 'Elvis', 'position' => 'CTO'],
];

Route::get('/', function () {
    return view('welcome');
});

//Route::get('about', function () use ($team) {
//    // BEGIN (write your solution here)
//    return view('about', ['team' => $team]);
//    // END
//});

Route::get('about', [PageController::class, 'about']);
//Route::get('team', [PageController::class, 'team']);
/*
// Название сущности в URL во множественном числе, контроллер в единственном
Route::get('articles', [ArticleControllerOld::class, 'index'])
    ->name('articles.index'); // имя маршрута, нужно для того, чтобы не создавать ссылки руками

Route::get('articles/create', [ArticleControllerOld::class, 'create'])
    ->name('articles.create');

Route::get('articles/{id}', [ArticleControllerOld::class, 'show'])
    ->name('articles.show');

Route::post('articles', 'ArticleControllerOld@store')
    ->name('articles.store');

Route::get('articles/{id}/edit', [ArticleControllerOld::class, 'edit'])
    ->name('articles.edit');

Route::patch('articles/{id}', [ArticleControllerOld::class, 'update'])
    ->name('articles.update');

Route::delete('articles/{id}', [ArticleControllerOld::class, 'destroy'])
    ->name('articles.destroy');
*/
Route::resource('articles', ArticleController::class);
