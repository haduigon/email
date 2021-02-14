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

$countOpen=EmailData::where('compainName',$validated[1])
->get();
$countOpen=$countOpen[0]->countOpen;
$countOpen++;
EmailData::where('compainName',$validated[1])
->update(['countOpen'=>$countOpen]);

}else{
echo "Nothing is there";
}

}

public function checkBounces (Request $request){

$validated = $request -> validate(['databasedata'=>'required|string',
				    'return-path'=>'required|string',
				    'password'=>'required|string']);

$imap = imap_open("{localhost:143}INBOX",$validated['return-path'],$validated['password']);
$mails = imap_search($imap,'ALL');
$needle = 'Unrouteable address';
$needle2='550-5.1.1';


foreach ($mails as $num){

$body = imap_body($imap,$num);
//var_dump($body);
$pos2=strpos($body,$needle2);
$pos = strpos($body,$needle);
if ($pos === false&$pos2===false){

continue;

}else{

preg_match_all("/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i",$body,$matches);

foreach ($matches as $match){
DB::table($validated['databasedata'])->where('email',$match)->delete();

}
}
}

imap_close($imap);

}

public function showCheckBouncesPage(){

$tables = DB::select('SHOW TABLES');

return view ('clearbounces',['tables'=>$tables]);



}

}
