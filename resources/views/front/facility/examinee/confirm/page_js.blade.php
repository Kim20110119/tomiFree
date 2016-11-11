@section('page_js')
<!-- 受診者情報確認ページ JavaScript -->
<script type="text/javascript" charset="utf-8">
    /**
     * 「上記内容にて送信する」ボタンのクリック処理
     *
     * @description 入力完了画面への遷移処理
     */
    $('.rsrv_next_btn').click(function () {
        // サブミット
        $('#form_examinee_complete').submit();
    });
    /**
     * 「戻る」ボタンのクリック処理
     *
     * @description 受診者情報入力画面への遷移処理
     */
    $('.rsrv_back_btn').click(function () {
        // サブミット
        $('#form_examinee_input').submit();
    });
</script>
@endsection