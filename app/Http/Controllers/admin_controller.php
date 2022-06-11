<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\contact_detlais;
use App\Models\monitor_type;
use App\Models\monitors;
use App\Models\UserLogModel;
use App\Models\Monitor_response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\mail_verification;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class admin_controller extends Controller
{
    public function get_admin(Request $request)
    {
        $user= User::all();
        $monitor_type= monitor_type::all();
        $monitor= monitors::all();
        $Monitor_response= Monitor_response::all();
        $mType= monitor_type::all();
    
        return view('admin.customer.customer_dashboard',['mType'=>$mType,'usercnt'=>$user,'monitor'=>$monitor,'monitor_type'=>$monitor_type,'Monitor_response'=>$Monitor_response]);
    }
    public function get_details(Request $request)
    {
        $user= User::all();
        return view('admin.customer.users',['user'=>$user]);
    }
    public function get_contact_details(Request $request)
    {
        $contact= contact_detlais::all();
        return view('admin.customer.contact_details',['contact'=>$contact]);
    }
    public function get_monitorType_details(Request $request)
    {
        $mType= monitor_type::all();
        return view('admin.customer.monitor_type',['mType'=>$mType]);
    }
    public function get_monitor_details(Request $request)
    {
        $monitor= monitors::join('monitor_types','monitors.monitor_type_id', '=', 'monitor_types.id')
        ->join('users','monitors.user_id', '=', 'users.id')
        // ->join('monitor_response', 'monitors.id','=','monitor_response.monitor_id')
        ->select('monitors.*','monitor_types.monitor_type','users.name')
        ->get();
        return view('admin.customer.monitor',['monitor'=>$monitor]);
    }
}
?>