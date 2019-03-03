<?php

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
    $tasks = [
        "Go to the store",
        "Go to the market",
        "Go to work",
        "Go to concert"
    ];


    // return view('welcome', [
    //     'tasks' => $tasks,
    //     'foo' => 'foobar',
    //     'bar' => request('title'),
    //     'scp' => '<u>HTML Tag</u>'
    // ]);
    
    // return view('welcome')->withTasks($tasks)->withFoo('foobar')->withBar(request('title'))->withScp('<u>HTML Tag</u>');

    return view('welcome')->with([
        'tasks' => ['Go to store'],
        'foo' => 'foobar',
        'bar' => request('title'),
        'scp' => '<u>HTML Tag</u>'
    ]);
});

Route::get('/about' , function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
