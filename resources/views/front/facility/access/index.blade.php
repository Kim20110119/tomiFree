@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@include('front.facility.access.page_js')
@inject('master', 'App\Common\Master')
@inject('common', 'App\Common\Common')
@section('content')
@yield('header')
{{-- */$holidays = $common->commaExplode($facility['holiday'])/* --}}
{{-- */$payments = $common->commaExplode($facility['payment'])/* --}}
{{-- */$images = $common->commaExplode($facility['image'])/* --}}
<div id="breads">
    <div class="wrapper">
        <div class="ul01 cf">
            @yield('top')
            {!! Form::open(array('url' => 'searches', 'method' => 'post', 'id' => 'form_head')) !!}
            <li class="lnk"><a href="javascript:viod(0)" id="pref" data-pref="{{$facility['prefecture']}}">{{$master->getPrefectureName($facility['prefecture'])}}</a></li>
            <li class="lnk"><a href="javascript:viod(0)" id="city" data-city="{{$facility['city']}}">{{$facility['city']}}</a></li>
            <li class="current"><span>{{$facility['name']}}の施設情報・アクセス</span></li>
            <input type="hidden" id="pref_code" name="pref_code" value="{{$facility['prefecture']}}"/>
            <input type="hidden" id="city_code" name="city_code" value="{{$facility['city']}}"/>
            {!! Form::close() !!}
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
                            <p class="cmn_block10_right">{{$facility['access']}}</p>
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
                        @if ($facility['min_price'] <> 0 & $facility['max_price'] <> 0)
                        <p class="txt01">@if ($facility['min_price'] <> 0){{number_format($facility['min_price'])}}<span>円</span>@endif&nbsp;～&nbsp;@if ($facility['max_price'] <> 0){{number_format($facility['max_price'])}}<span>円（税込）</span>@endif</p>
                        @else
                        <p class=""></p>
                        @endif
                    </div>
                </div>
                <div class="cmn_block12 cf">
                    <p class="left"><a href="javascript:viod(0)" id="menu"><i class="fa fa-list-ul" aria-hidden="true"></i> メニュー</a></p>
                    <p class="right active"><a href="javascript:viod(0)"><i class="fa fa-map-marker" aria-hidden="true"></i> 施設情報・アクセス</a></p>
                </div>

                <h2 class="cmn_h2_02 mt20">{{$facility['introduce_title']}}</h2>
                <div class="cmn_block21 cf close">
                    <div id="carousel">
                        @if($facility['image'] <> '')
                        <p id="large_img"><img src="{{url('images/upload/'.$facility['number'].'/facility',$images[0])}}" alt="医療施設画像"></p>
                        @else
                        <p id="large_img"><img src="{{url('images/upload/facility','facility_noimage.jpg')}}" alt="医療施設画像"></p>
                        @endif
                        <div id="small_img">
                            <ul class="slides cf">
                                @if($facility['image'] <> '')
                                @foreach($images as $image)
                                <li><img src="{{url('images/upload/'.$facility['number'].'/facility',$image)}}" alt="医療施設画像"></li>
                                @endforeach
                                @else
                                <li><img src="{{url('images/upload/facility','facility_noimage.jpg')}}" alt="医療施設画像"></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <p>{{$facility['introduce_text']}}</p>
                    @if (strlen($facility['introduce_text']) > 2000)
                    <p id="close_text" class="open_close_button"><i class="fa fa-angle-up" aria-hidden="true"></i> 閉じる</p>
                    <div id="open_text" class="close">
                        <p id="open_text_button" class="open_close_button"><i class="fa fa-angle-down" aria-hidden="true"></i> 続きを見る</p>
                    </div>
                    @endif
                </div>

                <h2 class="cmn_h2_02 mt40">{{$facility['name']}}の施設情報・アクセス</h2>

                <div class="cmn_block22 mt20 cf">
                    <div class="left">
                        <div class="map">
                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3242.9609701441436!2d139.7408939152574!3d35.62868868020661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z5p2x5Lqs6YO95riv5Yy65Y2XMi01LTMg44Kq44Oq44OD44Kv44K55ZOB5bed44OT44OrMkY!5e0!3m2!1sja!2sjp!4v1476256657661" width="420" height="280" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                            {{-- */$map_address = $master->getPrefectureName($facility['prefecture']).$facility['city'].$facility['town']/* --}}
                            <iframe src="{{ url('/access_map', $map_address) }}" width="420" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <p class="mt20">
                            <a class="cmn_lnk06" href="javascript:window.open('map', 'mywindow1', 'width=800, height=600, menubar=no, toolbar=no, scrollbars=yes');">
                                <span>アクセスを印刷する</span>
                            </a>
                        </p>
                    </div>
                    <div class="right">
                        <table class="cmn_table03">
                            <tr>
                                <th>住所</th>
                                <td>{{$master->getPrefectureName($facility['prefecture'])}}&nbsp;{{$facility['city']}}&nbsp;{{$facility['town']}}&nbsp;{{$facility['address']}}</br>{{$facility['building']}}&nbsp;</td>
                            </tr>
                            <tr>
                                <th>アクセス</th>
                                <td>{{$facility['access']}}</td>
                            </tr>
                            <tr>
                                <th>最寄り駅</th>
                                <td>{{$facility['station']}}</td>
                            </tr>
                            <tr>
                                <th>駐車場</th>
                                <td>{{$master->getParkingFlag($facility['parking_flag'])}}</td>
                            </tr>
                            <tr>
                                <th>支払い方法</th>
                                <td>
                                    @foreach($payments as $payment)
                                    {{$master->getPaymentName($payment)}}
                                    @if ($payment != end($payments)) / @endif
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <th>診療時間</th>
                                <td>{{$common->timeFormat($facility['start_time'])}}～{{$common->timeFormat($facility['end_time'])}}</td>
                            </tr>
                            <tr>
                                <th>休診日</th>
                                <td>
                                    @foreach($holidays as $holiday)
                                    {{$master->getBreakDayName($holiday)}}
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                {!! Form::open(array('url' => 'menu', 'method' => 'post', 'id' => 'form_menu')) !!}
                @if (count($facility_browse_historys) > 0)
                <p class="mt40 mb40"><a class="cmn_lnk05" href="javascript:viod(0)">この医療施設で健診を希望する</a></p>
                @endif
                <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['facility_number']}}"/>
                {!! Form::close() !!}
                @if (count($facility_browse_historys) > 0)
                <h2 class="cmn_h3_01 mt60">この医療施設を見た人がよく見ている医療施設</h2>
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
                        @if($facility_browse_history['image'] <> '')
                        {{-- */$ohter_images = $common->commaExplode($facility_browse_history['image'])/* --}}
                        <div class="left"><p><img src="{{url('images/upload/'.$facility_browse_history['number'].'/facility',$ohter_images[0])}}" alt="医療施設画像"></p></div>
                        @else
                        <div class="left"><p><img src="{{url('images/upload/facility','facility_noimage.jpg')}}" alt="医療施設画像"></p></div>
                        @endif
                        <div class="center">
                            <div class="block02">
                                <p class="block02_left"><img src="./images/list/icon07.png" alt="電車"></p>
                                <p class="block02_right">{{$facility_browse_history['station']}}</p>
                            </div>
                            <div class="block02 mt10">
                                <p class="block02_left"><img src="./images/list/icon08.png" alt="住所"></p>
                                <p class="block02_right">{{$master->getPrefectureName($facility_browse_history['prefecture'])}}&nbsp;{{$facility_browse_history['city']}}&nbsp;{{$facility_browse_history['town']}}&nbsp;{{$facility_browse_history['address']}}&nbsp;{{$facility_browse_history['building']}}&nbsp;</p>
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
