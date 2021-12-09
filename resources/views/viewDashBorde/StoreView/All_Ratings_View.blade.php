@extends('layout.htmld_Layout')
@section('content')

<h1>this is the All_Ratings_View</h1>


@foreach($data as $store)

 <div style="background-color:#ffc220">

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

<br>


@endforeach



@stop
