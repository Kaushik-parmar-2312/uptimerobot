<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\mail_verification;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\DB;


class user_controller extends Controller
{
    //user contoller for user data modify 
    public function change_email(Request $request)
    {
       
            $data=array('subject'=>'Change Email Address','email'=>$request->input('userNewEmail'),'token'=>$request->input('_token'));
          
            $check_email =User::where('email',$data['email'] )->where('id',auth()->user()->id)->count(); 

            if($check_email>0)
            {      
                return 'alertContactExists';     
            }
            else{
                
                Mail::to($data['email'])->send(new mail_verification($data));
                User::whereId( auth()->user()->id )->update(array('email'=>$data['email']));
                return "true";
            }
    }

    public function change_password(Request $request)
    {
        // DB::enableQueryLog();
        // $list = User::where('password', bcrypt($request->input('userOldPassword')))->where('id',auth()->user()->id)->count();
        // $query = DB::getQueryLog();
        // dd(end($query));

        //dd(Hash::make($request->input('userOldPassword')));\

        $model=User::find(Auth::id());
        
        if(password_verify($request->input('userOldPassword'),$model->password))
        {
            $data=array('password'=> Hash::make($request->input('userNewPassword')));
            User::whereId( auth()->user()->id )->update($data);
            return "true";
        } 
        else
        {
            return "false";
        }






        // $check_password =User::where('password', Hash::make($request->input('userOldPassword')))->where('id',auth()->user()->id)->count(); 
    
        // if( $check_password >0)
        // {
        //     return "false";
        // }else
        // {
        //     $data=array('password'=> Hash::make($request->input('userNewPassword')));
        //     User::whereId( auth()->user()->id )->update($data);
        //     return "true";
        // }
    }
    public function update_name(Request $request)
    {
        $name=array('name' =>$request->input('userFirstLastName'));
        User::whereId( auth()->user()->id )->update($name);
        return true;

    }
}
