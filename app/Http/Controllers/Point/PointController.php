<?php

namespace App\Http\Controllers\Point;

use App\Http\Controllers\Controller;
use App\PointCategory;
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
        $categorys = PointCategory::all();
        $this->data['categorys'] = $categorys;
        return view('point.index', $this->data);
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
