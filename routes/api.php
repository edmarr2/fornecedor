<?php

use App\Contracts\Models\FornecedorServiceInterface;
use App\Http\Resources\Fornecedor as FornecedorResource;
use App\Models\Fornecedor;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register', 'Auth\RegisterController@register');
Route::post('login','Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Auth::guard('api')->user(); // instance of the logged user
Auth::guard('api')->check(); // if a user is authenticated
Auth::guard('api')->id(); // the id of the authenticated user
Route::middleware('auth:api')->get('/fornecedores', function (Request $request) {
    Route::resource('/fornecedores', 'FornecedorApiController')->parameters(['fornecedores' => 'fornecedor']);
});

