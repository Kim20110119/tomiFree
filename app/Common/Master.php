<?php

namespace App\Common;

use Illuminate\Support\Collection;

class Master {

    /**
     * マスタデータ配列を取得する
     *
     * @return array $masterList
     */
    public static function getList() {

    }

    /**
     * マスタデータを取得する
     *
     * @return array $master
     */
    public static function getName() {

    }

    /**
     * ポイントサイト稼ぎ方法配列を取得する
     *
     * @return array $pointGenres
     */
    public static function getPointGenres() {
        return array(
            '01' => 'クリックポイント',
            '02' => 'ミニゲーム',
            '03' => 'CM動画を見る',
            '04' => 'アンケート',
            '05' => 'レビューや記事を書く',
            '06' => '広告を利用',
        );
    }

    /**
     * ポイントサイト稼ぎ方法を取得する
     *
     * @param String $key
     * @return String $pointGenre
     */
    public static function getPointGenre($key) {
        return Collection::make(Master::getPointGenres())->get($key);
    }

    /**
     * 検査コース配列を取得する
     *
     * @return array $inspectionCourseList
     */
    public static function getInspectionCourseList() {
        return array(
            '01' => '人間ドック',
            '02' => '脳ドック',
            '03' => 'PET検診',
            '04' => 'レディースドック',
            '05' => '心臓ドック',
            '06' => '肺ドック',
        );
    }

    /**
     * キーにより検査コース名を取得する
     *
     * @param String $key
     * @return String $inspectionCourseName
     */
    public static function getInspectionCourseName($key) {
        return Collection::make(Master::getInspectionCourseList())->get($key);
    }

    /**
     * 健診コースコードにより検査項目リストを取得する
     *
     * @param String $key
     * @return String $courseItems
     */
    public static function getCourseItems($key) {
        switch ($key) {
            case '01':
                return self::getCourse01Items();
            case '02':
                return self::getCourse02Items();
            case '03':
                return self::getCourse03Items();
            case '04':
                return self::getCourse04Items();
            case '05':
                return self::getCourse05Items();
            case '06':
                return self::getCourse06Items();
        }
    }

    /**
     * 人間ドック必須検査項目リストを取得する
     *
     * @return array $course01Items
     */
    public static function getCourse01Items() {
        return array(
            '身長',
            '体重',
            '問診',
            '腹囲',
            '胸部Ｘ線',
            '診察',
            '視力',
            '聴力',
            '血圧',
            '尿検査',
            '心電図',
            '血液検査',
            '腹部エコー検査',
            '便潜血検査',
            '眼底検査',
            '胃部検査（胃部Ｘ線検査／胃部内視鏡検査）'
        );
    }

    /**
     * 脳ドック必須検査項目リストを取得する
     *
     * @return array $course02Items
     */
    public static function getCourse02Items() {
        return array(
            'MRI',
            'MRA'
        );
    }

    /**
     * PETドック必須検査項目リストを取得する
     *
     * @return array $course03Items
     */
    public static function getCourse03Items() {
        return array(
            'PET／PET-CT'
        );
    }

    /**
     * レディースドック必須検査項目リストを取得する
     *
     * @return array $course04Items
     */
    public static function getCourse04Items() {
        return array(
            '身長',
            '体重',
            '問診',
            '腹囲',
            '胸部Ｘ線',
            '診察',
            '視力',
            '聴力',
            '血圧',
            '尿検査',
            '心電図',
            '血液検査',
            '腹部エコー検査',
            '便潜血検査',
            '眼底検査',
            '胃部検査（胃部Ｘ線検査／胃部内視鏡検査）',
            '子宮頸部細胞診検査（医師採取）',
            '乳がん検査（マンモグラフィ／乳房エコー検査）'
        );
    }

    /**
     * 心臓ドック必須検査項目リストを取得する
     *
     * @return array $course05Items
     */
    public static function getCourse05Items() {
        return array(
            'MRA（冠動脈）',
            '心臓CT',
            '心臓エコー検査'
        );
    }

    /**
     * 肺ドック必須検査項目リストを取得する
     *
     * @return array $course06Items
     */
    public static function getCourse06Items() {
        return array(
            '人間ドック',
            'ヘリカルCT',
            '肺がん検査（喀痰検査／腫瘍マーカー）'
        );
    }

    /**
     * 税フラグ配列を取得する
     *
     * @return array $taxList
     */
    public static function getTaxList() {
        return array(
            '0' => '税込',
            '1' => '税抜',
        );
    }

    /**
     * キーにより税フラグを取得する
     *
     * @param String $key
     * @return String $sexName
     */
    public static function getTaxName($key) {
        return Collection::make(Master::getTaxList())->get($key);
    }

    /**
     * 休診日配列を取得する
     *
     * @return array $breakDayList
     */
    public static function getBreakDayList() {
        return array(
            '1' => '月曜日',
            '2' => '火曜日',
            '3' => '水曜日',
            '4' => '木曜日',
            '5' => '金曜日',
            '6' => '土曜日',
            '7' => '日曜日',
            '8' => '祝日',
            '9' => '年末年始',
        );
    }

    /**
     * キーにより休診日名を取得する
     *
     * @param String $key
     * @return String $breakDayName
     */
    public static function getBreakDayName($key) {
        return Collection::make(Master::getBreakDayList())->get($key);
    }

    /**
     * 支払い方法配列を取得する
     *
     * @return array $sexList
     */
    public static function getPaymentList() {
        return array(
            '01' => '現金',
            '02' => 'VISA',
            '03' => 'MASTER',
            '04' => 'JCB',
            '05' => 'AMEX',
            '06' => 'UC',
            '07' => 'DC',
            '08' => 'セゾン',
            '09' => 'DINERS',
            '99' => 'その他のカード',
        );
    }

    /**
     * キーにより支払い方法を取得する
     *
     * @param String $key
     * @return String $featureName
     */
    public static function getPaymentName($key) {
        return Collection::make(Master::getPaymentList())->get($key);
    }

    /**
     * 受付期間配列を取得する
     *
     * @return array $receptionPeriodList
     */
    public static function getReceptionPeriodList() {
        return array('11', '12', '1', '2', '3',);
    }

    /**
     * 性別配列を取得する
     *
     * @return array $sexList
     */
    public static function getSexList() {
        return array(
            '0' => '男',
            '1' => '女',
        );
    }

    /**
     * キーにより性別を取得する
     *
     * @param String $key
     * @return String $sexName
     */
    public static function getSexName($key) {
        return Collection::make(Master::getSexList())->get($key);
    }

    /**
     * 駐車場フラグ配列を取得する
     *
     * @return array $parkingFlagList
     */
    public static function getParkingFlagList() {
        return array(
            '0' => '無し',
            '1' => '有り',
        );
    }

    /**
     * キーにより駐車場フラグを取得する
     *
     * @param String $key
     * @return String $parkingFlag
     */
    public static function getParkingFlag($key) {
        return Collection::make(Master::getParkingFlagList())->get($key);
    }

    /**
     * スタータス配列を取得する
     *
     * @return array $statesList
     */
    public static function getStatesList() {
        return array(
            '0' => '未確認',
            '1' => '確認済み',
        );
    }

    /**
     * キーによりステータスを取得する
     *
     * @param String $key
     * @return String $states
     */
    public static function getStates($key) {
        return Collection::make(Master::getStatesList())->get($key);
    }

}
