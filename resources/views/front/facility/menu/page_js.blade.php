@section('page_js')
<!-- 医療施設メニュー画面 JavaScript -->
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
     * 「施設情報・アクセス」ボタンのクリック処理
     *
     * @description 医療施設アクセス画面への遷移処理
     */
    $('#access').click(function () {
        // サブミット
        $('#form_access').submit();
    });
    /**
     * 「新着順」ボタンのクリック処理
     *
     * @description 新着順により並べ替え処理
     */
    $('#order_create').click(function () {
        $('#order_by').val('created_at');
        $('#sort').val('desc');
        // サブミット
        $('#form_menu').submit();
    });

    /**
     * 「予約数順」ボタンのクリック処理
     *
     * @description 予約数順により並べ替え処理
     */
    $('#order_reserve').click(function () {
        $('#order_by').val('reserve_count');
        $('#sort').val('desc');
        // サブミット
        $('#form_menu').submit();
    });

    /**
     * 「安い順」ボタンのクリック処理
     *
     * @description 安い順により並べ替え処理
     */
    $('#order_price_asc').click(function () {
        $('#order_by').val('after_price');
        $('#sort').val('asc');
        // サブミット
        $('#form_menu').submit();
    });

    /**
     * 「高い順」ボタンのクリック処理
     *
     * @description 高い順により並べ替え処理
     */
    $('#order_price_desc').click(function () {
        $('#order_by').val('after_price');
        $('#sort').val('desc');
        // サブミット
        $('#form_menu').submit();
    });
    /**
     * 「このコースの健診を希望する」ボタンのクリック処理
     *
     * @description 該当するメニュー詳細画面へ遷移する
     */
    $('.cmn_lnk04').click(function () {
        $('#plan_id').val($(this).data('plan'));
        // サブミット
        $('#form_menu_detail').submit();
    });
</script>
@endsection