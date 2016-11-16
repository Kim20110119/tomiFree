<?php

namespace App\Http\Controllers\Point;

use App\Http\Controllers\Controller;
use App\PointCategory;
use App\PointSite;
use function view;

class PointController extends Controller {

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
     * 富フリーの道：ポイント_TOP画面の表示
     *
     * @return view 富フリーのポイントTOP画面
     */
    public function index() {
        $this->data['page_title'] = 'ポイントTOP画面';
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
        return view('point.index', $this->data);
    }

    /**
     * 富フリーの道：ポイント_ランキング画面の表示
     *
     * @return view 富フリーの道：ポイント_ランキング画面
     */
    public function ranking() {
        $this->data['page_title'] = '富フリーの道：ポイント_ランキング画面';
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
        return view('point.ranking.index', $this->data);
    }

    /**
     * 富フリーの道：ポイント_クリックポイント画面の表示
     *
     * @return view 富フリーの道：ポイント_クリックポイント画面
     */
    public function click() {
        $this->data['page_title'] = 'クリックポイント画面';
        return view('point.click.index', $this->data);
    }

}
