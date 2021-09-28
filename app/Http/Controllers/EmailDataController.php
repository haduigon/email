<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailData;
use Illuminate\Support\Facades\DB;

class EmailDataController extends Controller
{
    public function track(Request $request){


$validated[]=$request->get('code');
$code=explode('/',$validated[0]);
$validated[]=$request->get('name');
list($email,$db)=$code;
DB::table($db)->where('email',$email)->update(['open'=>true]);

if($validated[0]!==null&$validated[1]!==null){

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
$needle2='550';


foreach ($mails as $num){

$body = imap_body($imap,$num);
//var_dump($body);
$pos2=strpos($body,$needle2);
$pos = strpos($body,$needle);
if ($pos === false & $pos2 === false){

continue;

}else{

preg_match_all("/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i",$body,$matches);
//var_dump($matches);
foreach ($matches as $match){
//var_dump($match);
DB::table($validated['databasedata'])->where('email',$match)->delete();

}
//var_dump($mathces);
}
}
imap_close($imap);
return redirect('/showCheckBouncesPage')->with('success','DB cleared');
}

public function showCheckBouncesPage(){

$tables = DB::select('SHOW TABLES');

return view ('clearbounces',['tables'=>$tables]);

}


public function unsubscribe(Request $request){

$email=$request->get('email');
$db=$request->get('db');
if($email!==null&$db!==null){

DB::table($db)->where('email',$email)->update(['status'=>true]);

}
}

public function showSearchPage(){

$tables=DB::select('SHOW TABLES');

return view('searchPage',['tables'=>$tables]);

}


public function search(Request $request){

$input=$request->input();
$data='select email from '.$input['database'].' where email like '."'".'%'.$input['name'].'%'."'";
$search=DB::select($data);

return $search;

}


public function test(){

$test= 'Nothing is here';
return view ('test',['test'=>$test]);

}


public function jsonn(Request $request){

$input=$request->input();

return $input;

}


}
