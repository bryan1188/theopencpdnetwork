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

//Route::get('/home','HomeController@index');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/home','HomeController2@index');
//Auth::routes();

Route::post('/logout','SessionController@logout');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/course_managers','Course_managerController@index')->middleware('webadmin');

Route::get('/course_managers/search','Course_managerController@search')->middleware('webadmin');

Route::get('/course_managers/{course_manager}','Course_managerController@show')->middleware('webadmin');

Route::get('/course_manager/add','Course_managerController@add')->middleware('webadmin');

Route::post('/course_managers','Course_managerController@store')->middleware('webadmin');

Route::get('/course_managers/{course_manager}/edit','Course_managerController@edit')->middleware('webadmin');

Route::get('/course_managers/{course_manager}/editpassword','Course_managerController@editpassword')->middleware('webadmin');

Route::patch('/course_managers/{course_manager}','Course_managerController@update')->middleware('webadmin');

Route::patch('/course_manager/{course_manager}','Course_managerController@updatePassword')->middleware('webadmin');

Route::get('/professionals','ProfessionalController@index');

Route::get('/professionals/search','ProfessionalController@search');

Route::get('/professionals/{professional}','ProfessionalController@show');

Route::get('/professional/create','ProfessionalController@create')->middleware('auth');

Route::post('/professionals','ProfessionalController@store');

Route::get('/professionals/{professional}/edit','ProfessionalController@edit')->middleware('auth');

Route::patch('/professionals/{professional}','ProfessionalController@update')->middleware('auth');

Route::get('/professionals/{professional}/delete','ProfessionalController@destroy')->middleware('auth');

Route::get('/cpd_providers','Cpd_ProviderController@index');

Route::get('/cpd_providers/search','Cpd_ProviderController@search');

Route::get('/cpd_providers/{cpd_provider}','Cpd_ProviderController@show');

Route::get('/cpd_provider/create','Cpd_ProviderController@create')->middleware('auth');

Route::post('/cpd_providers','Cpd_ProviderController@store')->middleware('auth');

Route::get('/cpd_providers/{cpd_provider}/edit','Cpd_ProviderController@edit')->middleware('auth');

Route::patch('/cpd_providers/{cpd_provider}','Cpd_ProviderController@update')->middleware('auth');

Route::get('/cpd_providers/{cpd_provider}/delete','Cpd_ProviderController@destroy')->middleware('auth');

Route::get('/accreditations','AccreditationController@index');

Route::get('/accreditations/search','AccreditationController@search');

Route::get('/accreditations/{accreditation}','AccreditationController@show');

Route::get('/accreditation/create','AccreditationController@create')->middleware('auth');

Route::post('/accreditations','AccreditationController@store')->middleware('auth');

Route::get('/accreditations/{accreditation}/edit','AccreditationController@edit')->middleware('auth');

Route::patch('/accreditations/{accreditation}','AccreditationController@update')->middleware('auth');

Route::get('/courses','CourseController@index');

Route::get('/courses/search','CourseController@search');

Route::get('/course/create','CourseController@create')->middleware('auth');

Route::post('/courses','CourseController@store')->middleware('auth');

Route::get('/courses/{course}/edit','CourseController@edit')->middleware('auth');

Route::get('/courses/{course}','CourseController@show')->middleware('auth');

Route::patch('/courses/{course}','CourseController@update')->middleware('auth');

Route::get('/subscription/{professional}/create','SubscriptionController@create')->middleware('auth');

Route::post('/subscriptions','SubscriptionController@store')->middleware('auth');

Route::get('/subscriptions/{subscription}/edit','SubscriptionController@edit')->middleware('auth');

Route::patch('/subscriptions/{subscription}','SubscriptionController@update')->middleware('auth');

Route::get('/subscriptions/{subscription}/delete','SubscriptionController@destroy')->middleware('auth');

Route::get('/login','SessionController@create')->name('login')->middleware('guest');

Route::post('/login','SessionController@store');

Route::get('/test',function () {
    return view('test_page');
});
