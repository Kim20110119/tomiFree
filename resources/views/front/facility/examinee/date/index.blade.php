@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@include('front.facility.examinee.date.page_js')
@inject('master', 'App\Common\Master')
@inject('common', 'App\Common\Common')
@section('content')
@yield('header')
{{-- */$holidays = $common->commaExplode($facility['holiday'])/* --}}
{{-- */$images = $common->commaExplode($facility['image'])/* --}}
<div id="breads">
    <div class="wrapper">
        <div class="ul01 cf">
            @yield('top')
            {!! Form::open(array('url' => 'searches', 'method' => 'post', 'id' => 'form_head')) !!}
            <li class="lnk"><a href="javascript:viod(0)" id="pref" data-pref="{{$facility['prefecture']}}">{{$master->getPrefectureName($facility['prefecture'])}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="city" data-city="{{$facility['city']}}">{{$facility['city']}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="facility" data-city="{{$facility['city']}}">{{$facility['name']}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="plan" data-city="{{$facility['city']}}">{{$plan['name']}}</a></li>
            <li class="current"><span>健診希望日入力</span></li>
            <input type="hidden" name="pref_code" value="{{$facility['prefecture']}}"/>
            <input type="hidden" name="city_code" value="{{$facility['city']}}"/>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<article>
    <section id="rsrv">
        <div class="wrapper">
            <div class="cmn_block08">
                <h1 class="cmn_h2_01 mt10"><span class="spn01">健診希望日入力</span></h1>
                <p class="rsrv-flow mt20"><img src="{{url('images/preferred','rsrv1-flow.png')}}" alt=""></p>

                <div class="rsrv_selected_info_box">
                    <h2 class="cmn_h3_01 mt20">選択店舗</h2>
                    <section class="shop_info cmn_block13">
                        <div class="rsrv_info">
                            <div class="left">
                                @if($facility['image'] <> '')
                                <p><img src="{{url('images/upload/'.$facility['number'].'/facility',$images[0])}}" alt="医療施設画像"></p>
                                @else
                                <p><img src="{{url('images/upload/facility','facility_noimage.jpg')}}" alt="医療施設画像"></p>
                                @endif
                            </div>
                            <div class="right">
                                <p class="fs14">{{$facility['catchphrase']}}</p>
                                <h1 class="cmn_h2_01 mt10"><span class="spn01">{{$facility['name']}}</span><span class="spn02">（{{$facility['name_kana']}}）</span></h1>
                                <ul class="rsrv_parallel_block mt15">
                                    <li class="cmn_block10">
                                        <p class="cmn_block10_left"><img src="{{url('images/list','icon07.png')}}" alt="電車"></p>
                                        <p class="cmn_block10_right">{{$facility['station']}}</p>
                                    </li>
                                    <li class="cmn_block10">
                                        <p class="cmn_block10_left"><img src="{{url('images/list','icon08.png')}}" alt="住所"></p>
                                        <p class="cmn_block10_right">{{$facility['access']}}</p>
                                    </li>
                                </ul>
                                <ul class="rsrv_parallel_block mt15">
                                    <li class="cmn_block11">
                                        <p class="cmn_block11_left">診療時間</p>
                                        <p class="cmn_block11_right">{{$facility['start_time']}}～{{$facility['end_time']}}</p>
                                    </li>
                                    <li class="cmn_block11">
                                        <p class="cmn_block11_left">休診日</p>
                                        <p class="cmn_block11_right">
                                            @foreach($holidays as $holiday)
                                            {{$master->getBreakDayName($holiday)}}
                                            @endforeach
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>

                    <h2 class="cmn_h3_01 mt20">選択プラン</h2>
                    <section class="menu_info cmn_block13">
                        <div class="rsrv_info">
                            <div class="cmn_block16 mt20 cf">
                                <div class="left">
                                    <div class="cmn_block17 mt20 cf">
                                        @if($plan['image'] == '')
                                        <p class="cmn_block17_left"><img src="{{url('images/upload/plan/'.$plan['course'],'plan_noimage.jpg')}}" width="210" height="150" alt="プラン画像"></p>
                                        @else
                                        <p class="cmn_block17_left"><img src="{{url('images/upload/'.$facility['number'].'/plan/'.$plan['plan_id'],$plan['image'])}}" width="210" height="150" alt="プラン画像"></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="right">
                                    <ul class="cmn_ul01 cf">
                                        <li class="li{{$plan['course']}}">{{$master->getInspectionCourseName($plan['course'])}}</li>
                                    </ul>
                                    <h3 class="cmn_h3_02">{{$common->strRound($plan['name'],40)}}</h3>
                                    <div class="txt01">
                                        <p class="txt01_1">{{number_format($plan['before_price'])}}<span>円</span></p>
                                        <p class="txt01_2">{{number_format($plan['after_price'])}}<span>円（税込）</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="rsrv_reselect">
                        <p class="rsrv_back"><a href="javascript:void(0)" class="rsrv_reselect_btn">健診プランを変更する</a></p>
                    </div>
                </div>
                <section class="rsrv_form">
                    {!! Form::open(array('url' => 'examinee/input', 'method' => 'post', 'id' => 'form_examinee_input')) !!}
                    <div class="rsrv_date">
                        <h3 class="rsrv_ttl">健診希望日を第5希望までご記入ください</h3>
                        <ul class="rsrv_desc">
                            <li>
                                <p>
                                    @foreach($plan_reception_periods as $plan_reception_period)
                                    【{{$common->dataFormatByYYYYMMDD($plan_reception_period['plan_reception_start'])}} 〜 <span class="cmn_red01">{{$common->dataFormatByYYYYMMDD($plan_reception_period['plan_reception_end'])}}</span>】
                                    @endforeach
                                    の間でご指定ください。合わせてご希望の時間帯もご記入ください。
                                </p>
                            </li>
                        </ul>
                        <!--全て必須でお願いします。-->
                        <table class="rsrv_tbl">
                            <tr>
                                <th class="required_item">
                                    <p>第１希望</p>
                                </th>
                                <td>
                                    <p>
                                        <input type="text" name="preferred_date_01" id="preferred_date_01" onBlur="validatePreferredDate01(1);">
                                    </p>
                                    <span id="preferredDate01ErrorMsg">
                                        <span class="help-block">{{$errors->first('name')}}</span>
                                    </span>
                                    <p>（例）3/10の１４時～１９時</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>第２希望</p>
                                </th>
                                <td>
                                    <input type="text" name="preferred_date_02" id="preferred_date_02" onBlur="validatePreferredDate02(1);">
                                    <span id="preferredDate02ErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>第３希望</p>
                                </th>
                                <td>
                                    <input type="text" name="preferred_date_03" id="preferred_date_03" onBlur="validatePreferredDate03(1);">
                                    <span id="preferredDate03ErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>第４希望</p>
                                </th>
                                <td>
                                    <input type="text" name="preferred_date_04" id="preferred_date_04" onBlur="validatePreferredDate04(1);">
                                    <span id="preferredDate04ErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>第５希望</p>
                                </th>
                                <td>
                                    <input type="text" name="preferred_date_05" id="preferred_date_05" onBlur="validatePreferredDate05(1);">
                                    <span id="preferredDate05ErrorMsg">
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="rsrv_btn_box">
                        <p class="rsrv_back"><a href="javascript:void(0)" class="rsrv_back_btn">一覧画面へ戻る</a></p>
                        <p class="rsrv_next">
                            <button type="button" class="rsrv_next_btn">受診者情報入力画面に進む</button>
                        </p>
                    </div>
                    <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['facility_number']}}"/>
                    <input type="hidden" id="plan_id" name="plan_id" value="{{$plan['plan_id']}}"/>
                    {!! Form::close() !!}
                </section>

            </div>
        </div>
    </section>
</article>
{!! Form::open(array('url' => '/menu', 'method' => 'post', 'id' => 'form_menu')) !!}
<input type="hidden" name="facility_number" value="{{$facility['facility_number']}}"/>
{!! Form::close() !!}
{!! Form::open(array('url' => '/menu/detail', 'method' => 'post', 'id' => 'form_menu_detail')) !!}
<input type="hidden" name="facility_number" value="{{$facility['facility_number']}}"/>
<input type="hidden" name="plan_id" value="{{$plan['plan_id']}}"/>
{!! Form::close() !!}
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection
