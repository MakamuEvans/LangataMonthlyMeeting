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
    $news = \App\Event::orderBy('id', 'desc')->take(4)->get();
    $themeYear= \App\Sermon::where('type', 'Yearly Theme')->where('period', date('Y'))->first();
    $themeMonth= \App\Sermon::where('type', 'Monthly Theme')->where('period', date('F Y'))->first();
    $quote = \App\Sermon::where('type', 'Quote')->first();
    return view('index', compact('home', 'news', 'themeYear', 'themeMonth', 'quote'));
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



Route::post('/leaders/add', 'BackEndController@addLeader');


Route::get('/sermons/', 'BackEndController@sermons');


Route::get('/events/', 'BackEndController@events');
Route::get('/events/details/{id}', 'BackEndController@eventsView');


Route::get('/gallery/', 'BackEndController@gallery');
Route::get('/gallery/view/{id}', 'BackEndController@galleryView');


Route::get('/downloads/', 'BackEndController@downloads');
Route::get('/downloads/link/{url}/{ext}', 'BackEndController@download');


Route::get('/local-meeting/langata', 'BackEndController@langata');
Route::get('/local-meeting/ongata-rongai', 'BackEndController@ongataRongai');
Route::get('/local-meeting/nairobi-west', 'BackEndController@nairobiWest');


Route::get('/leaders/nairobi-yearly-meeting', 'BackEndController@nym');


Route::get('/leaders/monthly-meeting', 'BackEndController@monthlyMeeting');

Route::get('/committee/mission-commission', 'BackEndController@missionCommission');

Route::get('/committee/personal', 'BackEndController@personal');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/index', function () {
        return view('backend.index');
    });
    Route::get('/admin/leaders', 'BackEndController@leaders')->name('leaders');

    Route::get('/admin/leaders/edit/{id}', 'BackEndController@editLeader');

    Route::get('/admin/themes', 'BackEndController@adminThemes')->name('sermon');
    Route::get('/admin/themes/new', 'BackEndController@adminThemesNew');
    Route::post('/admin/themes/add', 'BackEndController@adminThemesAdd');
    Route::any('/admin/themes/edit/{id}', 'BackEndController@adminThemesEdit');
    Route::get('/admin/themes/delete/{id}', 'BackEndController@adminThemesDelete');


    Route::get('/admin/events', 'BackEndController@adminNews')->name('events');
    Route::get('/admin/events/new', 'BackEndController@adminNewsNew');
    Route::post('/admin/events/add', 'BackEndController@adminNewsAdd');
    Route::any('/admin/events/edit/{id}', 'BackEndController@adminNewsEdit');
    Route::get('/admin/events/delete/{id}', 'BackEndController@adminNewsDelete');


    Route::get('/admin/gallery', 'BackEndController@adminGallery')->name('gallery');
    Route::get('/admin/gallery/new', 'BackEndController@adminGalleryNew');
    Route::post('/admin/gallery/add', 'BackEndController@adminGalleryAdd');
    Route::get('/admin/gallery/delete/{id}', 'BackEndController@adminGalleryDelete');

    Route::get('/admin/downloads', 'BackEndController@adminDownloads')->name('downloads');
    Route::get('/admin/downloads/new', 'BackEndController@adminDownloadsNew');
    Route::post('/admin/downloads/add', 'BackEndController@adminDownloadsAdd');
    Route::get('/admin/downloads/delete/{id}', 'BackEndController@adminDownloadsDelete');

    Route::get('/admin/mission', function () {
        return view('backend.mission');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
