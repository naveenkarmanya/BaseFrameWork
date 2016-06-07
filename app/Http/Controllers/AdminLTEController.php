<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class AdminLTEController extends Controller
{
    public function admin() {

        return view('welcome');
    }
    public function register() {
        return view('AdminPages/Register');
    }
    
    public function registerSubmit()
    {
        $FirstName = Input::get('firstname');
        $LastName = Input::get('lastname');
        $Gender_ID = Input::get('gender');
        $UserName = Input::get('username');
        $Password = Input::get('password');
        $ConformPassword = Input::get('conformpassword');
        $body = "Please click the link to activate your email \n http://framework.karmanya.dev/Step2/{confirmationCode}";

        

        $confirmation_code = str_random(30);
        
        DB::table('User')->insert(['FirstName' => $FirstName, 'LastName' => $LastName, 'Gender_ID' => $Gender_ID, 'UserName' => $UserName,'Password'=>$Password]);

        $User = DB::table('User')->select("*")->get();
        //print_r($User);

//        if ($User) {
//            $Result = "Succesfully inserted";
//        } else {
//
//            $Result = "<b style='color:red'>Somthing went Wrong</b>";
//        }


        Mail::send('email/test', array('body' => $body), function($message)use($UserName) {
            $message->to($UserName, 'naveen')->subject('test mail');
        });
        
       



echo "Please Click Bellow Link to Activate Your Email"."<p><a href=\"{{ URL::to('register/verify/' . $confirmation_code) }}/". "</a></p>";

    }
    
    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = DB::table('User')->select("*")->get();

        
       return view('welcome');
    }
}

