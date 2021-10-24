<?php

namespace App\Http\Controllers;
use Illuminate\Facade\Artisan;
use App\Http\Requests\EmailQueueRequest;
use App\Models\Email;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Http\Requests\FileRequest;
use App\Models\File;
use App\Models\EmailData;





class EmailController extends Controller
{

public function __construct()
{
$this->middleware('auth');
}


public function showEmailPage(): View{

return view('emailpage');
	}

        public function showTables(){

	        $tables = DB::select('SHOW TABLES');

		        $domains=Storage::get('\public\ips_out.conf');
				$domains=explode(PHP_EOL,$domains);
				//	$domains2=array_pop($domains);

				


		       return view('emailpage',['tables'=>$tables
			        ,'domains'=>$domains]);


					    }
	        public function table(EmailQueueRequest $request){


			        $validated=$request->validated();

		        return view('1',['user'=>$validated['databasedata'],'user2'=>$validated['emailtext'],
		            'user3'=>$validated['domain']]);
		    }

	        public function getDomains(){
		        $domains=Storage::get('/etc/exim4/ips_out.conf');
				    $domains=explode(PHP_EOL,$domains);
				        $email= new PHPMailer(true);


		}
		

		public function startQueue(EmailQueueRequest $request){
		ignore_user_abort(true);
                set_time_limit(0);
		$pid = getmypid();
			
    		$validated=$request->validated();
		$compainName=$validated['compainname'];
		$countOpen=0;
		$countSend=0;
		$emaildata= new EmailData();
		$emaildata -> compainName = $validated['compainname'];
		$emaildata -> countOpen = 0;
		$emaildata -> pid = $pid;
		$emaildata -> save();
		$name=$validated['compainname'];
		$base_url='http://bob2bob.com/';
            $mail = new PHPMailer(true);
            $mail->SMTPDebug=1;
            $mail->isSMTP();
            $mail->Host='localhost';
            $mail->Hostname='smtp.bob2bob.com';
            $mail->Helo=$validated['helo'];
            $mail->SMTPAuth=true;
            $mail->SMTPSecure=false;
            $mail->SMTPAutoTLS=false;
    //        $mail->SMTPKeepAlive=true;
            $mail->Port=25;
            $mail->Username=$validated['username'];
            $mail->Password=$validated['userpassword'];
            $mail->addReplyTo($validated['sender_address'],$validated['name']);
            $mail->setFrom($validated['sender_address'],$validated['name']);
            $mail->isHTML(true);
            $mail->Subject=$validated['subject'];
//            $body=$validated['emailtext'].'<img src="'.$base_url.'track?code=open&name='.$validated['compainname'].'"width="1" height="1"/>';


    $emails=DB::table($validated['databasedata'])->where('status',0)->get();
 
	$db=$validated['databasedata'];	
foreach ($emails as $email){
//$body=$validated['emailtext'].'<img src="'.$base_url.'track?code='.$email.'&name='.$validated['compainname'].'"width="1" height="1"/>';
//sleep(intval($validated['speed']));
sleep(rand(1080,1380));

//$countSend++;
//Storage::disk('local')->put('countSend',$countSend);
$email2=$email->email;

$data=array($email2,$db);
$code=implode('/',$data);
$body=$validated['emailtext'].'<img src="'.$base_url.'track?code='.$code.'&name='.$validated['compainname'].'"width="1" height="1"/>';

$mail->Body=$body.'<p align="center"><a href="'.$base_url.'unsubscribe?email='.$email2.'&db='.$db.'">'.'Unsubscribe'.'</a></p>';
try {
$mail->addAddress($email->email);
}catch (\Exception $e){
echo 'Invalid address skipped:' . htmlspecialchars($email->email).'<br>';
continue;
}
try{
$mail->send();
$countSend++;
Storage::disk('local')->put('countSend.txt', $countSend);
}catch(\Exception $e){
echo 'Mailer Error ('.htmlspecialchars($email->email).')'.$mail->ErrorInfo.'<br>';
}
$mail->clearAddresses();
}
$mail->SmtpClose();

return view('queuestarted');

}

public function showReport(){

//$report=shell_exec('eximstats -html> /var/www/html/sydhad/my_app/email/resources/views/report.blade.php -byemail /var/log/exim4/mainlog');

$report = exec('eximstats -txt -byemail /var/log/exim4/mainlog',$output);

//var_dump($output);
return view ('report',['output'=>$output]);
		

}

public function upload(){


return view('upload');


}

public function store(Request $request){


$request->validate([
'file'=>'required|mimes:csv,txt,xlx,xls,pdf|max:20971520'
]);
$fileModel = new File;

$name = $request->file('file')->getClientOriginalName();
$path = $request->file('file')->storeAs('public',$name);

  $fileModel->name =$request->file->getClientOriginalName();
            $fileModel->path = $path;
            $fileModel->save();

//return view ('1',['user'=>$name,'user2'=>$path]);

return redirect ('/upload')->with('success','File uploaded');

}



public function showuploadedfiles(){

exec('ls /var/www/html/email-master/storage/app/public/',$output);
$tables = DB::select('SHOW TABLES');

return view ('uploadedfiles',['files' => $output,'tables'=>$tables ]);


}


public function showEmails(){

$emails=DB::table('emails')->get('email');
print_r ($emails);


}


public function check(EmailQueueRequest $request){

$validated=$request->validated();

return view('1',['user'=>$validated['databasedata'],'user2'=>$validated['emailtext'],
            'user3'=>$validated['speed']]);

}

public function parse(FileRequest $request){

$validated=$request->validated();

$data=$validated['file'];
$data2 = Storage::disk('public')->get($data);
$data2=json_decode($data2,true);
$data2=serialize($data2);
preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i',$data2,$matches);
$result=array_unique($matches[0]);



$lines=array();
$rows=array();
foreach ($result as $row){

if(strpos($row,'E-mail')==0){
$row2=ltrim($row,'E-mail');
$lines[] = ['email' => $row2 ];
}
elseif(strpos($row,'Email')==0){
$row2=ltrim($row,'Email');
$lines[]=['email'=>$row2];
}else{
$lines[]= ['email'=>$row];
}
}

DB::table($validated['databasedata'])->insertOrIgnore($lines);

$emails_number = count($result,COUNT_RECURSIVE);
//var_dump($lines);
return view ('jsondecode',['emails'=>$lines,'emails_number'=>$emails_number]);

}

public function writeemailsdb(FileRequest $request){
$validated = $request->validated();
$data = Storage::disk('public')->get($validated['file']);

$data2=explode(PHP_EOL,$data,PHP_INT_MAX);



foreach($data2 as $row){

$row2=rtrim($row,"\r");

$line[]=['email'=>$row2];

}

$line2=array_chunk($line,5000);


foreach($line2 as $row){

DB::table($validated['databasedata'])->insertOrIgnore($row);

}

}

public function showKillPidPage(){

$lines[] = DB::table('email_data')->get();
return view('killPidPage',['lines'=>$lines]);
var_dump($lines);
}


public function killPid(){



}


public function showWhatWeHave(FileRequest $request){

$validated=$request->validated();
$data=$validated['file'];
$data2=Storage::disk('public')->get($data);
//$data3=explode(" ",$data2,PHP_INT_MAX);
$data3=str_getcsv($data2);

foreach($data3 as $row){
$data4=explode(";",$row);
}

foreach($data4 as $row){

if(stristr($row, '@')===FALSE){

continue;

}else{


$row2=ltrim($row,"haduigon");
$row3=ltrim($row2,"\r");
$row4=trim($row3," \n\r\t\v\0");

$data5[]=$row4;

}

//var_dump($data5);

}
var_dump($data5);
}
}
?>
