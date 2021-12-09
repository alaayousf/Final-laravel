@extends('layout.htmld_Layout')
@section('content')



<form action="{{URL('Login/Aute')}}" method="get">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

 <!--  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="numper" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 -->
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br>
<div>
  <a style="background-color: #041f41" class="btn btn-primary" href="{{URL('Login/asGuest')}}">As Guest</a>
</div>

@stop