<?php

use App\Http\Controllers\CategoryController;
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

// rute
Route::get('hellojson', function(){
    return response()->json([
        'msg' => 'success',
        '-data' => [
            'nama' => 'babayo',
            'kelas' => 'xi pplg 2',
            'absen' => '33',

            '-ortu' => [
                'ayah' => 'ayah kalian',
                'ibu' => 'ibu kalian',
            ]
        ]
    ]);
});

Route::get ('get-category', [CategoryController::class, 'index'])->name('category.index');

Route::post('store-category',[CategoryController::class, 'store'])->name('category.store');
