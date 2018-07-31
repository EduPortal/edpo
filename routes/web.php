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

Route::get('/', 'HomeController@main');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/verifying','HomeController@verifying');

Route::get('/student/news-feed', 'StudentNewFeedController@index');
Route::get('/teacher/news-feed','TeacherNewsFeedController@index');


Route::get('/student/settings/profile', 'StudentSettingsController@profile_settings');
Route::post('/student/settings/save_profile_information', 'StudentSettingsController@save_profile_information');
Route::post('/student/settings/change-avatar', 'StudentSettingsController@change_avatar');
Route::get('/student/settings/hobbies-and-interests', 'StudentSettingsController@hobbies_and_interests');
Route::post('/student/settings/save_hobby_information','StudentSettingsController@save_hobbies');
Route::get('/student/settings/change-password','StudentSettingsController@change_password_view');
Route::post('/student/settings/verify-email-address','StudentSettingsController@verify_email');
Route::post('/student/settings/verify-security-answers','StudentSettingsController@verify_answers');
Route::post('/student/settings/change-password','StudentSettingsController@change_password');


Route::get('/teacher/settings/profile', 'TeacherSettingsController@profile_settings');
Route::post('/teacher/settings/save_profile_information', 'TeacherSettingsController@save_profile_information');
Route::post('/teacher/settings/change-avatar', 'TeacherSettingsController@change_avatar');
Route::get('/teacher/settings/hobbies-and-interests', 'TeacherSettingsController@hobbies_and_interests');
Route::post('/teacher/settings/save_hobby_information','TeacherSettingsController@save_hobbies');
Route::get('/teacher/settings/change-password','TeacherSettingsController@change_password_view');
Route::post('/teacher/settings/verify-email-address','TeacherSettingsController@verify_email');
Route::post('/teacher/settings/verify-security-answers','TeacherSettingsController@verify_answers');
Route::post('/teacher/settings/change-password','TeacherSettingsController@change_password');

Route::get('/teacher/classes','TeacherClassesController@classes');
Route::post('/teacher/create-class','TeacherClassesController@create_class');
Route::get('/teacher/classes/{slug}','TeacherClassesController@open_class');
Route::post('/teacher/class/create-post','TeacherClassesController@create_post');
Route::post('/teacher/classes/post/view_attachments','TeacherClassesController@view_attachments');
Route::post('/teacher/class/post/create_comment','TeacherClassesController@create_comment');

Route::get('/student/classes','StudentClassesController@classes');
Route::post('/student/class/join','StudentClassesController@join_class');
Route::get('/student/classes/{slug}','StudentClassesController@open_class');
Route::post('/student/classes/post/view_attachments','StudentClassesController@view_attachments');
Route::post('/student/class/post/create_comment','StudentClassesController@create_comment');
Route::get('/profile/{id}','StudentSettingsController@profile');

Route::get('/notifications/{id}','StudentNotificationsController@view_notification');


Route::get('/student/classes/{class_slug}/{post_slug}','StudentClassesController@view_post');
Route::get('/teacher/classes/{class_slug}/{post_slug}','TeacherClassesController@view_post');





Route::get("/icons_pack" , "HomeController@icons");