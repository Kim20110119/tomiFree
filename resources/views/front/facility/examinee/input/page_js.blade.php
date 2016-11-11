@section('page_js')
<!-- 医療施設一覧ページ JavaScript -->
<script src="{{url('js','common.js')}}"></script>
<script src="{{url('js','jquery.flexslider.js')}}"></script>
<script src="{{url('js/examinee','user.js')}}"></script>
<script src="{{url('js/zip','ajaxzip3.js')}}"></script>
<script type="text/javascript" charset="utf-8">
/**
 * 「入力情報を確認する」ボタンのクリック処理
 *
 * @description 受診者情報確認画面への遷移処理
 */
$('.rsrv_next_btn').click(function () {
    // ご氏名
    if ($('#name').val() == '') {
        alert("ご氏名を入力してください。");
        $('#name').focus();
        return 0;
    }
    // ご氏名カタカナ
    var name_kana = $('#name_kana');
    if (name_kana.val() == '') {
        alert("フリガナを入力して下さい。");
        $('#name_kana').focus();
        return 0;
    }
//
//    if (name_kana.val()) {
//        if (name_kana.val().match(/^[ぁ-んァ-ヶー]*$/) == null) {
//            alert("フリガナは全角ひらがな・全角カタカナで入力してください。");
//            $('#name_kana').focus();
//            return 0;
//        }
//    }
    // 生年月日
    var year = $('#year');
    var month = $('#month');
    var day = $('#day');
    if (year.val() == '' || month.val() == '' || day.val() == '') {
        if (year.val() == '') {
            alert("年を入力して下さい。");
            $('#year').focus();
            return 0;
        }
        if (month.val() == '') {
            alert("月を入力して下さい。");
            $('#name_kana').focus();
            return 0;
        }
        if (day.val() == '') {
            alert("日を入力して下さい。");
            $('#day').focus();
            return 0;
        }
    }
    if (year.val() && month.val() && day.val()) {
        if (!checkdate(month.val(), day.val(), year.val())) {
            alert("生年月日が正しくありません。");
            $('#year').focus();
            return 0;
        }
    }
    // 年齢
    var age = $('#age');
    if (age.val() == '') {
        alert("年齢を入力して下さい。");
        $('#age').focus();
        return 0;
    }
    if (age.val()) {
        var isNumber = true;
        for (var i = 0; i < age.val().length; i++) {
            if (age.val().charCodeAt(i) < 0x30 || age.val().charCodeAt(i) > 0x39) {
                isNumber = false;
            }
        }
        if (!isNumber) {
            alert("年齢には半角数字を入力して下さい。");
            $('#age').focus();
            return 0;
        }
    }
    // 性別
    if ($("input[name='sex']:checked").length == 0) {
        alert("性別を選択してください。");
        $('#male').focus();
        return 0;
    }
    // 郵便番号
    var zip = $('#zip').val();
    if (zip == '') {
        alert("郵便番号を入力してください。");
        $('#zip').focus();
        return 0;
    }
    if (zip.length != 7) {
        alert("郵便番号は半角数字7桁で入力をして下さい。");
        $('#zip').focus();
        return 0;
    }
    if (zip) {
        var isNumber = true;
        for (var i = 0; i < zip.length; i++) {
            if (zip.charCodeAt(i) < 0x30 || zip.charCodeAt(i) > 0x39) {
                isNumber = false;
            }
        }
        if (!isNumber) {
            alert("郵便番号には半角数字を入力して下さい。");
            $('#zip').focus();
            return 0;
        }
    }
    // 住所
    var addr = $('#address');
    if (addr.val() == '') {
        alert("住所を入力してください。");
        $('#address').focus();
        return 0;
    }
    // 住所
    var tel01_1 = $('#tel01_1');
    var tel01_2 = $('#tel01_2');
    var tel01_3 = $('#tel01_3');
    if (tel01_1.val() == '') {
        alert("電話番号1を入力してください。");
        $('#tel01_1').focus();
        return 0;
    }
    if (tel01_2.val() == '') {
        alert("電話番号1を入力してください。");
        $('#tel01_2').focus();
        return 0;
    }
    if (tel01_3.val() == '') {
        alert("電話番号1を入力してください。");
        $('#tel01_3').focus();
        return 0;
    }


    if (tel01_1.val()) {
        telnum01 = tel01_1.val();
        var isNumber = true;
        for (var i = 0; i < telnum01.length; i++) {
            if (telnum01.charCodeAt(i) < 0x30 || telnum01.charCodeAt(i) > 0x39) {
                isNumber = false;
            }
        }
        if (!isNumber) {
            alert("電話番号1には半角数字を入力して下さい。");
            $('#tel01_1').focus();
            return 0;
        }
    }
    if (tel01_2.val()) {
        telnum02 = tel01_2.val();
        var isNumber = true;
        for (var i = 0; i < telnum02.length; i++) {
            if (telnum02.charCodeAt(i) < 0x30 || telnum02.charCodeAt(i) > 0x39) {
                isNumber = false;
            }
        }
        if (!isNumber) {
            alert("電話番号1には半角数字を入力して下さい。");
            $('#tel01_2').focus();
            return 0;
        }
    }
    if (tel01_3.val()) {
        telnum03 = tel01_3.val();
        var isNumber = true;
        for (var i = 0; i < telnum03.length; i++) {
            if (telnum03.charCodeAt(i) < 0x30 || telnum03.charCodeAt(i) > 0x39) {
                isNumber = false;
            }
        }
        if (!isNumber) {
            alert("電話番号1には半角数字を入力して下さい。");
            $('#tel01_3').focus();
            return 0;
        }
    }
    // 電話番号2
    var tel02_1 = $('#tel02_1');
    var tel02_2 = $('#tel02_2');
    var tel02_3 = $('#tel02_3');
    if (tel02_1.val()) {
        telnum01 = tel02_1.val();
        var isNumber = true;
        for (var i = 0; i < telnum01.length; i++) {
            if (telnum01.charCodeAt(i) < 0x30 || telnum01.charCodeAt(i) > 0x39) {
                isNumber = false;
            }
        }
        if (!isNumber) {
            alert("電話番号1には半角数字を入力して下さい。");
            $('#tel02_1').focus();
            return 0;
        }
    }
    if (tel02_2.val()) {
        telnum02 = tel02_2.val();
        var isNumber = true;
        for (var i = 0; i < telnum02.length; i++) {
            if (telnum02.charCodeAt(i) < 0x30 || telnum02.charCodeAt(i) > 0x39) {
                isNumber = false;
            }
        }
        if (!isNumber) {
            alert("電話番号1には半角数字を入力して下さい。");
            $('#tel02_2').focus();
            return 0;
        }
    }
    if (tel02_3.val()) {
        telnum03 = tel02_3.val();
        var isNumber = true;
        for (var i = 0; i < telnum03.length; i++) {
            if (telnum03.charCodeAt(i) < 0x30 || telnum03.charCodeAt(i) > 0x39) {
                isNumber = false;
            }
        }
        if (!isNumber) {
            alert("電話番号1には半角数字を入力して下さい。");
            $('#tel02_3').focus();
            return 0;
        }
    }
    // メールアドレス
    var email = $('#email');
    if (email.val() == '') {
        alert("メールアドレスを入力してください。");
        $('#email').focus();
        return 0;
    }
    if (email.val()) {
        if (!email.val().match(/^[A-Za-z0-9]+[\+\w\.-]+@[\w\.-]+\.\w{2,}$/)) {
            alert("正しいメールアドレスを入力して下さい。");
            $('#email').focus();
            return 0;
        }
    }
    // 利用規約の同意
    if ($('#agreement:checked').length == 0) {
        alert("利用規約、プライバシーポリシーを同意のうえ入力情報を確認してください。");
        $('#agreement').focus();
        return 0;
    }
    // サブミット
    $('#form_examinee_confirm').submit();
});
/**
 * 「戻る」ボタンのクリック処理
 *
 * @description 受診者情報入力画面への遷移処理
 */
$('.rsrv_back_btn').click(function () {
    // サブミット
    $('#form_examinee_date').submit();
});
</script>
@endsection