@extends('layout.htmld_Layout')
@section('content')

 <div>this is Guest_view</div>

@foreach($data as $store)

 <div style="background-color:#ffc220">

<div>
    <div>
   name Store : {{$store->name}}
  </div>
  
  <div>
  <img src="{{$store->image}}">
  </div>

    <div>
  Avareg Ratings : {{$store->avareg}}
  </div>

    <div>
  nmber of Ratings : {{$store->countrateing}}
  </div>
</div>


   <a style="background-color: #041f41" class="btn btn-primary" href="{{URL('ratings/Detalse').'/'.$store->ID}}">Rateings</a>

</div>

<br>


@endforeach



@stop