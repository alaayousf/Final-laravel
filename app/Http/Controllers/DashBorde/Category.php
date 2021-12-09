<?php

namespace App\Http\Controllers\DashBorde;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use Illuminate\Support\Facades\Storage;

class Category extends Controller
{



	 public function category_View(){
           return view('viewDashBorde.categuty_View');
    }


   public function category_creat_View(){

           return view('viewDashBorde.Categury_creat_view');
    }


 public function category_update_View(Request $request)
 {
   $id=$request['id'];

    return view('viewDashBorde.Categury_update_view')->with('id',$id);
 }





   public function creat(Request $request)
   {

   $names=$request['categuryname'];
   $images=$request->file('filename');

   $path= 'images/';

   
   $name=time()+rand(1,1000) . "." . $images->getClientOriginalExtension();
   Storage::put($path.$name,file_get_contents($images));


    $te=$path.$name;



   		$query ="INSERT INTO categorys(name,image) VALUES('$names','$te')";

     	DB::statement($query);


    return redirect('categuty/index');
   }




   public function index()
   {

      $query ="SELECT * FROM `categorys` WHERE 1";

      $result=DB::select($query);


      foreach ($result as$results) {
        $image_linke =Storage::url($results->image);
        $results->image= $image_linke;

      }

     // dd($result);

    //$array=[0,1,2,3,4,5];

    //dd($result);
      return view('viewDashBorde.categuty_View')->with('categorys',$result);


   }

public function update(Request $request)
{
  
   $names=$request['categuryname'];
   $id=$request['id'];
   $images=$request->file('filename');

   $path= 'images/';
   $name=time()+rand(1,1000) . "." . $images->getClientOriginalExtension();

   Storage::put($path.$name,file_get_contents($images));


    $te=$path.$name;



      
      $query="UPDATE categorys
      SET name = '$names', image= '$te'
      WHERE ID = $id";

      DB::UPDATE($query);


    return redirect('categuty/index');

}


public function delete($id)
{

      $query="DELETE FROM categorys WHERE ID=$id;";

      DB::DELETE($query);



      
 return back();
}


}
