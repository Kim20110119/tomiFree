<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * ポイントカテゴリーテーブル
 */
class PointCategory extends Model {

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'point_category';

    /**
     * モデルのタイムスタンプを更新するかの指示
     *
     * @var bool
     */
    public $timestamps = false;

}
