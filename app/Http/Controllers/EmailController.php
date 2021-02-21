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
public function showEmailPage(): View{

return view('emailpage');
	}

        public function showTables(){

	        $tables = DB::select('SHOW TABLES');

		        $domains=Storage::get('\public\ips_out.conf');
				$domains=explode(PHP_EOL,$domains);
					$domains2=array_pop($domains);

				


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
		
		$pid = getmypid();
			
    		$validated=$request->validated();
		$compainName=$validated['compainname'];
		$countOpen=0;
		
		$emaildata= new EmailData();
		$emaildata -> compainName = $validated['compainname'];
		$emaildata -> countOpen = 0;
		$emaildata -> pid = $pid;
		$emaildata -> save();
		$name=$validated['compainname'];
		$base_url='http://buboff.com/';
            $mail = new PHPMailer(true);

            $mail->SMTPDebug=1;
            $mail->isSMTP();
            $mail->Host='localhost';
            $mail->Hostname='smtp.fotoded.com';
            $mail->Helo=$validated['helo'];
            $mail->SMTPAuth=true;
            $mail->SMTPSecure=false;
            $mail->SMTPAutoTLS=false;
            $mail->SMTPKeepAlive=true;
            $mail->Port=25;
            $mail->Username=$validated['username'];
            $mail->Password=$validated['userpassword'];
            $mail->addReplyTo($validated['sender_address'],'List manager');
            $mail->setFrom($validated['sender_address'],'Who knows');
            $mail->isHTML(true);
            $mail->Subject='Hello, my friend ! ))))';
            $mail->Body=$validated['emailtext'].'<img src="'.$base_url.'track?code=open&name='.$validated['compainname'].'" width="1" height="1"/>';

//$headers = 'Return-Path: bounce@fotoded.com\r\n';

    $emails=DB::table($validated['databasedata'])->get('email');
        
	
foreach ($emails as $email){
try {
$mail->addAddress($email->email);
}catch (\Exception $e){
echo 'Invalid address skipped:' . htmlspecialchars($email->email).'<br>';
continue;
}
try{
$mail->send();
sleep((60/$validated['speed'])*60);
}catch(\Exception $e){
echo 'Mailer Error ('.htmlspecialchars($email->email).')'.$mail->ErrorInfo.'<br>';
}
$mail->clearAddresses();
}
$mail->SmtpClose();
return view('queuestarted');

}

public function showReport(){

$report=shell_exec('eximstats -html> /var/www/html/sydhad/my_app/email/resources/views/report.blade.php -byemail /var/log/exim4/mainlog');
return view ('report');
		

}

public function upload(){


return view('upload');


}

public function store(Request $request){


$request->validate([
'file'=>'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
]);
$fileModel = new File;

$name = $request->file('file')->getClientOriginalName();
$path = $request->file('file')->storeAs('public',$name);

  $fileModel->name =$request->file->getClientOriginalName();
            $fileModel->path = $path;
            $fileModel->save();

return view ('1',['user'=>$name,'user2'=>$path]);

}



public function showuploadedfiles(){

exec('ls /var/www/html/sydhad/my_app/email/storage/app/public/',$output);
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
            'user3'=>$validated['sender_address']]);

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

return view ('jsondecode',['emails'=>$lines,'emails_number'=>$emails_number]);

}

public function writeemailsdb(FileRequest $request){
$validated = $request->validated();
$data = Storage::disk('public')->get($validated['file']);

var_dump($data);

}

public function showKillPidPage(){

$lines[] = DB::table('email_data')->get();
return view('killPidPage',['lines'=>$lines]);
var_dump($lines);
}

}
?>
