<?php

$this->get('notifications',  'NotificationController@notifications')
    ->name('notifications');

$this->resource('posts', 'Posts\PostController');
$this->post('comment', 'Posts\CommentController@store')
    ->name('comment.store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');