@extends('layout.htmld_Layout')
@section('content')


<div style=" background-color:green">
<h1 style="color:red">Dash bord catgury</h1>
 
</div>


<a class="btn btn-primary" style="background-color:green" href="{{URL('categuty/create/View')}}">Creat new categury</a>





<br>

<!-- <img  style="width:100px;height:200px" src="file:\\\C:\Users\HP15\Desktop\FinalLaravel/storage/app/images/1638521947.png" >
 -->

@foreach($categorys as $category)
<br>
<div style="width:100;height: 150; background-color:gray">
<div>
	{{$category->name}}   
</div>


<form action="{{URL('categuty/update/View')}}" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}" />

  <button type="submit" name="id" value="{{$category->ID}}" style="background-color: yellow" >update</button>
 
	
</form>

<a style="color: red" href="{{URL('categuty/delete').'/'.$category->ID}}">deleet</a>

 
<br>	
<img src="{{$category->image}}">


  </div>	



@endforeach

  



@stop
