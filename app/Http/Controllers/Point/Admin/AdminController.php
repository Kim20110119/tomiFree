<?php

namespace App\Http\Controllers\Point\Admin;

use App\Http\Controllers\Controller;
use App\PointCategory;
use App\PointSite;
use function view;

class AdminController extends Controller {

    /**
     * ビューに渡すパラメータ
     *
     * @var data
     */
    protected $data;

    /**
     * コンストラクタ
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * 富フリーの道：ポイント_管理画面の表示
     *
     * @return view 富フリーの道：ポイント_管理画面
     */
    public function index() {
        $this->data['page_title'] = 'ポイント管理画面';
        //==========================================
        // ポイントサイトカテゴリーを取得する
        //==========================================
        $categorys = PointCategory::all();
        //==========================================
        // お勧めTOP3のポイントサイトを取得する
        //==========================================
        $point_sites_query = PointSite::query();
        $point_sites = $point_sites_query->where('ranking', '<=', '3')->get();
        //==========================================
        // ビュー渡すパラメータを設定する
        //==========================================
        $this->data['categorys'] = $categorys;
        $this->data['point_sites'] = $point_sites;
        return view('point.admin.index', $this->data);
    }

    /**
     * 富フリーの道：ポイント_カテゴリ管理画面の表示
     *
     * @return view 富フリーの道：ポイント_カテゴリ管理画面
     */
    public function category() {
        $this->data['page_title'] = 'ポイントカテゴリ管理画面';
        //==========================================
        // ポイントサイトカテゴリーを取得する
        //==========================================
        $categorys = PointCategory::all();
        //==========================================
        // お勧めTOP3のポイントサイトを取得する
        //==========================================
        $point_sites_query = PointSite::query();
        $point_sites = $point_sites_query->where('ranking', '<=', '3')->get();
        //==========================================
        // ビュー渡すパラメータを設定する
        //==========================================
        $this->data['categorys'] = $categorys;
        $this->data['point_sites'] = $point_sites;
        return view('point.admin.category.index', $this->data);
    }

}
