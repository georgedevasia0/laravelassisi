<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@home');
Route::view('/courses','users.course');
Route::view('/aboutus','users.about');
Route::view('/facilities','users.facilities');
Route::view('/contact','users.contact');
route::post('/contact','ContactController@store');
Route::view('/register','users.register');
Route::post('/register','RegisterationController@store');
Route::view('/gallery','users.gallery');
Route::view('/gallery/youtube','users.youtube');
Route::view('/gallery/rankers','users.rankers');
Route::view('/gallery/album','users.album');
Route::post('/subcription','NewsletterController@store');



Route::post('adminlogin','AdminController@login');
Route::view("adminlogin",'admins.login');

Route::group(['middleware'=>['LoginAuth']],function()
{
    Route::get('/admins','AdminsController@index');
    Route::get('/admins/contact','ContactController@index');
    Route::put('/admins/contact/{id}','ContactController@update');
    Route::post('/admins/contact/filter','ContactController@filter');
    Route::get('/admins/profile','AdminsController@profile');
    Route::get('/admins/youtube','YoutubeController@index');
    Route::post('/admins/youtube','YoutubeController@store');
    Route::get('/admins/youtube/{id}','YoutubeController@show');
    Route::get('/admins/youtube/{id}/edit','YoutubeController@edit');
    Route::put('/admins/youtube/{id}','YoutubeController@update');
    Route::delete('/admins/youtube/{id}','YoutubeController@destroy');
    Route::get('/admins/gallery','GalleryController@index'); 
    Route::delete('/admins/gallery/{id}','GalleryController@destroy'); 
    Route::post('/admins/gallery/folder','FolderController@store');
    Route::get('/admins/gallery/folder/{id}','FolderController@index');
    Route::post('/admins/gallery/folder/{id}','GalleryController@store');
    Route::get('/admins/news','NewsController@index'); 
    Route::post('/admins/news','NewsController@store'); 
    Route::get('/admins/news/{id}/edit','NewsController@edit'); 
    Route::put('/admins/news/{id}','NewsController@update'); 
    Route::get('/admins/newslettersubscription','NewsletterController@index');
    Route::put('/admins/newslettersubscription/{id}','NewsletterController@update');
    Route::post('/admins/newslettersubcription/filter','NewsletterController@filter'); 
    Route::post('/admins/newslettersubcription/download','NewsletterController@download');
    Route::get('/admins/registeredstudent','RegisterationController@index');
    Route::put('/admins/registeredstudent/{id}','RegisterationController@update');
    Route::post('/admins/registeredstudent/filter','RegisterationController@filter');
    Route::get('admins/document','DocumentController@index');
    Route::post('admins/document','DocumentController@store');
    Route::get('admins/document/{id}/edit','DocumentController@edit');
    Route::put('admins/document/{id}','DocumentController@update');
    Route::get('/admins/testimonial/gallery','TestimonialimageController@index');
    Route::post('/admins/testimonial/gallery','TestimonialimageController@store');
    Route::delete('/admins/testimonial/gallery/{id}','TestimonialimageController@destroy');
    Route::get('/admins/testimonial/youtube','TestimonialyoutubeController@index');
    Route::post('/admins/testimonial/youtube','TestimonialyoutubeController@store');
    Route::delete('/admins/testimonial/youtube/{id}','TestimonialyoutubeController@destroy');

});
Route::get('/admins/logout', 'AdminController@logout');