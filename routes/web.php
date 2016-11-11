<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | This file is where you may define all of the routes that are handled
  | by your application. Just tell Laravel the URIs it should respond
  | to using a Closure or controller method. Build something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});

/*
  |--------------------------------------------------------------------------
  | 富フリーアフィリエイトルーティング
  |--------------------------------------------------------------------------
 */
// 富フリーアフィリエイトTOP画面
Route::get('/affiliate', 'Affiliate\AffiliateController@index');
// 富フリー_アフィリエイトTOP画面
Route::match(['get', 'post'], '/', 'Front\FrontController@index');
// 得割ドックTOP画面
Route::match(['get', 'post'], '/top', 'Front\FrontController@index');
// 得割ドック医療施設一覧画面
Route::match(['get', 'post'], '/searches', 'Front\FacilityController@index');
// 得割ドック医療施設メニュー画面
Route::match(['get', 'post'], '/menu', 'Front\FacilityController@menu');
// 得割ドック医療施設メニュー詳細画面
Route::match(['get', 'post'], '/menu/detail', 'Front\FacilityController@detail');
// 得割ドック医療施設アクセス画面
Route::match(['get', 'post'], '/access', 'Front\FacilityController@access');
// 得割ドックGoogleマップ
Route::get('/map', 'Front\FacilityController@map');
// 得割ドックGoogleマップ
Route::get('/access_map/{map_address}', 'Front\MapController@access');
// 得割ドックGoogleマップ
Route::get('/print_map/{map_address}', 'Front\MapController@map');
// 得割ドック希望日入力画面
Route::post('/examinee/date', 'Front\ExamineeController@date');
// 得割ドック受診者情報登録画面
Route::post('/examinee/input', 'Front\ExamineeController@input');
// 得割ドック受診者情報確認画面
Route::post('/examinee/confirm', 'Front\ExamineeController@confirm');
// 得割ドック受診者情報完了画面
Route::post('/examinee/complete', 'Front\ExamineeController@complete');
// 得割ドック利用規約
Route::get('/terms', 'Front\FrontController@terms');
// プライバシーポリシー
Route::get('/privacypolicy', 'Front\FrontController@privacypolicy');
// 運用会社
Route::get('/information', 'Front\FrontController@information');
// サイトマップ
Route::get('/sitemap', 'Front\FrontController@sitemap');

