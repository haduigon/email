<?php

namespace App\Http\Controllers;
use Illuminate\Facade\Artisan;
use App\Http\Requests\EmailQueueRequest;
use App\Models\Email;
use App\Models\User;
//use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Http\Requests\FileRequest;
use App\Models\File;




class EmailController extends Controller
{
	    public function showEmailPage(): View{

		            return view('emailpage');
			        }

	        public function showTables(){

			        $tables = DB::select('SHOW TABLES');

				        $domains=Storage::get('\public\ips_out.conf');
				$domains=explode(PHP_EOL,$domains);
				//$domains = rtrim($domains,PHP_EOL);


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
            $mail->Body=$validated['emailtext'];
            $emails=DB::table('emails')->get('email');
        
	

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
            //    return view('queuestarted');

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
//$validate = $request->validated();
$name = $request->file('file')->getClientOriginalName();
$path = $request->file('file')->storeAs('files',$name);

  $fileModel->name =$request->file->getClientOriginalName();
            $fileModel->path = $path;
            $fileModel->save();

return view ('1',['user'=>$name,'user2'=>$path]);

}



public function showuploadedfiles(){

exec('ls /var/www/html/sydhad/my_app/email/storage/app/files/',$output);
return view ('uploadedfiles',['files' => $output]);


}



		}
?>
