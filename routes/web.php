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
// 富フリーポイントランキング画面
Route::get('/point/ranking', 'Point\PointController@ranking');
// 富フリーポイントクリックポイント画面
Route::get('/point/click', 'Point\PointController@click');
// 富フリーポイント管理画面
Route::get('/admin/point', 'Point\AdminController@index');
// 富フリーポイントカテゴリ管理画面
Route::get('/admin/point/category', 'Point\AdminController@category');
