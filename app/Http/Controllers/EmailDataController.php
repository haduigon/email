<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailDataController extends Controller
{
    public function track(Request $request){


$validated=$request->get('code');
if($validated!==null){
var_dump ($validated);
}else{
echo "Nothing is there";
}

}
}
