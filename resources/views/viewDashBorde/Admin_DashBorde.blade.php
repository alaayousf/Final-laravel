@extends('layout.htmld_Layout')
@section('content')

<h1>this is the admin Dash Borde</h1>

<div style="text-align: center;">
  <form >

<!-- 
action="{{URL('Login/Aute')}}" method="get"
   
    -->
  <!-- <button type="submit" class="btn btn-primary">categuty</button>


 -->

  <a  class="btn btn-primary" href="{{URL('categuty/index')}}">categuty</a>


  <br>
  <br>

  <a  class="btn btn-primary" style="background-color: #FFD801" href="{{URL('store/View')}}">stors</a>

   
  <br>
  <br>

   <a  class="btn btn-primary" style="background-color: #f231f2"  href="{{URL('ratings')}}">see all ratings</a>
  



</form>


</div>


@stop
