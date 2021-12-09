@extends('layout.htmld_Layout')
@section('content')


<div style=" background-color:blue">
<h1 style="color:red">Create new catgury</h1>
</div>


<div style="margin: 20px">
  <form enctype="multipart/form-data" action="{{URL('categuty/creat')}}" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}" />
  <div >
    <div >
      <input type="text" class="form-control" name="categuryname" placeholder="categury name">
    </div>
    <br>
    <div>
       <input class="btn btn-primary" style="background-color:red" type="file" id="myFile" name="filename">
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>


@stop
  