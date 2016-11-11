@section('common_js')
<!-- フロント側医療施設ページ JavaScript -->
<script type="text/javascript" charset="utf-8">
    /**
     * ロゴ画像のクリック処理
     *
     * @description 得割ドックTOP画面へ遷移する
     */
    $('#top').click(function () {
        $('#form_top').submit();
    });

    /**
     * パンくずリスト「都道府県」ボタンのクリック処理
     *
     * @description 該当する都道府県により医療施設一覧画面へ遷移
     */
    $('#pref').click(function () {
        $('#city_code').val('');
        // サブミット
        $('#form_head').submit();
    });

    /**
     * パンくずリスト「市区町村」ボタンのクリック処理
     *
     * @description 該当する市区町村により医療施設一覧画面へ遷移
     */
    $('#city').click(function () {
        // サブミット
        $('#form_head').submit();
    });

    /**
     * パンくずリスト「医療施設名」ボタンのクリック処理
     *
     * @description 該当する医療施設情報画面へ遷移
     */
    $('#facility').click(function () {
        // サブミット
        $('#form_menu').submit();
    });

    /**
     * パンくずリスト「プラン名」ボタンのクリック処理
     *
     * @description 該当するプラン詳細画面へ遷移
     */
    $('#plan').click(function () {
        // サブミット
        $('#form_menu_detail').submit();
    });

    /**
     * 「詳細を見る」ボタンのクリック処理
     *
     * @description 該当する医療施設詳細画面へ遷移する
     */
    $('.cmn_lnk01').click(function () {
        $('#facility_number').val($(this).data('number'));
        // サブミット
        $('#form_menu').submit();
    });
</script>
@endsection