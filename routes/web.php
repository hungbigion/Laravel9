<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
Route::get('products', [
    ProductsController::class,
    'index'
]);
Route::get('products/{ProductsName}', [
    ProductsController::class,
    'detail'
]);



// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/user', function () {
//     return 'This Is the User';
// });
// Route::get('/foods', function () {
//     return ['sushi', 'sashimi','Thit cho'];
// });
// Route::get('/aboutMe', function () {
//     return response() ->json([
//         'name' => 'Nguyen Huu hung',
//         'Email' => 'Pthe99040@gmail.com'
//     ]);
// });
// // response redirects to
// Route::get('/some', function () {
//     return redirect('/');
// });