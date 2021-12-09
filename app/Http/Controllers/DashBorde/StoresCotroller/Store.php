<?php

namespace App\Http\Controllers\DashBorde\StoresCotroller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Support\Facades\Storage;

class Store extends Controller
{

  public function ratings()
{

  $query="SELECT S.image, S.name as name, AVG(R.rate) as avareg ,COUNT(R.ID) countrateing
   FROM stores as S , ratings as R WHERE R.ID=S.ID GROUP BY S.ID";
    $result=DB::select($query);



foreach ($result as$results) {
        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }


   //dd($result);


    return view('viewDashBorde.StoreView.All_Ratings_View')->with('data',$result);
}



    public function store_view()
    {

 

    	$query="SELECT S.ID, S.name,S.mobile,S.image,S.addres,C.name AS nameCA
FROM categorys as C, stores as S
WHERE C.ID = S.ID_categorys";
    	$result=DB::select($query);
    	//dd($result);

		foreach ($result as$results) {
        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }

      //dd($result);


         return view('viewDashBorde.StoreView.Store_view')->with('stores',$result);
    }




  public function cerate_view()
    {
    	      $query ="SELECT * FROM `categorys` WHERE 1";

      $result=DB::select($query);
      

      foreach ($result as$results) {


        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }

           return view('viewDashBorde.StoreView.Create_Store_View')->with('categorys',$result);
    }




public function creat(Request $request)
{

	$name=$request['store_name'];
	$phone=$request['phone'];
	$images=$request['filename'];

	$address=$request['address'];
	$id_catgury=$request['id_catgury'];


	  $path= 'images/';
   $nameImge=time()+rand(1,1000) . "." . $images->getClientOriginalExtension();

   Storage::put($path.$nameImge,file_get_contents($images));


    $te=$path.$nameImge;

 

   		// $query ="INSERT INTO stores(name,mobile,image,addres,ID_categorys)
     //    VALUES('$name','$phone','$te','$address',$id_catgury)";

     // 	$result=DB::INSERT($query);

$iw = DB::table('stores')->insertGetId(array('name' => $name,'mobile' => $phone,'image' => $te,'addres' =>  $address ,'ID_categorys' => $id_catgury));

    $insertGuery="INSERT INTO ratings(ID,person,rate)
      VALUES ('$iw','system',5);";

     DB::INSERT($insertGuery);
  

     return redirect('store/View');





}




public function update_view($id)
{

    	      $query ="SELECT * FROM `categorys` WHERE 1";

      $result=DB::select($query);

      foreach ($result as$results) {


        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }

 return view('viewDashBorde.StoreView.store_update_view')->with('id',$id)->with('categorys',$result);

}





public function update(Request $request)
{
	
		$id_update=$request['id_update'];

		$name=$request['store_name'];
	$phone=$request['phone'];
	$images=$request['filename'];

	$address=$request['address'];
	$id_catgury=$request['id_catgury'];


	  $path= 'images/';
   $nameImge=time()+rand(1,1000) . "." . $images->getClientOriginalExtension();

   Storage::put($path.$nameImge,file_get_contents($images));


    $te=$path.$nameImge;


$query="UPDATE stores
SET name = '$name' ,mobile= '$phone' ,image='images',addres = '$address',ID_categorys=$id_catgury
WHERE ID = $id_update";

$result=DB::UPDATE($query);
        //dd($result);

     return redirect('store/View');

}



public function delete($id_deleet)
{
  
$query="DELETE FROM stores WHERE ID=$id_deleet";


      DB::DELETE($query);
 
      
 return back();

}





}

