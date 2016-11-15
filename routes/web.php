<?php

/*
  |--------------------------------------------------------------------------
  | 富フリーアフィリエイトルーティング
  |--------------------------------------------------------------------------
 */
// 富フリーアフィリエイトTOP画面
Route::get('/affiliate', 'Affiliate\AffiliateController@index');

/*
  |--------------------------------------------------------------------------
  | 富フリーポイントルーティング
  |--------------------------------------------------------------------------
 */
// 富フリーポイントTOP画面
Route::get('/point', 'Point\PointController@index');
// 富フリーポイントクリックポイント画面
Route::get('/point/click', 'Point\PointController@click');
