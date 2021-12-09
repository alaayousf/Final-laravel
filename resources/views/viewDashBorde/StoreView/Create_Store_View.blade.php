@extends('layout.htmld_Layout')
@section('content')

<h1 style="text-align: center; background-color:green;color:#FFFFFF">Create Store</h1>


<!-- naem of store -->
<form class="col-auto my-1" enctype="multipart/form-data" action="{{URL('store/creat')}}" method="POST">

       <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <div class="form-group">
    <label for="exampleInputEmail1">name store</label>
    <input type="name" class="form-control" name="store_name"  placeholder="Store name">
 
  </div> 



<!-- mobile numper -->
<label for="phone">Enter your phone number:</label>
<br>
<input   id="phone" class="form-control"  name="phone">


<!-- Categuruy chose -->
 <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Categury</label>
      <select name="id_catgury" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option> 
        @foreach($categorys as $category)

        <option value="{{$category->ID}}">{{$category->name}} </option>
 
       @endforeach

      </select>
    </div>  


<br>
<!-- image chose -->
    <div>
       <input class="btn btn-primary" style="background-color:red" type="file" id="myFile" name="filename">
    </div>


<!--  address  -->

    <br>

    <div class="form-group">
    <label>address store</label>
    <input type="name" class="form-control" name="address"  placeholder="Store address">
 
  </div> 



<!-- submit button  -->
 <button type="submit" class="btn btn-primary">Sign in</button>
      
 

</form>

@stop
