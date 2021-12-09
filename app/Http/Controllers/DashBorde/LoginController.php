<?php

namespace App\Http\Controllers\DashBorde;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;





class LoginController extends Controller{



    public function LoginView(){
           return view('viewDashBorde.LoginAdmin');
    }



    public function Aute(Request $request){
    	    $emailr = 'admin@gamil.com';
            $passr = '123456';



		 //  if (Auth::attempt(array('email' => $emailr, 'password' => $passr))){
			//    // return Redirect::intended('dashboard');
		 //  	 return view('viewDashBorde.Admin_DashBorde');
			// }




    	   $emailere=$request['email'];
    	   //$passworde=$request['password'];

    	  // echo $emailere;

    	     return view('viewDashBorde.Admin_DashBorde');

				// if(is_null($request['email'])){
				 
		  // 	     return view('viewDashBorde.Admin_DashBorde');
				
				// }else{
		  // 	   return redirect('Login/View'); 

				// }


    	// $emailere=$request['email'];
    	// $passworde=$request['password'];

    	// if ($emailere == $emailr && $passworde == $passr) {

     //        return view('viewDashBorde.Admin_DashBorde');

     //       }else{
     //       	return redirect('Login/View'); 
     //       }

    }




}
