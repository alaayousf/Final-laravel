@extends('layout.htmld_Layout')
@section('content')

<h1 style="text-align: center">this is Store view</h1>


<a class="btn btn-primary" style="background-color:green" href="{{URL('store/create/View')}}">Creat new Store</a>

<br>




@foreach($stores as $store)
<br>
 
<div style="height: 150px ; background-color:#800080">
 
 <div style="color: #FFFF">
name:	{{$store->name}}   
</div>

 
<div>
<img src="	{{$store->image}} ">
	
</div>

<div style="color: #FFFF">
mobile numper:	{{$store->mobile}} 
	
</div>

 

 <div style="color: #FFFF">
CATEGURY:	{{$store->nameCA}} 
	
</div>


<!-- update Store -->

<div>
 

 <a style="color: yellow" href="{{URL('store/update/View').'/'.$store->ID}}">update</a>

</div>


<div>
	
 <a style="color: red" href="{{URL('store/delete').'/'.$store->ID}}">DELEET</a>

</div> 
 
</div>




@endforeach




@stop
