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
    $home= true;
    return view('index', compact('home'));
});
Route::get('/about-us', function () {
    $about_us = true;
    return view('aboutus', compact('about_us'));
});
Route::get('/leaders', function () {
    $leaders = true;
    return view('leaders', compact('leaders'));
});
Route::get('/programs/quakers-men', 'BackEndController@quakerMen');
Route::get('/programs/sunday-school', 'BackEndController@sundaySchool');
Route::get('/programs/usfw', 'BackEndController@usfw');
Route::get('/programs/youth', 'BackEndController@youth');


Route::get('/sermons/', 'BackEndController@sermons');


Route::get('/events/', 'BackEndController@events');


Route::get('/gallery/', 'BackEndController@gallery');


Route::get('/downloads/', 'BackEndController@downloads');


Route::get('/local-meeting/langata', 'BackEndController@langata');
Route::get('/local-meeting/ongata-rongai', 'BackEndController@ongataRongai');
Route::get('/local-meeting/nairobi-west', 'BackEndController@nairobiWest');


Route::get('/leaders/nairobi-yearly-meeting', 'BackEndController@nym');


Route::get('/leaders/monthly-meeting', 'BackEndController@monthlyMeeting');

Route::get('/committee/mission-commission', 'BackEndController@missionCommission');

Route::get('/committee/personal', 'BackEndController@personal');


Route::get('/admin/index', function () {
    return view('backend.index');
});
Route::get('/admin/leaders', 'BackEndController@leaders');

Route::get('/admin/leaders/edit/{id}', 'BackEndController@editLeader');

Route::get('/admin/themes', 'BackEndController@adminThemes');

Route::get('/admin/mission', function () {
    return view('backend.mission');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
