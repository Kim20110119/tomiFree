<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * ポイントカテゴリー説明テーブル
 */
class PointCategoryDescription extends Model {

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'point_category_description';

    /**
     * モデルのタイムスタンプを更新するかの指示
     *
     * @var bool
     */
    public $timestamps = false;

}
