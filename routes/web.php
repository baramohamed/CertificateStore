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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});

Route::get('courses', function () {
    return view('courses',['courses' => App\Course::all()]);
});

Route::get('events', function () {
    return view('events');
});

Route::get('make-reservation', 'ReservationsController@makeReservation');


Route::get('course-details/{course}', 'CoursesController@show');

Route::get('get-session/courseId={courseId}&testCenterId={testCenterId}', 'TestSessionsController@getSessions');

Route::get('event-details', function () {
    return view('event-details');
});

Route::get('contact', function () {
    return view('contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
