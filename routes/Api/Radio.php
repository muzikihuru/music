<?php
/**
 * Created by NiNaCoder.
 * Date: 2019-06-23
 * Time: 09:52
 */

Route::get('radio', 'RadioController@index')->name('radio');
Route::get('radio/categories', 'RadioController@categories')->name('radio.categories');
Route::get('radio/{id}/stations', 'RadioController@stations')->name('radio.station');
