@section('page_js')
<!-- 受診 JavaScript -->
<script type="text/javascript" charset="utf-8">
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
     * 「一覧画面へ戻る」ボタンのクリック処理
     *
     * @description メニュー画面への遷移処理
     */
    $('.rsrv_next_btn').click(function () {
        // サブミット
        $('#form_menu').submit();
    });
</script>
@endsection