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
use Illuminate\Support\Facades\Session;

class AdminLTEController extends Controller {

    public function admin() {

        return view('welcome');
    }

    public function register() {
        return view('AdminPages/Register');
    }

    public function registerSubmit(Request $request) {
        session()->regenerate();
        $FirstName = Input::get('firstname');
        $LastName = Input::get('lastname');
        $Gender_ID = Input::get('gender');
        $UserName = Input::get('username');
        $Password = Input::get('password');
        $ConformPassword = Input::get('conformpassword');
        $validated = 0;
        $Token = str_random(30);
        session(['UserName' => $UserName, 'Validation_Token' => $Token]);

        $select = Session::all();
        $data['UserName'] = session::get('UserName');
        $data['Validation_Token'] = session::get('Validation_Token');

        //print_r($data);
        $body = "Please click the link to activate your email \n http://framework.karmanya.dev/Step2/$Token";

//echo $Token;
        DB::table('User')->insert(['FirstName' => $FirstName, 'LastName' => $LastName, 'Gender_ID' => $Gender_ID, 'UserName' => $UserName, 'Password' => $Password, 'Validation_Token' => $Token, 'IsValidated' => $validated]);

        $User = DB::table('User')->select("*")->get();
        if ($User) {
            $Result = "Succesfully Send a validation link to your EmailId.Please click to Activate it.";
        } else {

            $Result = "<b style='color:red'>Somthing went Wrong,Check Your Email Address.</b>";
        }


        Mail::send('email/test', array('body' => $body), function($message)use($UserName) {
            $message->to($UserName, 'naveen')->subject('test mail');
        });


        return view('AdminPages/Register', compact('Result'));
    }

    public function confirm($Token) {
        //echo $Token;
        $validate = 1;
        if (!$Token) {
            echo "Not A Valide Token";
        } else {
            DB::table('User')->where('Validation_Token', '=', $Token)->update(['IsValidated' => $validate]);

            echo "You have Successfully Registered.";
        }
        return view('welcome');
    }

    //---------------------practice Eloquent Relations--------------------
    //------------------------------------------------------------------------

    public function polymorphic() {
        $staff = \App\Staff::find(1);
        echo $staff['Name'];
//        foreach ($staff->photos as $photo) {
//            print_r($photo);
//        }
        $photo = \App\Photo::find(1);

//$Image = $photo->Image;
        echo $photo['Path'];
    }

    public function manypoly() {
        $posts = \App\Posts::find(1);
        $Tags = \App\Tags::find(1);
        //$Videos= \App\Videos::find(1);
        echo $posts;
        echo $Tags;
        //echo $Videos;
    }

}
