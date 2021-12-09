<?php

namespace App\Http\Controllers\DashBorde;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class FirstContreoller extends Controller
{


    

    public function create(){
    	return view('list_categury_View');
    }



     public function store(){
     	$query ="INSERT INTO stores(name,mobile,image,addres,ID_categorys) VALUES('stor5','05933333','http://im3','gaza',1)";

     	DB::statement($query);


    return redirect('listcategury'); 

       }
       


}
