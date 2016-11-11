@section('paging')
<div class="cmn_block07 mt15 cf">
    <p class="left"><span>{{$facilitys->total()}}</span>件中 <span>@if($facilitys->currentPage() == 1){{ $facilitys->currentPage() }}@else{{ ($facilitys->currentPage()-1)*$facilitys->perPage()+1 }}@endif～@if($facilitys->currentPage() == $facilitys->lastPage()){{ $facilitys->total() }}@else{{ $facilitys->currentPage()*$facilitys->perPage() }}@endif</span>件を表示</p>
    <div class="right">
        {!! $facilitys->appends(['pref_code'=>$pref_code,'city_code'=>$city_code,'city_name'=>$city_name,'course_code'=>$course_code, 'order_by'=>$order_by, 'sort'=>$sort])->render() !!}
    </div>
</div>
@endsection
