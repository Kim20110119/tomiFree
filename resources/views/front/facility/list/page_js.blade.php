@section('page_js')
<!-- 医療施設一覧ページ JavaScript -->
<script src="{{url('js','common.js')}}"></script>
<script type="text/javascript" charset="utf-8">
var pref_default = '全国';
var city_default = '市区町村';
var course_default = '選択中の検診コースはありません。';
var condition_pref;
var condition_city;
var condition_courses;
/**
 * 医療施設一覧画面ロード処理
 */
$(document).ready(function () {
    // 選択された都道府県コード
    condition_pref = $('#pref_code').val();
    // 選択された市区町村コード
    condition_city = $('#city_code').val();
    // 選択された検診コース
    condition_courses = $('#course_code').val();
    if (condition_pref != '' && condition_pref != '00') {
        set_citys(condition_pref);
        if (condition_city != '') {
            $('#button_city').bind('click', function () {
                $('#modal_window').fadeIn();
                $('#button_city_select').addClass('active');
                $('#block_city').slideToggle();
                $('#block_pref').css('display', 'none');
                $('#block_course').css('display', 'none');
            });
        }
    }
    var courses = condition_courses.split(",");

    $('[name="course"]').each(function () {
        if (courses.indexOf($(this).val()) >= 0) {
            $(this).prop("checked", true);
        }
    });
});

/**
 * 都道府県を選択後の処理
 *
 * @description 選択された該都道府県に該当する市区町村情報を取得する
 */
$("[name='pref']").click(function () {
    // 選択した都道府県名を取得する
    var pref_code = $("input[name='pref']:checked").val();
    var pref_name = $("input[name='pref']:checked").data('pref_name');
    // 都道府県選択無しで、全国を選択した場合
    if (pref_name == '選択なし') {
        $('#block_city').empty();
        $('#block_city').css('display', 'none');
        $('#button_japan').text(pref_default);
        $('#button_city').text(city_default);
        $('#button_city').removeClass('active');
        $('#button_city').unbind('click');
        return;
    }
    // 選択した都道府県名を選択条件に設定する
    $('#button_japan').text(pref_name);
    $('#block_city').fadeIn();
    set_citys(pref_code);
});

/**
 * 市区町村情報の設定処理
 *
 * @param {String} pref 選択した都道府県コード
 * @description 都道府県を選択した後に、DBから該都道府県の市区町村情報取得し、セレクタに設定する
 */
function set_citys(pref) {
    $('#block_city').empty();
    $.ajax({
        type: 'GET',
        url: './city/' + pref,
        dataType: 'json',
        success: function (cities) {
            var len = cities.length;
            for (var i = 0; i < len; i++) {
                var city;
                if (condition_city == cities[i].city_code) {
                    city = '<label><input name="city" type="radio" value="' + cities[i].city_name + '" data-city_name = "' + cities[i].city_name + '"onClick="radio_city_click();" checked="checked">' + cities[i].city_name + '</label>';
                } else {
                    city = '<label><input name="city" type="radio" value="' + cities[i].city_name + '" data-city_name = "' + cities[i].city_name + '"onClick="radio_city_click();">' + cities[i].city_name + '</label>';
                }

                $('#block_city').append(city);
            }
        }
    });
}

/**
 * 市区町村情報の選択処理
 *
 * @description 市区町村を選択すると、選択条件に該当市区町村を表示される
 */
function radio_city_click() {
    // 選択した市区町村名を取得する
    var city_name = $("input[name='city']:checked").data('city_name');
    // 選択した市区町村を選択条件に設定する
    $('#button_city').text(city_name);
    $('#button_city').addClass('active');
    $('#button_city').bind('click', function () {
        $('#modal_window').fadeIn();
        $('#button_city_select').addClass('active');
        $('#button_city').fadeIn();
        $('#block_pref').css('display', 'none');
        $('#block_course').css('display', 'none');
    });
}

/**
 * 検診コースを選択後の処理
 *
 * @description チェックされた検診コース名を検索条件に表示する
 */
$("[name='course']").click(function () {
    var course_name = '';
    $('[name="course"]:checked').each(function () {
        course_name = course_name + $(this).data('course_name') + '<br/>';
    });
    if (course_name == '') {
        $('#course').html(course_default);
    } else {
        $('#course').html(course_name);
    }
});

/**
 * 「この条件で検索する」ボタンのクリック処理
 *
 * @description チェックされた検診コース名を検索条件に表示する
 */
$('#search_buttom').click(function () {
    // 選択された都道府県コード
    var pref_code = $("input[name='pref']:checked").val();
    $('#search_pref_code').val(pref_code);
    // 選択された市区町村コード
    var city_code = $("input[name='city']:checked").val();
    $('#search_city_code').val(city_code);
    // 選択された市区町村名
    var city_name = $("input[name='city']:checked").data('city_name');
    $('#city_name').val(city_name);
    // 選択された検診コースコード
    var course_code = [];
    $('[name="course"]:checked').each(function () {
        course_code.push($(this).val());
    });
    $('#course_code').val(course_code);
    // サブミット
    $('#form_searches').submit();
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
    $('#form_searches').submit();
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
    $('#form_searches').submit();
});
/**
 * 「このメニューで予約」ボタンのクリック処理
 *
 * @description 予約数順により並べ替え処理
 */
$('.cmn_lnk02').click(function () {
    $('#preferred_facility_number').val($(this).data('facility_number'));
    $('#preferred_plan_id').val($(this).data('plan_id'));
    // サブミット
    $('#form_menu_detail').submit();
});
</script>
@endsection