@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@include('front.facility.menu.detail.page_js')
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
            <input type="hidden" id="pref_code" name="pref_code" value="{{$facility['prefecture']}}"/>
            <input type="hidden" id="city_code" name="city_code" value="{{$facility['city']}}"/>
            {!! Form::close() !!}
            {!! Form::open(array('url' => 'menu', 'method' => 'post', 'id' => 'form_menu')) !!}
            <li class="lnk"><a href="javascript:viod(0)" id="facility" data-city="{{$facility['number']}}">{{$facility['name']}}</a></li>
            <input type="hidden" id="pref_code" name="pref_code" value="{{$facility['prefecture']}}"/>
            <input type="hidden" id="city_code" name="city_code" value="{{$facility['city']}}"/>
            <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['number']}}"/>
            {!! Form::close() !!}
            {!! Form::open(array('url' => 'access', 'method' => 'post', 'id' => 'form_access')) !!}
            <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['number']}}"/>
            {!! Form::close() !!}
            <li class="current"><span>{{$common->strRound($plan['name'],40)}}</span></li>
        </div>
    </div>
</div>
<article>
    <section id="menu01">
        <div class="wrapper">
            <div class="cmn_block08">
                <p class="fs14">{{$facility['catchphrase']}}</p>
                <h1 class="cmn_h2_01 mt10"><span class="spn01">{{$facility['name']}}</span><span class="spn02">（{{$facility['name_kana']}}）</span></h1>
                <div class="cmn_block09 cf">
                    @if($facility['image'] <> '')
                    <div class="left"><p><img src="{{url('images/upload/'.$facility['number'].'/facility',$images[0])}}" alt="医療施設画像"></p></div>
                    @else
                    <div class="left"><p><img src="{{url('images/upload/facility','facility_noimage.jpg')}}" alt="医療施設画像"></p></div>
                    @endif
                    <div class="center">
                        <div class="cmn_block10">
                            <p class="cmn_block10_left"><img src="{{url('images/list','icon07.png')}}" alt="電車"></p>
                            <p class="cmn_block10_right">{{$facility['station']}}</p>
                        </div>
                        <div class="cmn_block10 mt20">
                            <p class="cmn_block10_left"><img src="{{url('images/list','icon08.png')}}" alt="住所"></p>
                            <p class="cmn_block10_right">{{$master->getPrefectureName($facility['prefecture'])}}&nbsp;{{$facility['city']}}&nbsp;{{$facility['town']}}&nbsp;{{$facility['address']}}</br>{{$facility['building']}}&nbsp;</p>
                        </div>
                        <div class="cmn_block11 mt20">
                            <p class="cmn_block11_left">診療時間</p>
                            <p class="cmn_block11_right">{{$facility['start_time']}}～{{$facility['end_time']}}</p>
                        </div>
                        <div class="cmn_block11 mt20">
                            <p class="cmn_block11_left">休診日</p>
                            <p class="cmn_block11_right">
                                @foreach($holidays as $holiday)
                                {{$master->getBreakDayName($holiday)}}
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="right">
                        <p class="txt01">{{number_format($facility['min_price'])}}<span>円</span> ～ <br>{{number_format($facility['max_price'])}}<span>円（税込）</span></p>

                    </div>
                </div>
                <div class="cmn_block12 cf">
                    <p class="left"><a href="javascript:viod(0)" id="menu"><i class="fa fa-list-ul" aria-hidden="true"></i> メニュー</a></p>
                    <p class="right"><a href="javascript:viod(0)" id="access"><i class="fa fa-map-marker" aria-hidden="true"></i> 施設情報・アクセス</a></p>
                </div>
                {!! Form::open(array('url' => 'examinee/date', 'method' => 'post', 'id' => 'form_examinee_date')) !!}
                <div class="cmn_block13 mt20">
                    <div class="cmn_block18 cf">
                        <div class="left">
                            @if($plan['image'] == '')
                            <p><img src="{{url('images/upload/plan/'.$plan['course'],'plan_noimage.jpg')}}" width="210" height="150" alt="プラン画像"></p>
                            @else
                            <p><img src="{{url('images/upload/'.$facility['number'].'/plan/'.$plan['plan_id'],$plan['image'])}}" width="210" height="150" alt="プラン画像"></p>
                            @endif
                        </div>
                        <div class="right">
                            <ul class="cmn_ul01_2 cf">
                                <li class="li{{$plan['course']}}">{{$master->getInspectionCourseName($plan['course'])}}</li>
                            </ul>
                            <h2 class="cmn_h1_01 mt15">{{$common->strRound($plan['name'],40)}}</h2>
                            <p class="cmn_txt02 mt5"><span class="span01">{{number_format($plan['before_price'])}}</span><span class="span02">円</span><i class="fa fa-caret-right" aria-hidden="true"></i><span class="span03">{{number_format($plan['after_price'])}}</span><span class="span04">円（税込）</span></p>
                        </div>
                    </div>
                </div>
                <p class="mt40"><a class="cmn_lnk05" href="javascript:viod(0)">このコースの健診を希望する</a></p>
                <table class="cmn_table01 mt40">
                    <tr>
                        <th>このプランの説明</th>
                        <td>{{$plan['description']}}</td>
                    </tr>
                    <tr>
                        <th>検査項目</th>
                        <td>
                            <ul class="cmn_ul02">
                                @foreach($master->getCourseItems($plan['course']) as $item)
                                <li>{{$item}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>追加検査項目</th>
                        <td>
                            <ul class="cmn_ul02">
                                <li>{{$plan['add_item']}}</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th>受付期間</th>
                        <td>
                            <p>
                                @foreach($plan_reception_periods as $plan_reception_period)
                                {{$common->dataFormatByYYYYMMDD($plan_reception_period['plan_reception_start'])}} 〜 <span class="cmn_red01">{{$common->dataFormatByYYYYMMDD($plan_reception_period['plan_reception_end'])}}</span>
                                </br>
                                @endforeach
                            </p>
                            <div class="cmn_table02 mt10">
                                <div class="tr">
                                    @foreach($master->getReceptionPeriodList() as $receptionPeriod)
                                    <p class="th">{{$receptionPeriod}}月</p>
                                    @endforeach
                                </div>
                                <div class="tr">
                                    @foreach($month_flag as $month)
                                    @if ($month == "1")
                                    <p class="td"><img src="{{url('images/list','icon21.png')}}" alt="×"></p>
                                    @else
                                    <p class="td"><img src="{{url('images/list','icon20.png')}}" alt="×"></p>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <ul class="cmn_ul03 mt10">
                                <li>健診コース受付は医療施設の状況により変更される場合がございます。</li>
                                <li>ご希望の日時が空いてない場合などは、お電話またはお問合せフォームにてご相談ください。</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <p class="mt40 mb40"><a class="cmn_lnk05" href="javascript:viod(0)">このコースの健診を希望する</a></p>
                <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['facility_number']}}"/>
                <input type="hidden" id="plan_id" name="plan_id" value="{{$plan['plan_id']}}"/>
                {!! Form::close() !!}
                {!! Form::open(array('url' => '/menu/detail', 'method' => 'post', 'id' => 'form_menu_detail')) !!}
                @if (count($other_plans) > 0)
                <h2 class="cmn_h3_01 mt20">{{$facility['name']}}　その他のプラン</h2>
                @endif
                <div class="cmn_block19">
                    @foreach($other_plans as $other_plan)
                    <a href="javascript:viod(0)" data-plan="{{$other_plan['plan_id']}}" class="block01 cf">
                        <div class="left">
                            @if($other_plan['image'] == '')
                            <p><img src="{{url('images/upload/plan/'.$other_plan['course'],'plan_noimage.jpg')}}" width="210" height="150" alt="プラン画像"></p>
                            @else
                            <p><img src="{{url('images/upload/'.$facility['number'].'/plan/'.$other_plan['plan_id'],$other_plan['image'])}}" width="210" height="150" alt="プラン画像"></p>
                            @endif
                        </div>
                        <div class="right">
                            <ul class="cmn_ul01_2 cf">
                                {{-- */$courses = $common->commaExplode($other_plan['course'])/* --}}
                                @foreach($courses as $course)
                                <li class="li{{$course}}">{{$master->getInspectionCourseName($course)}}</li>
                                @endforeach
                            </ul>
                            <div class="block02 mt20 cf">
                                <div class="block02_left">
                                    <h3 class="cmn_h3_02">{{$common->strRound($other_plan['name'],70)}}</h3>
                                </div>
                                <div class="block02_right">
                                    <p class="cmn_txt03">
                                        <span class="span01">{{number_format($other_plan['before_price'])}}</span>
                                        <span class="span02">円</span><br>
                                        <span class="span03">{{number_format($other_plan['after_price'])}}</span>
                                        <span class="span04">円（税込）</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
                <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['facility_number']}}"/>
                <input type="hidden" id="other_plan_id" name="plan_id" value=""/>
                {!! Form::close() !!}
                @if (count($facility_browse_historys) > 0)
                <h2 class="cmn_h3_01 mt60">このプランを見た人がよく見ている医療施設</h2>
                @endif
                @foreach($facility_browse_historys as $facility_browse_history)
                <div class="cmn_block20">
                    <ul class="cmn_ul01_2 cf">
                        {{-- */$courses = $common->commaExplode($facility_browse_history['course'])/* --}}
                        @foreach($courses as $course)
                        <li class="li{{$course}}">{{$master->getInspectionCourseName($course)}}</li>
                        @endforeach
                    </ul>
                    <div class="block01 cf">
                        {{-- */$ohter_images = $common->commaExplode($facility_browse_history['image'])/* --}}
                        @if($facility_browse_history['image'] <> '')
                        <div class="left"><p><img src="{{url('images/upload/'.$facility_browse_history['number'].'/facility',$ohter_images[0])}}" alt="医療施設画像"></p></div>
                        @else
                        <div class="left"><p><img src="{{url('images/upload/facility','facility_noimage.jpg')}}" alt="医療施設画像"></p></div>
                        @endif
                        <div class="center">
                            <div class="block02">
                                <p class="block02_left"><img src="{{url('images/list','icon07.png')}}" alt="電車"></p>
                                <p class="block02_right">{{$facility_browse_history['station']}}</p>
                            </div>
                            <div class="block02 mt10">
                                <p class="block02_left"><img src="{{url('images/list','icon08.png')}}" alt="住所"></p>
                                <p class="block02_right">{{$master->getPrefectureName($facility_browse_history['prefecture'])}}&nbsp;{{$facility_browse_history['city']}}&nbsp;{{$facility_browse_history['town']}}</br>{{$facility_browse_history['address']}}&nbsp;{{$facility_browse_history['building']}}&nbsp;</p>
                            </div>
                            <div class="block03 mt10">
                                <p class="block03_left">診療時間</p>
                                <p class="block03_right">{{$facility_browse_history['start_time']}}～{{$facility_browse_history['end_time']}}</p>
                            </div>
                            <div class="block03 mt10">
                                <p class="block03_left">休診日</p>
                                <p class="block03_right">
                                    {{-- */$history_holidays = $common->commaExplode($facility_browse_history['holiday'])/* --}}
                                    @foreach($history_holidays as $holiday)
                                    {{$master->getBreakDayName($holiday)}}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                        <div class="right">
                            <p>{{$facility_browse_history['catchphrase']}}</p>
                        </div>
                    </div>
                    <div class="block04">
                        @if ($facility_browse_history['max_price'] <> 0 & $facility_browse_history['max_price'] <> 0)
                        <p class="left">@if ($facility_browse_history['min_price'] <> 0){{number_format($facility_browse_history['min_price'])}}<span>円</span>@endif&nbsp;～&nbsp;@if ($facility_browse_history['max_price'] <> 0){{number_format($facility_browse_history['max_price'])}}<span>円（税込）</span>@endif</p>
                        @else
                        <p class=""></p>
                        @endif
                        <p class="right"><a class="cmn_lnk01" href="javascript:void(0)" data-number="{{$facility_browse_history['number']}}">詳細を見る</a></p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</article>
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection
