@section('javascript')
<script src="https://code.jquery.com/jquery-3.0.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script src="{{url('js/affiliate','common.js')}}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
/**
 * ロゴ画像のクリック処理
 *
 * @description 得割ドックTOP画面へ遷移する
 */
$('#logo').click(function () {
    $('#form_logo').submit();
});
</script>
@endsection