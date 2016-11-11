@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@include('front.facility.examinee.input.page_js')
@inject('master', 'App\Common\Master')
@inject('common', 'App\Common\Common')
@section('content')
@yield('header')
<div id="breads">
    <div class="wrapper">
        <div class="ul01 cf">
            @yield('top')
            {!! Form::open(array('url' => 'searches', 'method' => 'post', 'id' => 'form_head')) !!}
            <li class="lnk"><a href="javascript:viod(0)" id="pref" data-pref="{{$facility['prefecture']}}">{{$master->getPrefectureName($facility['prefecture'])}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="city" data-city="{{$facility['city']}}">{{$facility['city']}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="facility" data-city="{{$facility['city']}}">{{$facility['name']}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="plan" data-city="{{$facility['city']}}">{{$plan['name']}}</a></li>
            <li class="current"><span>受診者情報入力</span></li>
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
                <h1 class="cmn_h2_01 mt10"><span class="spn01">受診者情報入力</span></h1>
                <p class="rsrv-flow mt20"><img src="{{url('images/preferred','rsrv2-flow.png')}}" alt=""></p>
                {!! Form::open(array('url' => 'examinee/confirm', 'method' => 'post', 'id' => 'form_examinee_confirm')) !!}
                <section class="rsrv_form">
                    <div class="rsrv_welbox">
                        <h3 class="rsrv_ttl">WELBOX会員名</h3>
                        <ul class="rsrv_desc">
                            <li>
                                <p>WELBOX会員名（ご契約者様お名前）をご記入ください。</p>
                                <p>受診者様と同一場合は空欄のままお進みください。</p>
                            </li>
                        </ul>
                        <table class="rsrv_tbl">
                            <tr>
                                <th>
                                    <p>WELBOX会員名<br>（ご契約者様名）</p>
                                </th>
                                <td>
                                    <p>
                                        <input type="text" name="ewel_name" id="ewel_name">
                                    </p>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="rsrv_examinee">
                        <h3 class="rsrv_ttl">受診者様情報</h3>
                        <ul class="rsrv_desc">
                            <li>
                                <p>今回の健診を受診される方の情報をご入力ください。</p>
                            </li>
                        </ul>
                        <table class="rsrv_tbl">
                            <tr>
                                <th class="required_item">
                                    <p>受診者様　ご氏名</p>
                                </th>
                                <td>
                                    <input type="text" name="name" id="name" onBlur="validateName(1);">
                                    <span id="nameErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>フリガナ</p>
                                </th>
                                <td>
                                    <input type="text" name="name_kana" id="name_kana" onBlur="validateNameKana(1);">
                                    <span id="nameKanaErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>生年月日</p>
                                </th>
                                <td>
                                    <span class="input_box"><input type="text" class="input_year" name="year" id="year" onBlur="validateBirth(1);">年</span>
                                    <span class="input_box"><input type="text" class="input_month" name="month" id="month" onBlur="validateBirth(1);">月</span>
                                    <span class="input_box"><input type="text" class="input_day" name="day" id="day" onBlur="validateBirth(1);">日</span>
                                    <span id="birthErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>年齢</p>
                                </th>
                                <td>
                                    <span class="input_box"><input type="text" class="input_old" name="age" id="age" onBlur="validateAge(1);">歳</span>
                                    <span id="ageErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>性別</p>
                                </th>
                                <td>
                                    <label for="male"><input type="radio" name="sex" id="male" value="0"><span class="input_desc_text">男</span></label>
                                    <label for="female"><input type="radio" name="sex" id="female" value="1"><span class="input_desc_text">女</span></label>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>電話番号１</p>
                                </th>
                                <td>
                                    <input type="text" class="input_year" name="tel01_1" id="tel01_1" onBlur="validateTel01(1)">-&nbsp;<input type="text" class="input_year" name="tel01_2" id="tel01_2" onBlur="validateTel01(1)">-&nbsp;<input type="text" class="input_year" name="tel01_3" id="tel01_3" onBlur="validateTel01(1)">
                                    <span id="tel01ErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>電話番号２</p>
                                </th>
                                <td>
                                    <input type="text" class="input_year" name="tel02_1" id="tel02_1" onBlur="validateTel02(1)">-&nbsp;<input type="text" class="input_year" name="tel02_2" id="tel02_2" onBlur="validateTel02(1)">-&nbsp;<input type="text" class="input_year" name="tel02_3" id="tel02_3" onBlur="validateTel02(1)">
                                    <span class="input_box">※電話番号１に繋がらないときの連絡先</span></br>
                                    <span id="tel02ErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>メールアドレス</p>
                                </th>
                                <td>
                                    <input type="text" id="email" name="email" onBlur="validateEmail(1);">
                                    <span id="emailErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>住所</p>
                                </th>
                                <td>
                                    <span class="input_box">郵便番号<input type="text" class="input_postalcode" name="zip" id="zip" onBlur="validateZip(1)" onKeyUp="AjaxZip3.zip2addr(this, '', 'address', 'address');">※ハイフンなし</span>
                                    <span id="zipErrorMsg">
                                    </span>
                                    <input type="text" name="address" id="address">
                                    <span id="addressErrorMsg">
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>備考</p>
                                </th>
                                <td>
                                    <textarea name="note" id="" cols="50" rows="10"></textarea>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p class="rsrv_agreement">
                        <label for="agreement"><input type="checkbox" id="agreement">&nbsp;
                            <a href="{{url('/terms')}}" target="_blank">利用規約</a>、<a href="{{url('/privacypolicy')}}" target="_blank">プライバシーポリシー</a>を確認のうえ同意する</label>
                    </p>

                    <div class="rsrv_btn_box">
                        <p class="rsrv_back">
                            <button type="button" class="rsrv_back_btn">戻る</button>
                        </p>
                        <p class="rsrv_next">
                            <button type="button" class="rsrv_next_btn">入力情報を確認する</button>
                        </p>
                    </div>
                </section>
                {!! Form::close() !!}
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
{!! Form::open(array('url' => 'examinee/date', 'method' => 'post', 'id' => 'form_examinee_date')) !!}
{!! Form::close() !!}
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection
