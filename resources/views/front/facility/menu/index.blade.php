@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.footer')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@include('front.facility.menu.page_js')
@include('front.facility.menu.paging')
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
            <li class="current"><span>{{$facility['name']}}のメニュー</span></li>
            <input type="hidden" id="pref_code" name="pref_code" value="{{$facility['prefecture']}}"/>
            <input type="hidden" id="city_code" name="city_code" value="{{$facility['city']}}"/>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<article>
    {!! Form::open(array('url' => '/menu/detail', 'method' => 'post', 'id' => 'form_menu_detail')) !!}
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
                    <p class="left active"><a href="javascript:viod(0)"><i class="fa fa-list-ul" aria-hidden="true"></i> メニュー</a></p>
                    <p class="right"><a href="javascript:viod(0)" id="access"><i class="fa fa-map-marker" aria-hidden="true"></i> 施設情報・アクセス</a></p>
                </div>
                <h2 class="cmn_h3_01 mt20">健診コース一覧</h2>
                <div class="cmn_block13">
                    @if (count($plans) > 0)
                    <div class="cmn_block14">
                        <p class="ttl">並べ替え｜</p>
                        <ul class="ul02">
                            <li @if ($order_by == 'created_at') class="active" @endif><a href="javascript:void(0)" id="order_create">新着順</a></li>
                            <li @if ($order_by == 'reserve_count') class="active" @endif><a href="javascript:void(0)" id="order_reserve">予約数順</a></li>
                            <li @if ($order_by == 'after_price' && $sort == 'asc') class="active" @endif><a href="javascript:void(0)" id="order_price_asc">安い順</a></li>
                            <li @if ($order_by == 'after_price' && $sort == 'desc') class="active" @endif><a href="javascript:void(0)" id="order_price_desc">高い順</a></li>
                        </ul>
                    </div>
                    @else
                    <div class="cmn_block15">
                        この医療施設には健診コースはまだ登録されてません
                    </div>
                    @endif
                    @foreach($plans as $plan)
                    <div class="cmn_block15">
                        <ul class="cmn_ul01 cf">
                            <li class="li{{$plan['course']}}">{{$master->getInspectionCourseName($plan['course'])}}</li>
                        </ul>
                        <div class="cmn_block16 mt20 cf">
                            <div class="left">
                                <h3 class="cmn_h3_02">{{$plan['name']}}</h3>
                                <div class="cmn_block17 mt20 cf">
                                    <p class="cmn_block17_left">
                                        @if($plan['image'] == '')
                                        <img src="{{url('images/upload/plan/'.$plan['course'],'plan_noimage.jpg')}}" width="210" height="150" alt="プラン画像">
                                        @else
                                        <img src="{{url('images/upload/'.$facility['number'].'/plan/'.$plan['plan_id'],$plan['image'])}}" width="210" height="150" alt="プラン画像">
                                        @endif
                                    </p>
                                    <div class="cmn_block17_right">
                                        <p class="fs14">{{$common->strRound($plan['description'],120)}}</p>
                                        <ul class="cmn_ul02 mt5">
                                            @foreach($master->getCourseItems($plan['course']) as $item)
                                            <li>{{$item}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="right">
                                <div class="txt01">
                                    <p class="txt01_1">{{number_format($plan['before_price'])}}<span>円</span></p>
                                    <p class="txt01_2">{{number_format($plan['after_price'])}}<span>円（税込）</span></p>
                                </div>
                                <p class="lnk01"><a class="cmn_lnk04" href="javascript:viod(0)" data-plan="{{$plan['plan_id']}}">このコースの<br>健診を希望する</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if (count($plans) > 0)
                @yield('paging')
                @endif
            </div>
        </div>
    </section>
    <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['facility_number']}}"/>
    <input type="hidden" id="plan_id" name="plan_id" value=""/>
    {!! Form::close() !!}
    {!! Form::open(array('url' => 'menu', 'method' => 'post', 'id' => 'form_menu')) !!}
    <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['facility_number']}}"/>
    <input type="hidden" id="order_by" name="order_by" value="{{$order_by}}"/>
    <input type="hidden" id="sort" name="sort" value="{{$sort}}"/>
    {!! Form::close() !!}
    {!! Form::open(array('url' => 'access', 'method' => 'post', 'id' => 'form_access')) !!}
    <input type="hidden" id="facility_number" name="facility_number" value="{{$facility['facility_number']}}"/>
    {!! Form::close() !!}
</article>
<div id="gotop"><span><img src="{{url('images/common','pagetop.png')}}" alt="pagetop"></span></div>
@endsection
