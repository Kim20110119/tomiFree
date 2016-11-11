<?php

namespace App\Http\Controllers\Affiliate;

use App\Http\Controllers\Controller;
use function view;

class AffiliateController extends Controller {

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
     * 富フリーのアフィリエイトTOP画面の表示
     *
     * @return view 富フリーのアフィリエイトTOP画面
     */
    public function index() {
        $this->data['page_title'] = 'アフィリエイトTOP画面';
        return view('affiliate.index', $this->data);
    }

}
