@section('paging')
<div class="cmn_block07 mt15 cf">
    <p class="left"><span>{{$plans->total()}}</span>件中 <span>@if($plans->currentPage() == 1){{ $plans->currentPage() }}@else{{ ($plans->currentPage()-1)*$plans->perPage()+1 }}@endif～@if($plans->currentPage() == $plans->lastPage()){{ $plans->total() }}@else{{ $plans->currentPage()*$plans->perPage() }}@endif</span>件を表示</p>
    <div class="right">
        {!! $plans->appends(['facility_number'=>$facility['facility_number'], 'order_by'=>$order_by, 'sort'=>$sort])->render() !!}
    </div>
</div>
@endsection
