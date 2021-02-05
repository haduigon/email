<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailData;
use Illuminate\Support\Facades\DB;

class EmailDataController extends Controller
{
    public function track(Request $request){


$validated[]=$request->get('code');
$validated[]=$request->get('name');
if($validated[0]=='open'&$validated[1]!==null){

$emaildata= new EmailData();
$countOpen=DB::table('email_data')->get('countOpen');
$countOpen=$countOpen[0]->countOpen;
$countOpen++;
var_dump ($validated);
var_dump ($countOpen);
echo date(DATE_ATOM, time());
}else{
echo "Nothing is there";
}

}
}
