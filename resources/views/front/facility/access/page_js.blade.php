@section('page_js')
<!-- 医療施設一覧ページ JavaScript -->
<script src="{{url('js','common.js')}}"></script>
<script src="{{url('js','jquery.flexslider.js')}}"></script>
<script src="{{url('js','access.js')}}"></script>
<script type="text/javascript" charset="utf-8">
/**
 * 「メニュー」ボタンのクリック処理
 *
 * @description 医療施設メニュー画面への遷移処理
 */
$('#menu').click(function () {
    // サブミット
    $('#form_menu').submit();
});
/**
 * 「この医療施設で健診を希望する」ボタンのクリック処理
 *
 * @description 医療施設メニュー画面への遷移処理
 */
$('.cmn_lnk05').click(function () {
    // サブミット
    $('#form_menu').submit();
});
/**
 * 「詳細を見る」ボタンのクリック処理
 *
 * @description 医療施設メニュー画面への遷移処理
 */
$('.cmn_lnk01').click(function () {
    $('#facility_number').val($(this).data('number'));
    // サブミット
    $('#form_menu').submit();
});
</script>
@endsection