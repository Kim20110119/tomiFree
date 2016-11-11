@section('page_js')
<!-- 得割ドックページ JavaScript -->
<script src="{{url('js','common.js')}}"></script>
<script type="text/javascript" charset="utf-8">
/**
 * 都道府県の選択処理
 *
 * @description クリックされた都道府県により検索処理を行う
 */
$('.pref').click(function () {
    var pref = $(this).data('vlaue');
    $('#pref_code').val(pref);
    $('#form_searche').submit();
});

/**
 * 検査コースの選択処理
 *
 * @description クリックされた検査コースにより検索処理を行う
 */
$('.course').click(function () {
    var course = $(this).data('vlaue');
    $('#course_code').val(course);
    $('#form_searche').submit();
});
</script>
@endsection