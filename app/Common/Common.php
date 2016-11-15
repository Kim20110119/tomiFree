<?php

namespace App\Common;

use DateTime;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use function public_path;
use function view;

class Common {

    const COMMA = ',';
    const COLON = ':';
    const SLASH = '/';
    const MINUS = '-';

    /**
     * 指定文字区切りデータを配列に入れる処理
     *
     * @param String $str_explode 区切り符号
     * @param String $str カンマ区切りデータ
     * @return array $str
     */
    public static function commonExplode($str_explode, $str) {
        return explode($str_explode, $str);
    }

    /**
     * カンマ区切りデータを配列に入れる処理
     *
     * @param String $str カンマ区切りデータ
     * @return array $str
     */
    public static function commaExplode($str) {
        return self::commonExplode(self::COMMA, $str);
    }

    /**
     * マイナス区切りデータを配列に入れる処理
     *
     * @param String $str マイナス区切りデータ
     * @return array $str
     */
    public static function minusExplode($str) {
        return self::commonExplode(self::MINUS, $str);
    }

    /**
     * コロン区切りデータを配列に入れる処理
     *
     * @param String $str コロン区切りデータ
     * @return array $str
     */
    public static function colonExplode($str) {
        return self::commonExplode(self::COLON, $str);
    }

    /**
     * スラッシュ区切りデータを配列に入れる処理
     *
     * @param String $str スラッシュ区切りデータ
     * @return array $str
     */
    public static function slashExplode($str) {
        return self::commonExplode(self::SLASH, $str);
    }

    /**
     * 指定配列をカンマにより連結する処理
     *
     * @param array $str_array 連結する配列
     * @return String $str
     */
    public static function arrayLinkingByComma($str_array) {
        $return_str = "";
        foreach ($str_array as $str) {
            if ($str != end($str_array)) {
                $return_str = $return_str . $str . self::COMMA;
            } else {
                $return_str = $return_str . $str;
            }
        }
        return $return_str;
    }

    /**
     * 新規登録する医療施設番号を取得する
     *
     * @param array $facility_number 既存最大医療施設番号
     * @return String $str
     */
    public static function getInsertFacilityNumber($facility_number) {
        $pref = substr($facility_number, 0, 2);
        $number = substr($facility_number, 2, 5);
        $int_number = intval($number) + 1;
        return $pref . str_pad(strval($int_number), 5, "0", STR_PAD_LEFT);
    }

    /**
     * 新規登録するプランIDを取得する
     *
     * @param array $plan_id 該当する医療施設の既存最大プランID
     * @return String $str
     */
    public static function getInsertPlanId($plan_id) {
        $facility_number = substr($plan_id, 0, 7);
        $number = substr($plan_id, 7, 3);
        $int_number = intval($number) + 1;
        return $facility_number . str_pad(strval($int_number), 3, "0", STR_PAD_LEFT);
    }

    /**
     * 文字列年、月、日を[yyyy/MM/dd]形式に連結する
     *
     * @param String $year 年
     * @param String $month 月
     * @param String $day 日
     * @return array $str_date(yyyy/MM/dd)
     */
    public static function dateFormat($year, $month, $day) {
        return $year . self::SLASH . $month . self::SLASH . $day;
    }

    /**
     * 文字列電話番号を[00-0000-000]形式に連結する
     *
     * @param String $tel1
     * @param String $tel2
     * @param String $tel3
     * @return array $str_tel(00-0000-000)
     */
    public static function telFormat($tel1, $tel2, $tel3) {
        return $tel1 . self::MINUS . $tel2 . self::MINUS . $tel3;
    }

    /**
     * 文字列郵便番号を[000-0000]形式に連結する
     *
     * @param String $zip1
     * @param String $zip2
     * @return array $str_zip(000-0000)
     */
    public static function zipFormat($zip1, $zip2) {
        return $zip1 . self::MINUS . $zip2;
    }

    /**
     * 時間を[hh:mm]形式に連結する
     *
     * @param String $h
     * @param String $m
     * @return array $str_time(hh:mm)
     */
    public static function timeFormatByHHMM($h, $m) {
        $hh = '';
        $mm = '';
        if (strlen($h) < 2) {
            $hh = '0' . $h;
        } else {
            $hh = $h;
        }
        if (strlen($m) < 2) {
            $mm = '0' . $m;
        } else {
            $mm = $m;
        }
        return $hh . self::COLON . $mm;
    }

    /**
     * 生年月日から年齢を計算する処理
     *
     * @param String $ymd 年-月-日
     * @return int $age
     */
    public static function birthToAge($ymd) {

        $base = new DateTime();
        $today = $base->format('Ymd');

        $birth = new DateTime($ymd);
        $birthday = $birth->format('Ymd');

        $age = (int) (($today - $birthday) / 10000);

        return $age;
    }

    /**
     * 生年月日から年齢帯を計算する処理
     *
     * @param String $ymd 年-月-日
     * @return int $age
     */
    public static function birthToAgeGroup($ymd) {
        $age = floor(self::birthToAge($ymd) / 10) * 10;
        return $age;
    }

    /**
     * 改行符号を改行HTMLタグに変換する処理
     *
     * @param String $str カンマ区切りデータ
     * @return array $str
     */
    public static function brReplace($str) {
        $order = array("\r\n", "\n", "\r");
        $replace = '<br />';
        return str_replace($order, $replace, $str);
    }

    /**
     * 本文を指定した文字数により丸める処理
     *
     * @param String $str 丸める本文
     * @param String $length 文字数
     * @return String $str
     */
    public static function strRound($str, $length = 100) {
        if ($length != 0) {
            $str = mb_strimwidth($str, 0, $length, "...");
        }
        return $str;
    }

    /**
     * 「h:s」形式時間文字列を「h時s分」形式文字列にフォーマットする処理
     *
     * @param String $str 「h:s」形式時間文字列
     * @return String $str 「h時s分」形式文字列
     */
    public static function timeFormat($str) {
        return self::colonExplode($str)[0] . "時" . self::colonExplode($str)[1] . "分";
    }

    /**
     * 「yyyy-MM-dd」形式日付文字列を「yyyy年MM月dd日」形式文字列にフォーマットする処理
     *
     * @param String $str 「yyyy-MM-dd」形式日付文字列
     * @return String $str 「yyyy年MM月dd日」形式文字列
     */
    public static function dataFormatByYYYYMMDD($str) {
        list($year, $month, $day) = explode('-', $str);
        return $year . "年" . $month . "月" . $day . "日";
    }

    /**
     * 医療施設画像ファイルを一時アップロードする処理
     *
     * @param file $file アップロードする医療施設画像ファイル
     * @return view 画像ファイル名
     */
    public static function imageUploadTempByFacility($file) {
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('images/temp/temp_facility'), $fileName);
        }
        return $fileName;
    }

    /**
     * プラン画像ファイルを一時アップロードする処理
     *
     * @param file $file アップロードするプラン画像ファイル
     * @return view 画像ファイル名
     */
    public static function imageUploadTempByPlan($file) {
        $fileName = "";
        if (!empty($file)) {
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('images/temp/temp_plan'), $fileName);
        }
        return $fileName;
    }

    /**
     * 一時医療施設画像ファイルを移動する処理
     *
     * @param String $facility_number 医療施設番号
     */
    public static function moveFileByFacility($facility_number) {
        if (!file_exists(public_path('images/upload/' . $facility_number))) {
            mkdir(public_path('images/upload/' . $facility_number));
        }
        File::move(public_path('images/temp/temp_facility'), public_path('images/upload/' . $facility_number . '/facility'));
    }

    /**
     * 療施設画像ファイルを削除する処理
     *
     * @param String $facility_number 医療施設番号
     * @param String $image 医療施設画像名
     */
    public static function deleteFileByFacility($facility_number) {
        File::deleteDirectory(public_path('images/upload/' . $facility_number . '/facility'));
    }

    /**
     * 一時プラン画像ファイルを移動する処理
     *
     * @param String $facility_number 医療施設番号
     * @param String $plan_id プランID
     */
    public static function moveFileByPlan($facility_number, $plan_id) {
        if (!file_exists(public_path('images/upload/' . $facility_number . '/plan'))) {
            mkdir(public_path('images/upload/' . $facility_number . '/plan'));
        }
        File::move(public_path('images/temp/temp_plan'), public_path('images/upload/' . $facility_number . '/plan/' . $plan_id));
    }

    /**
     * プラン画像ファイルを移動する処理
     *
     * @param String $facility_number 医療施設番号
     * @param String $plan_id プランID
     */
    public static function deleteFileByPlan($facility_number, $plan_id) {
        File::deleteDirectory(public_path('images/upload/' . $facility_number . '/plan/' . $plan_id));
    }

    /**
     * 医療施設を閲覧するごとに、医療施設閲覧履歴を更新する処理
     *
     * @param String $facility_number 医療施設番号
     */
    public static function facilityBrowseUpdate($facility_number) {
        $user_id = Session::get('secure_code');
        if (empty($user_id)) {
            return 0;
        }
        $browse_query = FacilityBrowseHistory::query();
        $browse = $browse_query->where('facility_number', $facility_number)->first();
        if (empty($browse)) {
            $facility_browse = new FacilityBrowseHistory;
            $facility_browse->facility_number = $facility_number;
            $facility_browse->user_id = $user_id;
            $facility_browse->save();
        } else {
            $browse['browse_count'] = $browse['browse_count'] + 1;
            $browse->save();
        }
    }

    /**
     * プランを閲覧するごとに、プラン閲覧履歴を更新する処理
     *
     * @param String $plan_id プランID
     */
    public static function planBrowseUpdate($plan_id) {
        $user_id = Session::get('secure_code');
        if (empty($user_id)) {
            return 0;
        }
        $browse_query = PlanBrowseHistory::query();
        $browse = $browse_query->where('plan_id', $plan_id)->first();
        if (empty($browse)) {
            $plan_browse = new PlanBrowseHistory;
            $plan_browse->plan_id = $plan_id;
            $plan_browse->user_id = $user_id;
            $plan_browse->save();
        } else {
            $browse['browse_count'] = $browse['browse_count'] + 1;
            $browse->save();
        }
    }

}
