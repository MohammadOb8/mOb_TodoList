<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobController;
use App\Http\Controllers\TypeController;
use PHPUnit\TextUI\XmlConfiguration\Group;

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
    return view('welcome');
});
//Tasks Routes:
Route::get('/mob/todoList',[MobController::class,'index'])->name('mob.index');
Route::get('/mob/newTask',[MobController::class,'newTask'])->name('mob.newTask');
Route::post('/mob/newTask/addTask',[MobController::class,'addTask'])->name('mob.addTask');
Route::get('/mob/editTask/{id}',[MobController::class,'editTask'])->name('mob.editTask');
Route::post('/mob/updateTask/{id}',[MobController::class,'updateTask'])->name('mob.updateTask');
Route::get('/mob/completed/{id}',[MobController::class,'completedTask'])->name('mob.completed');
Route::get('/mob/undo/{id}',[MobController::class,'undoTask'])->name('mob.undo');
Route::get('/mob/delete/{id}',[MobController::class,'deleteTask'])->name('mob.delete');

//Types Routes:
Route::get('/mob/typeList',[TypeController::class,'index'])->name('mob.indexType');
Route::get('/mob/typeList/typeTasks/{id}',[TypeController::class,'show'])->name('mob.typeTasks');
Route::get('/mob/typeList/newType',[TypeController::class,'create'])->name('mob.newType');
Route::post('/mob/typeList/newType/addType',[TypeController::class,'store'])->name('mob.addType');
Route::get('/mob/typeList/editType/{id}',[TypeController::class,'edit'])->name('mob.editType');
Route::post('/mob/typeList/editType/updateType/{id}',[TypeController::class,'update'])->name('mob.updateType');
Route::get('/mob/typeList/deleteType/{id}',[TypeController::class,'destroy'])->name('mob.deleteType');

