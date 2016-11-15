<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * ポイントサイトテーブル
 */
class PointSite extends Model {

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'point_site';

    /**
     * モデルのタイムスタンプを更新するかの指示
     *
     * @var bool
     */
    public $timestamps = false;

}
