<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('landing.index');
});

Route::get('/app',function (){
   return view('layouts.app');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('greetings',['uses'=>'PagesController@getGreetings','as'=>'greetings']);

Route::get('Who-we-are',['uses'=>'PagesController@getWhoWeAre','as'=>'whoWeAre']);

Route::get('What-We-Believe',['uses'=>'PagesController@getWhatWeBelieve','as'=>'whatWeBelieve']);

Route::get('event-calendar',['uses'=>'PagesController@getCalendar','as'=>'calendar']);

Route::get('sunday-Ministry',['uses'=>'PagesController@getSundayMinistry','as'=>'sundayMinistry']);

Route::get('prayer-Meetings',['uses'=>'PagesController@getPrayerMeetings','as'=>'prayerMeetings']);

Route::get('bible-Study',['uses'=>'PagesController@getBibleStudies','as'=>'bibleStudies']);

Route::get('childerns-Ministry',['uses'=>'PagesController@getChildernsMinistry','as'=>'childernsMinistry']);

Route::get('gospel-Ministry',['uses'=>'PagesController@getGospelMinistry','as'=>'gospelMinistry']);

Route::get('other-Ministry',['uses'=>'PagesController@getOtherMinistry','as'=>'otherMinistry']);

Route::get('Sermons-at-little-flock',['uses'=>'PagesController@getSermonAtLittleFlock','as'=>'atLittleFlock']);

Route::get('Sermons-at-Others',['uses'=>'PagesController@getSermonAtOthers','as'=>'atOthers']);

Route::get('gallery',['uses'=>'PagesController@getGallery','as'=>'gallery']);

Route::get('contact',['uses'=>'PagesController@getContact','as'=>'contact']);

Route::get('blog',['uses'=>'PagesController@getBlog','as'=>'blog']);


//Control panel routes


//post resource controller
//Route::resource('posts','PostController');
Route::group(['middleware'=>'roles'],function (){
    Route::get('posts',['uses'=>'PostController@index',
    'as'=>'posts.index']);

    Route::POST('posts',['uses'=>'PostController@store',
        'as'=>'posts.store']);
    Route::get('posts/create',['uses'=>'PostController@create',
        'as'=>'posts.create',
        'roles'=>'Admin'
    ]);
    Route::delete('post/{post}',['uses'=>'PostController@destroy',
        'as'=>'posts.destroy']);
    Route::put('posts/{post}',['uses'=>'PostController@update',
        'as'=>'posts.update']);
    Route::get('posts/{post}',['uses'=>'PostController@show',
        'as'=>'posts.show']);
    Route::get('posts/{post}/edit',['uses'=>'PostController@edit',
        'as'=>'posts.edit']);
    Route::post('imageUpload',['uses'=>'FileUploadController@imageUpload',
        'as'=>'file.upload']);
});


Route::get('delete-post/{id}',['uses'=>'PostController@getDelete',
    'as'=>'posts.delete',
    'middleware'=>'roles',
    'roles'=>['Admin']
]);

//blog controller
Route::get('single-blog/{slug}',['uses'=>'BlogController@getSingle',
    'as'=>'blog.single',
    'middleware'=>'roles',
    'roles'=>['Admin']
]);

//category controller
Route::resource('categories','CategoryController');

//tags controller
Route::resource('tags','TagController');

//events controller
Route::resource('events','EventController');

Route::get('delete-event/{id}',['uses'=>'EventController@getDelete',
    'as'=>'events.delete'
]);

//sermon controller
Route::resource('sermons','SermonController');

Route::resource('admin','AdminController');