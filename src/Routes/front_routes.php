<?php
Route::group([

    'namespace' => 'ali\Front\Http\Controllers',
    'middleware' => ['web']

], function ($router) {

    $router->get('/', 'FrontController@index');
    $router->get('/c-{slug}', function () {
        dd("gggggggggggggggggggg");
    })->name('singleCourse');
    $router->get('/tutors/{username}', 'FrontController@singleTutor')->name('singleTutor');

});
