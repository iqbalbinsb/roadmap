<?php

use App\Http\Controllers\Api\ChangelogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('changelogs', [ChangelogController::class, 'index'])
    ->name('changelogs.index');

Route::get('changelogs/{changelog:id}', [ChangelogController::class, 'show'])
    ->name('changelogs.show');
