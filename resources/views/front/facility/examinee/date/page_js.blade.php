@section('page_js')
<!-- 医療施設一覧ページ JavaScript -->
<script type="text/javascript" charset="utf-8">
    /**
     *  第1希望日エラーチェック
     *  @param {Boolean} mustFlg
     */
    function validatePreferredDate01(mustFlg) {
        var preferredDate = $('#preferred_date_01');
        var msg = "";
        if (mustFlg) {
            if (preferredDate.val() == '') {
                msg += '<span class="help-block"><strong><font color="#ff0000">第1希望を入力してください。</font></strong></span>';
            }
        }
        $('#preferredDate01ErrorMsg').html(msg);
    }
    /**
     *  第2希望日エラーチェック
     *  @param {Boolean} mustFlg
     */
    function validatePreferredDate02(mustFlg) {
        var preferredDate = $('#preferred_date_02');
        var msg = "";
        if (mustFlg) {
            if (preferredDate.val() == '') {
                msg += '<span class="help-block"><strong><font color="#ff0000">第2希望を入力してください。</font></strong></span>';
            }
        }
        $('#preferredDate02ErrorMsg').html(msg);
    }
    /**
     *  第3希望日エラーチェック
     *  @param {Boolean} mustFlg
     */
    function validatePreferredDate03(mustFlg) {
        var preferredDate = $('#preferred_date_03');
        var msg = "";
        if (mustFlg) {
            if (preferredDate.val() == '') {
                msg += '<span class="help-block"><strong><font color="#ff0000">第3希望を入力してください。</font></strong></span>';
            }
        }
        $('#preferredDate03ErrorMsg').html(msg);
    }
    /**
     *  第4希望日エラーチェック
     *  @param {Boolean} mustFlg
     */
    function validatePreferredDate04(mustFlg) {
        var preferredDate = $('#preferred_date_04');
        var msg = "";
        if (mustFlg) {
            if (preferredDate.val() == '') {
                msg += '<span class="help-block"><strong><font color="#ff0000">第4希望を入力してください。</font></strong></span>';
            }
        }
        $('#preferredDate04ErrorMsg').html(msg);
    }
    /**
     *  第5希望日エラーチェック
     *  @param {Boolean} mustFlg
     */
    function validatePreferredDate05(mustFlg) {
        var preferredDate = $('#preferred_date_05');
        var msg = "";
        if (mustFlg) {
            if (preferredDate.val() == '') {
                msg += '<span class="help-block"><strong><font color="#ff0000">第5希望を入力してください。</font></strong></span>';
            }
        }
        $('#preferredDate05ErrorMsg').html(msg);
    }
    /**
     * 「健診プランを変更する」ボタンのクリック処理
     *
     * @description メニュー画面への遷移処理
     */
    $('.rsrv_reselect_btn').click(function () {
        // サブミット
        $('#form_menu').submit();
    });
    /**
     * 「一覧画面へ戻る」ボタンのクリック処理
     *
     * @description メニュー画面への遷移処理
     */
    $('.rsrv_back_btn').click(function () {
        // サブミット
        $('#form_menu').submit();
    });
    /**
     * 「受診者情報入力画面に進む」ボタンのクリック処理
     *
     * @description 受診者情報入力画面への遷移処理
     */
    $('.rsrv_next_btn').click(function () {
        if ($('#preferred_date_01').val() == '') {
            alert("第1希望を入力してください。");
            $('#preferred_date_01').focus();
            return 0;
        }
        if ($('#preferred_date_02').val() == '') {
            alert("第2希望を入力してください。");
            $('#preferred_date_02').focus();
            return 0;
        }
        if ($('#preferred_date_03').val() == '') {
            alert("第3希望を入力してください。");
            $('#preferred_date_03').focus();
            return 0;
        }
        if ($('#preferred_date_04').val() == '') {
            alert("第4希望を入力してください。");
            $('#preferred_date_04').focus();
            return 0;
        }
        if ($('#preferred_date_05').val() == '') {
            alert("第5希望を入力してください。");
            $('#preferred_date_05').focus();
            return 0;
        }
        // サブミット
        $('#form_examinee_input').submit();
    });
</script>
@endsection