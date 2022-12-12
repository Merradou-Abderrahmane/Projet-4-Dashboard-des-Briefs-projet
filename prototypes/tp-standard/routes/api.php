<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::resource('tasks', TaskController::class);
// Route::get('/tasks', [TaskController::class, 'index']);
// Route::post('/tasks', [TaskController::class, 'store']);
// Route::put('/tasks/{id}', [TaskController::class, 'update']);
// Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);


// postman requests 
// GET tasks
// http://127.0.0.1:8000/api/tasks
// POST tasks
// http://127.0.0.1:8000/api/tasks + key value pair in body
// PUT tasks
// http://127.0.0.1:8000/api/tasks/{$id} + key value pair in body
// DELETE tasks
// http://127.0.0.1:8000/api/tasks/{$id}