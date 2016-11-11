@extends('common.layout')
@include('common.head')
@include('common.header')
@include('common.javascript')
@include('front.facility.common.common_js')
@include('front.facility.common.top')
@inject('master', 'App\Common\Master')
@inject('common', 'App\Common\Common')
{{-- */$holidays = $common->commaExplode($facility['holiday'])/* --}}
{{-- */$payments = $common->commaExplode($facility['payment'])/* --}}
@section('content')
<div class="cmn_block23">
    <div class="map">
        {{-- */$map_address = $master->getPrefectureName($facility['prefecture']).$facility['city'].$facility['town']/* --}}
        <iframe src="{{ url('/print_map', $map_address) }}" width="700" height="450" frameborder="0" style="border:0" ></iframe>
    </div>

    <div class="block01">
        <h1 class="cmn_h2_02">{{$facility['name']}}</h1>
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
    <p class="prnt_button"><a class="cmn_lnk07" href="#" onclick="window.print(); return false;">印刷する</a></p>
    <p class="prnt_close"><a href="#" onClick="window.close(); return false;"><i class="fa fa-times" aria-hidden="true"></i></a></p>
</div>
@endsection
