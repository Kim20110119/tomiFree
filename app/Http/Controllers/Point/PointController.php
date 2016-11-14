<?php

namespace App\Http\Controllers\Point;

use App\Http\Controllers\Controller;
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
     * 富フリーのポイントTOP画面の表示
     *
     * @return view 富フリーのポイントTOP画面
     */
    public function index() {
        $this->data['page_title'] = 'ポイントTOP画面';
        return view('point.index', $this->data);
    }

}
