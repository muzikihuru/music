<?php
/**
 * Created by NiNaCoder.
 * Date: 2019-06-23
 * Time: 09:57
 */

/*
 * Edit Radio
*/

Route::group(['middleware' => 'role:admin_radio'], function() {
    Route::get('podcasts', 'PodcastsController@index')->name('podcasts');
    Route::get('podcasts/add', 'PodcastsController@add')->name('podcasts.add');
    Route::post('podcasts/add', 'PodcastsController@savePost')->name('podcasts.add.post');
    Route::get('podcasts/{id}/edit', 'PodcastsController@edit')->name('podcasts.edit');
    Route::post('podcasts/{id}/edit', 'PodcastsController@savePost')->name('podcasts.edit.post');
    Route::get('podcasts/{id}/delete', 'PodcastsController@delete')->name('podcasts.delete');
    Route::get('podcasts/{id}/episodes', 'PodcastsController@episodes')->name('podcasts.episodes');
    Route::post('podcasts/{id}/episodes', 'PodcastsController@episodesMassAction')->name('podcasts.episodes.mass.action');
    Route::get('podcasts/{id}/upload', 'PodcastsController@uploadEpisode')->name('podcasts.upload.episode');
    Route::post('podcasts/city-by-country-code', 'PodcastsController@cityByCountryCode')->name('podcasts.get.city');
    Route::post('podcasts/language-by-country-code', 'PodcastsController@languageByCountryCode')->name('podcasts.get.language');
});