<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
	    use HasFactory;

	        public function __construct()
			    {

				            if($_COOKIE['session_id'] ?? []){
						                session_id($_COOKIE['session_id']);
								            session_start();
								        }else{

										            $sessionId=md5(rand(1,100000) . md5(time()));
											                session_id($sessionId);
											                session_start();
													            setcookie('session_id' , $sessionId, time() + 2400,'/');

													        }
					        }

	        public function set(string $key,$data)
			    {
				            setcookie($key , $data, time() + 2400,'/');
					            
					        }

	        public function get(string $key, $default=null){

			        return $_SESSION[$key] ?? $default;
				    }

	        public function unsetCookie(string $key){
			        unset($_COOKIE[$key]);
				        setcookie($key, null, -1, '/');

				    }


}

