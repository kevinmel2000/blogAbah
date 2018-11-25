<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
For non-auth user only
*/
Route::group(['middleware'=>'guest'],function(){

	Route::get('/cecepotxce68m3oam09pxbd',[
		'uses'	=> 'UserController@getLoginPage',
		'as'	=> 'guest.login'
	]);

    Route::post('/cecepotxce68m3oam09pxbd/',[
        'uses'  => 'UserController@postLogin',
        'as'    => 'proceed.login'
    ]);

});


/*
for auth user only
*/
Route::group(['middleware'=>'auth'],function(){
    
    Route::get('/dashboard',[
        'uses'  => 'UserController@getDasboardPage',
        'as'    => 'dashboard.landing'
    ]);

    Route::get('/dashboard/logout',[
        'uses' => 'UserController@getLogout',
        'as'   => 'dashboard.logout'
    ]);

    Route::post('/dashboard/uploadPhotoProfile',[
        'uses' => 'UserController@postImageProfile',
        'as'   => 'dashboard.uploadImageProfile'
    ]);

    Route::post('/dashboard/updateProfile',[
        'uses' => 'UserController@postUpdateProfile',
        'as'   => 'dashboard.updateProfile'
    ]);

    Route::post('/dashboard/updatePassword',[
        'uses' => 'UserController@postUpdatePassword',
        'as'   => 'dashboard.updatePassword'
    ]);

    Route::get('/dashboard/manage_post',[
        'uses' => 'PostController@getManagePost',
        'as'   => 'dashboard.managePost'
    ]);

    Route::get('/dashboard/delete_post',[
        'uses' => 'PostController@getDeletePost',
        'as'   => 'dashboard.deletePost'
    ]);

    Route::get('/dashboard/write_post',[
        'uses' => 'PostController@getWritePost',
        'as'   => 'dashboard.writePost'
    ]);

    Route::post('/dashboard/write_post',[
        'uses' => 'PostController@postWritePost',
        'as'   => 'dashboard.post'
    ]);

    Route::get('/dashboard/post/{id}',[
        'uses' => 'PostController@getEditPost',
        'as'   => 'dashboard.edit'
    ]);

    Route::post('/dashboard/post/{id}',[
        'uses' => 'PostController@postEditPost',
        'as'   => 'dashboard.updatepost'
    ]);

    Route::get('/dashboard/getjson_allpost',[
        'uses' => 'PostController@getJsonPost',
        'as'   => 'dashboard.get_jsonpost'
    ]);

    Route::get('/dashboard/preview/{id}',[
        'uses' => 'PostController@getPreviewPost',
        'as'   => 'dashboard.preview'
    ]);
});

/*for all*/

Route::get('/',[
    'uses' => 'WebController@getIndex',
    'as'   => 'index'
]);

Route::get('/about',[
    'uses' => 'WebController@getAbout',
    'as'   => 'about' 
]);

Route::get('/blog/{page}',[
    'uses' => 'WebController@getBlog',
    'as'   => 'blog'
]);

