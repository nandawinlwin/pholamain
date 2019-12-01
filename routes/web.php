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

Route::group(['middleware' => ['is_admin']], function () {

    Route::get('/admin/post/create','AdminController@create')->name('Post Create');
    Route::post('/admin/post/create','AdminController@store');
	Route::get('/admin/{postid}/view', 'AdminController@view');
    Route::post('/admin/post/{id}','AdminController@update');
    Route::get('/admin/post/all','AdminController@allposts');

    Route::get('/admin/users','AdminController@users');
    Route::get('/admin/admins','AdminController@admins');

    Route::get('/admin/blogs','AdminController@blog');
    Route::get('/admin/blogs/create','AdminController@blogcreate');
    Route::post('/admin/blogs/create','AdminController@blogstore');
    Route::get('/admin/blogs/{id}','AdminController@blog_edit');
    Route::post('/admin/blogs/{id}','AdminController@blog_update');
    Route::get('/admin/blogs/{id}/view','AdminController@blog_view');
    Route::get('/admin/blogss/del/{id}','AdminController@blog_del');

    Route::post('/admin/category/add','AdminController@category');
    Route::get('/admin/category/{id}','AdminController@category_destory');

    Route::get('/admin/company','AdminController@company');
    Route::get('/admin/company/addnew','AdminController@newcompany');

    Route::get('/admin/ads/property','AdminController@adsproperty');
    Route::get('/admin/ads/company','AdminController@adscompany');

    Route::get('/admin/seo','AdminController@seo');

    Route::get('/admin/setting','AdminController@setting');


});

Route::get('/', 'ShowPostController@lastest');

Route::get('/allpost', 'ShowPostController@allpost');

Route::get('/detail/{id}', 'ShowPostController@show');

Auth::routes();
Route::get('/home', 'HomeController@index')    
    ->name('home');

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');



Route::resource('/addpost', 'PostController');

