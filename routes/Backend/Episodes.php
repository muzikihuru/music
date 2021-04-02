<?php
/**
 * Created by NiNaCoder.
 * Date: 2019-06-23
 * Time: 09:56
 */


/*
 * Edit Song
*/

Route::group(['middleware' => 'role:admin_songs'], function() {
    Route::get('episodes', 'SongsController@index')->name('episodes');
    Route::post('episodes', 'SongsController@massAction')->name('episodes.mass.action');
    Route::get('episodes/edit/{id}', 'SongsController@edit')->name('episodes.edit');
    Route::post('episodes/edit/{id}', 'SongsController@editPost')->name('episodes.edit.post');
    Route::get('episodes/delete/{id}', 'SongsController@delete')->name('episodes.delete');
    Route::post('episodes/edit-title', 'SongsController@editTitlePost')->name('episodes.edit.title.post');
    Route::post('episodes/reject/{id}', 'SongsController@reject')->name('episodes.edit.reject.post');
});