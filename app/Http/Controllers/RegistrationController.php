<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Models\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illminate\Support\Facades;

class RegistrationController extends Controller

{

 public function main(){
           if(empty($_COOKIE['user'])){
               return view('index');
						        }
    return view('1',['user'=>$_COOKIE['user']]);
			        }

 public function login(RegisterUserRequest $request)
    {

          $validated=$request->validated();

            $auth=Auth::attempt([
             'email'=>$validated['email'],
                  'password'=>$validated['password']
		          ]);

	            if($auth){
	                $validated = $request->validated();

	          $user = new User();
            $name = $user->email = $validated['email'];
                $name2 = DB::table('users')->where('name',"$name")->first();
              $name_fin=$name2->name;

	            $session=new Session();
	           $session->set('user',$name_fin);

               return view('1',['user'=>"$name_fin"]);

		            }


          return view('index',['data'=>'Some data is incorrect']);



       }

	        public function register(RegisterUserRequest $request)
			    {

          $validated = $request->validated();


           $user = new User();
           $user->email = $validated['email'];
            $user->password = Hash::make($validated['password']);
         $user->name = $validated['email'];
            $user->save();

          $auth = Auth::attempt([
  		  'email' => $validated['email'],
            'password' => $validated['password']
	            ]);

	          return view('1',['user'=>'email']);
			        }


	        public function show(){
			        die("Thies is show");
				    }
	        public function destroy(){
			        die("This is destroy");

				    }

	        public function logout(){


		      $cookie = new Session();
	        $cookie->unsetCookie('user');
		       return redirect('/');


			    }


}

?>

