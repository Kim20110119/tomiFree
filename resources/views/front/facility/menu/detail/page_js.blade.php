@section('page_js')
<!-- 医療施設メニュー詳細画面 JavaScript -->
<script type="text/javascript" charset="utf-8">
    /**
     * パンくずリスト「都道府県」ボタンのクリック処理
     *
     * @description 該当する都道府県により医療施設情報を検索する
     */
    $('#pref').click(function () {
        $('#city_code').val('');
        // サブミット
        $('#form_head').submit();
    });

    /**
     * パンくずリスト「市区町村」ボタンのクリック処理
     *
     * @description 該当する市区町村により医療施設情報を検索する
     */
    $('#city').click(function () {
        // サブミット
        $('#form_head').submit();
    });
    /**
     * パンくずリスト「医療施設名」ボタンのクリック処理
     *
     * @description 該当する市区町村により医療施設情報を検索する
     */
    $('#facility').click(function () {
        // サブミット
        $('#form_menu').submit();
    });
    /**
     * 「施設情報・アクセス」ボタンのクリック処理
     *
     * @description 医療施設アクセス画面への遷移処理
     */
    $('#menu').click(function () {
        // サブミット
        $('#form_menu').submit();
    });
    /**
     * 「施設情報・アクセス」ボタンのクリック処理
     *
     * @description 医療施設アクセス画面への遷移処理
     */
    $('#access').click(function () {
        // サブミット
        $('#form_access').submit();
    });
    /**
     * 「このコースの健診を希望する」ボタンのクリック処理
     *
     * @description 該当するメニュー詳細画面へ遷移する
     */
    $('.cmn_lnk05').click(function () {
        // サブミット
        $('#form_examinee_date').submit();
    });
    /**
     * その他プランのリンクをクリック処理
     *
     * @description 該当するメニュー詳細画面へ遷移する
     */
    $('.block01').click(function () {
        $('#other_plan_id').val($(this).data('plan'));
        // サブミット
        $('#form_menu_detail').submit();
    });
    /**
     * 「詳細を見る」をクリック処理
     *
     * @description 該当する医療施設メニュー画面へ遷移する
     */
    $('.cmn_lnk01').click(function () {
        $('#facility_number').val($(this).data('number'));
        // サブミット
        $('#form_menu').submit();
    });

</script>
@endsection