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

Route::get('/','PagesController@getHome');

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

Route::get('single-event/{event}',['uses'=>'PagesController@getSingleEvent','as'=>'get.event']);


//blog controller
Route::get('blog/{slug}',['uses'=>'BlogController@getSingle',
    'as'=>'blog.single',
]);
Route::get('sermons-all/{sermon}',['uses'=>'PagesController@getSingleSermon',
    'as'=>'sermon.single',
]);



//Control panel routes


//post resource controller
//Route::resource('posts','PostController');
Route::group(['middleware'=>'roles'],function (){
    Route::get('posts',['uses'=>'PostController@index',
    'as'=>'posts.index']);

    Route::POST('posts',['uses'=>'PostController@store',
        'as'=>'posts.store',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('posts/create',['uses'=>'PostController@create',
        'as'=>'posts.create',
        'roles'=>['Admin','Blog']
    ]);
    Route::delete('post/{post}',['uses'=>'PostController@destroy',
        'as'=>'posts.destroy',
        'roles'=>['Admin','Blog']
    ]);
    Route::put('posts/{post}',['uses'=>'PostController@update',
        'as'=>'posts.update',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('posts/{post}',['uses'=>'PostController@show',
        'as'=>'posts.show',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('posts/{post}/edit',['uses'=>'PostController@edit',
        'as'=>'posts.edit',
        'roles'=>['Admin','Blog']
    ]);
    Route::post('imageUpload',['uses'=>'FileUploadController@imageUpload',
        'as'=>'file.upload',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('delete-post/{id}',['uses'=>'PostController@getDelete',
        'as'=>'posts.delete',
        'roles'=>['Admin','Blog']
    ]);




//category controller

    Route::get('categories',['uses'=>'CategoryController@index','as'=>'categories.index']);

    Route::POST('categories',['uses'=>'CategoryController@store',
        'as'=>'categories.store',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('categories/create',['uses'=>'CategoryController@create',
        'as'=>'categories.create',
        'roles'=>['Admin','Blog']
    ]);
    Route::delete('categories/{category}',['uses'=>'CategoryController@destroy',
        'as'=>'categories.destroy',
        'roles'=>['Admin','Blog']
    ]);
    Route::put('categories/{category}',['uses'=>'CategoryController@update',
        'as'=>'categories.update',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('categories/{category}',['uses'=>'CategoryController@show',
        'as'=>'categories.show',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('categories/{category}/edit',['uses'=>'CategoryController@edit',
        'as'=>'categories.edit',
        'roles'=>['Admin','Blog']
    ]);




//tags controller

    Route::get('tags',['uses'=>'TagController@index','as'=>'tags.index']);

    Route::POST('tags',['uses'=>'TagController@store',
        'as'=>'tags.store',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('tags/create',['uses'=>'TagController@create',
        'as'=>'tags.create',
        'roles'=>['Admin','Blog']
    ]);
    Route::delete('tags/{tag}',['uses'=>'TagController@destroy',
        'as'=>'tags.destroy',
        'roles'=>['Admin','Blog']
    ]);
    Route::put('tags/{tag}',['uses'=>'TagController@update',
        'as'=>'tags.update',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('tags/{tag}',['uses'=>'TagController@show',
        'as'=>'tags.show',
        'roles'=>['Admin','Blog']
    ]);
    Route::get('tags/{tag}/edit',['uses'=>'TagController@edit',
        'as'=>'tags.edit',
        'roles'=>['Admin','Blog']
    ]);



//events controller

    Route::get('events',['uses'=>'EventController@index','as'=>'events.index']);

    Route::POST('events',['uses'=>'EventController@store',
        'as'=>'events.store',
        'roles'=>['Admin','Event']
    ]);
    Route::get('events/create',['uses'=>'EventController@create',
        'as'=>'events.create',
        'roles'=>['Admin','Event']
    ]);
    Route::delete('events/{event}',['uses'=>'EventController@destroy',
        'as'=>'events.destroy',
        'roles'=>['Admin','Event']
    ]);
    Route::put('events/{event}',['uses'=>'EventController@update',
        'as'=>'events.update',
        'roles'=>['Admin','Event']
    ]);
    Route::get('events/{event}',['uses'=>'EventController@show',
        'as'=>'events.show',
        'roles'=>['Admin','Event']
    ]);
    Route::get('events/{event}/edit',['uses'=>'EventController@edit',
        'as'=>'events.edit',
        'roles'=>['Admin','Event']
    ]);
    Route::get('delete-event/{id}',['uses'=>'EventController@getDelete',
        'as'=>'events.delete',
        'roles'=>['Admin','Event']
    ]);
















//sermon controller
//Route::resource('sermons','SermonController');

    Route::get('sermons',['uses'=>'SermonController@index','as'=>'sermons.index']);

    Route::POST('sermons',['uses'=>'SermonController@store',
        'as'=>'sermons.store',
        'roles'=>['Admin','Sermon']
    ]);
    Route::get('sermons/create',['uses'=>'SermonController@create',
        'as'=>'sermons.create',
        'roles'=>['Admin','Sermon']
    ]);
    Route::delete('sermons/{sermon}',['uses'=>'SermonController@destroy',
        'as'=>'sermons.destroy',
        'roles'=>['Admin','Sermon']
    ]);
    Route::put('sermons/{sermon}',['uses'=>'SermonController@update',
        'as'=>'sermons.update',
        'roles'=>['Admin','Sermon']
    ]);
    Route::get('sermons/{sermon}',['uses'=>'SermonController@show',
        'as'=>'sermons.show',
        'roles'=>['Admin','Sermon']
    ]);
    Route::get('sermons/{sermon}/edit',['uses'=>'SermonController@edit',
        'as'=>'sermons.edit',
        'roles'=>['Admin','Sermon']
    ]);
    Route::get('delete-sermon/{id}',['uses'=>'SermonController@getDelete',
        'as'=>'sermons.delete',
        'roles'=>['Admin','Sermon']
    ]);



//venue controller
//Route::resource('venue','VenueController');


    Route::get('venue',['uses'=>'VenueController@index','as'=>'venue.index']);

    Route::POST('venue',['uses'=>'VenueController@store',
        'as'=>'venue.store',
        'roles'=>['Admin','Address']
    ]);
    Route::get('venue/create',['uses'=>'VenueController@create',
        'as'=>'venue.create',
        'roles'=>['Admin','Address']
    ]);
    Route::delete('venue/{venue}',['uses'=>'VenueController@destroy',
        'as'=>'venue.destroy',
        'roles'=>['Admin','Address']
    ]);
    Route::put('venue/{venue}',['uses'=>'VenueController@update',
        'as'=>'venue.update',
        'roles'=>['Admin','Address']
    ]);
    Route::get('venue/{venue}',['uses'=>'VenueController@show',
        'as'=>'venue.show',
        'roles'=>['Admin','Address']
    ]);
    Route::get('venue/{venue}/edit',['uses'=>'VenueController@edit',
        'as'=>'venue.edit',
        'roles'=>['Admin','Address']
    ]);


//series
//Route::resource('series','SeriesController');

    Route::get('series',['uses'=>'SeriesController@index','as'=>'series.index']);

    Route::POST('series',['uses'=>'SeriesController@store',
        'as'=>'series.store',
        'roles'=>['Admin','Sermon']
    ]);
    Route::get('series/create',['uses'=>'SeriesController@create',
        'as'=>'series.create',
        'roles'=>['Admin','Sermon']
    ]);
    Route::delete('series/{series}',['uses'=>'SeriesController@destroy',
        'as'=>'series.destroy',
        'roles'=>['Admin','Sermon']
    ]);
    Route::put('series/{series}',['uses'=>'SeriesController@update',
        'as'=>'series.update',
        'roles'=>['Admin','Sermon']
    ]);
    Route::get('series/{series}',['uses'=>'SeriesController@show',
        'as'=>'series.show',
        'roles'=>['Admin','Sermon']
    ]);
    Route::get('series/{series}/edit',['uses'=>'SeriesController@edit',
        'as'=>'series.edit',
        'roles'=>['Admin','Sermon']
    ]);
    Route::get('delete-series/{id}',['uses'=>'SeriesController@getDelete',
        'as'=>'series.delete',
        'roles'=>['Admin','Sermon']
    ]);



//members
//Route::resource('members','MemberController');


    Route::get('members',['uses'=>'MemberController@index','as'=>'members.index']);

    Route::POST('members',['uses'=>'MemberController@store',
        'as'=>'members.store',
        'roles'=>['Admin','member']
    ]);
    Route::get('members/create',['uses'=>'MemberController@create',
        'as'=>'members.create',
        'roles'=>['Admin','member']
    ]);
    Route::delete('members/{member}',['uses'=>'MemberController@destroy',
        'as'=>'members.destroy',
        'roles'=>['Admin','member']
    ]);
    Route::put('members/{member}',['uses'=>'MemberController@update',
        'as'=>'members.update',
        'roles'=>['Admin','member']
    ]);
    Route::get('members/{member}',['uses'=>'MemberController@show',
        'as'=>'members.show',
        'roles'=>['Admin','member']
    ]);
    Route::get('members/{member}/edit',['uses'=>'MemberController@edit',
        'as'=>'members.edit',
        'roles'=>['Admin','member']
    ]);
    Route::post('import_members',['uses'=>'MemberController@import',
        'as'=>'members.import',
        'roles'=>['Admin','member']
    ]);


//positions
//Route::resource('positions','PositionController');

    Route::get('positions',['uses'=>'PositionController@index','as'=>'positions.index']);

    Route::POST('positions',['uses'=>'PositionController@store',
        'as'=>'positions.store',
        'roles'=>['Admin','member']
    ]);
    Route::get('positions/create',['uses'=>'PositionController@create',
        'as'=>'positions.create',
        'roles'=>['Admin','member']
    ]);
    Route::delete('positions/{position}',['uses'=>'PositionController@destroy',
        'as'=>'positions.destroy',
        'roles'=>['Admin','member']
    ]);
    Route::put('positions/{position}',['uses'=>'PositionController@update',
        'as'=>'positions.update',
        'roles'=>['Admin','member']
    ]);
    Route::get('positions/{position}',['uses'=>'PositionController@show',
        'as'=>'positions.show',
        'roles'=>['Admin','member']
    ]);
    Route::get('positions/{position}/edit',['uses'=>'PositionController@edit',
        'as'=>'positions.edit',
        'roles'=>['Admin','member']
    ]);

//groups
//Route::resource('groups','GroupController');

    Route::get('groups',['uses'=>'CategoryController@index','as'=>'groups.index']);

    Route::POST('groups',['uses'=>'GroupController@store',
        'as'=>'groups.store',
        'roles'=>['Admin','member']
    ]);
    Route::get('groups/create',['uses'=>'GroupController@create',
        'as'=>'groups.create',
        'roles'=>['Admin','member']
    ]);
    Route::delete('groups/{group}',['uses'=>'GroupController@destroy',
        'as'=>'groups.destroy',
        'roles'=>['Admin','member']
    ]);
    Route::put('groups/{group}',['uses'=>'GroupController@update',
        'as'=>'groups.update',
        'roles'=>['Admin','member']
    ]);
    Route::get('groups/{group}',['uses'=>'GroupController@show',
        'as'=>'groups.show',
        'roles'=>['Admin','member']
    ]);
    Route::get('groups/{group}/edit',['uses'=>'GroupController@edit',
        'as'=>'groups.edit',
        'roles'=>['Admin','member']
    ]);

//Addmember

    Route::get('addmembers',['uses'=>'AddmemberController@index','as'=>'addmembers.index']);

    Route::POST('addmembers',['uses'=>'AddmemberController@store',
        'as'=>'addmembers.store',
        'roles'=>['Admin','member']
    ]);
    Route::get('addmembers/create',['uses'=>'AddmemberController@create',
        'as'=>'addmembers.create',
        'roles'=>['Admin','member']
    ]);
    Route::delete('addmembers/{addmember}',['uses'=>'AddmemberController@destroy',
        'as'=>'addmembers.destroy',
        'roles'=>['Admin','member']
    ]);
    Route::put('addmembers/{addmember}',['uses'=>'AddmemberController@update',
        'as'=>'addmembers.update',
        'roles'=>['Admin','member']
    ]);
    Route::get('addmembers/{addmember}',['uses'=>'AddmemberController@show',
        'as'=>'addmembers.show',
        'roles'=>['Admin','member']
    ]);
    Route::get('addmembers/{addmember}/edit',['uses'=>'AddmemberController@edit',
        'as'=>'addmembers.edit',
        'roles'=>['Admin','member']
    ]);


//emails

    Route::get('create-email',['uses'=>'EmailController@create','as'=>'emails.create','roles'=>['Admin','Email']]);
    Route::post('send-email',['uses'=>'EmailController@send','as'=>'emails.send','roles'=>['Admin','Email']]);
    Route::post('save-member-email',['uses'=>'EmailController@memberSave','as'=>'emails.memberSave','roles'=>['Admin','Email']]);
    Route::post('save-group-email',['uses'=>'EmailController@groupSave','as'=>'emails.groupSave','roles'=>['Admin','Email']]);
    Route::get('all-emails',['uses'=>'EmailController@index','as'=>'emails.index','roles'=>['Admin','Email']]);
    Route::get('edit-member-email/{id}',['uses'=>'EmailController@editEmail','as'=>'emails.editEmail','roles'=>['Admin','Email']]);
    Route::put('update-email/{id}',['uses'=>'EmailController@update','as'=>'emails.update','roles'=>['Admin','Email']]);








//Route::resource('admin','AdminController');

    Route::get('admin',['uses'=>'AdminController@index','as'=>'admin.index','roles'=>'Admin']);

    Route::POST('admin',['uses'=>'AdminController@store',
        'as'=>'admin.store',
        'roles'=>'Admin'
    ]);
    Route::get('admin/create',['uses'=>'AdminController@create',
        'as'=>'admin.create',
        'roles'=>'Admin'
    ]);
    Route::delete('admin/{admin}',['uses'=>'AdminController@destroy',
        'as'=>'admin.destroy',
        'roles'=>'Admin'
    ]);
    Route::put('admin/{admin}',['uses'=>'AdminController@update',
        'as'=>'admin.update',
        'roles'=>'Admin'
    ]);
    Route::get('admin/{admin}',['uses'=>'AdminController@show',
        'as'=>'admin.show',
        'roles'=>'Admin'
    ]);
    Route::get('admin/{admin}/edit',['uses'=>'AdminController@edit',
        'as'=>'admin.edit',
        'roles'=>'Admin'
    ]);
});

Route::resource('donation','DonationController');