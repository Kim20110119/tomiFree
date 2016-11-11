@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@include('front.facility.examinee.confirm.page_js')
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
            <li class="current"><span>入力情報確認</span></li>
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
                <h1 class="cmn_h2_01 mt10"><span class="spn01">入力情報確認</span></h1>
                <p class="rsrv-flow mt20"><img src="{{url('images/preferred','rsrv3-flow.png')}}" alt=""></p>

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
                </div>
                <section class="rsrv_form">
                    {!! Form::open(array('url' => 'examinee/complete', 'method' => 'post', 'id' => 'form_examinee_complete')) !!}
                    <div class="rsrv_date">
                        <h3 class="rsrv_ttl">健診希望日</h3>
                        <table class="rsrv_tbl">
                            <tr>
                                <th class="required_item">
                                    <p>第１希望</p>
                                </th>
                                <td>
                                    <p>{{$examinee['preferred_date_01']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>第２希望</p>
                                </th>
                                <td>
                                    <p>{{$examinee['preferred_date_02']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>第３希望</p>
                                </th>
                                <td>
                                    <p>{{$examinee['preferred_date_03']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>第４希望</p>
                                </th>
                                <td>
                                    <p>{{$examinee['preferred_date_04']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>第５希望</p>
                                </th>
                                <td>
                                    <p>{{$examinee['preferred_date_05']}}</p>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="rsrv_welbox">
                        <h3 class="rsrv_ttl">WELBOX会員名</h3>
                        <table class="rsrv_tbl">
                            <tr>
                                <th>
                                    <p>WELBOX会員名<br>（ご契約者様名）</p>
                                </th>
                                <td>
                                    <p>{{$examinee['ewel_name']}}</p>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="rsrv_examinee">
                        <h3 class="rsrv_ttl">受診者様情報</h3>
                        <table class="rsrv_tbl">
                            <tr>
                                <th class="required_item">
                                    <p>受診者様　ご氏名</p>
                                </th>
                                <td>
                                    <p>{{$examinee['name']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>フリガナ</p>
                                </th>
                                <td>
                                    <p>{{$examinee['name_kana']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>生年月日</p>
                                </th>
                                <td>
                                    <p><span>{{$examinee['year']}}&nbsp;年</span><span>{{$examinee['month']}}&nbsp;月</span><span>{{$examinee['day']}}&nbsp;日</span></p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>年齢</p>
                                </th>
                                <td>
                                    <p>{{$examinee['age']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>性別</p>
                                </th>
                                <td>
                                    <p>{{$master->getSexName($examinee['sex'])}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>電話番号１</p>
                                </th>
                                <td>
                                    <p>{{$examinee['tel01_1']}}-{{$examinee['tel01_2']}}-{{$examinee['tel01_3']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>電話番号２</p>
                                </th>
                                <td>
                                    @if ($examinee['tel02_1'] != '')
                                    <p>{{$examinee['tel02_1']}}-{{$examinee['tel02_2']}}-{{$examinee['tel02_3']}}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>メールアドレス</p>
                                </th>
                                <td>
                                    <p>{{$examinee['email']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th class="required_item">
                                    <p>郵便番号</p>
                                </th>
                                <td>
                                    <p>{{$examinee['zip']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>住所</p>
                                </th>
                                <td>
                                    <p>{{$examinee['address']}}</p>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <p>備考</p>
                                </th>
                                <td>
                                    <p class="input_textarea_pre">{{$examinee['note']}}</p>
                                </td>
                            </tr>
                        </table>
                    </div>
                    {!! Form::close() !!}
                    <p class="rsrv_agreement"><a href="{{url('/terms')}}" target="_blank">利用規約</a>、<a href="{{url('/privacypolicy')}}" target="_blank">プライバシーポリシー</a>を確認のうえ同意します</p>
                    <div class="rsrv_btn_box">
                        <p class="rsrv_back">
                            <button type="button" class="rsrv_back_btn">戻る</button>
                        </p>
                        <p class="rsrv_next">
                            <button type="button" class="rsrv_next_btn">上記内容にて送信する</button>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </section>
</article>
{!! Form::open(array('url' => 'examinee/input', 'method' => 'post', 'id' => 'form_examinee_input')) !!}
{!! Form::close() !!}
{!! Form::open(array('url' => '/menu', 'method' => 'post', 'id' => 'form_menu')) !!}
<input type="hidden" name="facility_number" value="{{$facility['facility_number']}}"/>
{!! Form::close() !!}
{!! Form::open(array('url' => '/menu/detail', 'method' => 'post', 'id' => 'form_menu_detail')) !!}
<input type="hidden" name="facility_number" value="{{$facility['facility_number']}}"/>
<input type="hidden" name="plan_id" value="{{$plan['plan_id']}}"/>
{!! Form::close() !!}
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection
