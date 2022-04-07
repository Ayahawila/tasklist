<?php

use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});

Route::get('/about', function () {
       $name = 'Aya';
       $age = 22;
   // return view('about',[
//'name' => $name,
//'age => $age'
   //]);


   //return view('about')->with('name',$name)->with('age',$age);
  // return view ('about',compact('name','age'));
   $tasks = [
       '1'=>'task1',
       '2'=>'task2',
       '3'=>'task3'];
   return view ('about',compact('tasks'));
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/show/{id}', function ($id) {
    $tasks = [
        '1'=>'task1',
        '2'=>'task2',
        '3'=>'task3'
    ];
    $task = $tasks[$id];
    return view('show',compact('task'));
});

Route::post('/show', function () {
    $name = $_POST['name'];
    return view('show',compact('name'));
});
Route::post('/about', function () {
    $name = $_POST['name'];
    return view('show',compact('name'));
});

Route::get('/tasks', function () {
    $tasks= DB::table('tasks')->get();
    return view('tasks',compact('tasks'));
});

Route::get('/task/{id}', function ($id) {
    $task= DB::table('tasks')->find($id);
    return view('task',compact('task'));
});
