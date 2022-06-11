<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\contact_detlais;
use Illuminate\Http\Request;

class coantct_detalis_controller extends Controller
{
    //
    public function Contact_list()
    {
        $Contact_detalis =contact_detlais::where('user_id', auth()->user()->id)->get();
        // echo $Contact_detalis;
        return view('userside.contact', compact('Contact_detalis'));
    }


    public function addAlertContact(Request $request)
    {
       
        $Alertcontact = array(
            'Friendly_Name' => $request->input('newEmailAlertContactFriendlyName'),
            'email' => $request->input('newEmailAlertContactValue'),
            'notification' => $request->input('newEmailAlertContactExcludeNotifications'),
            'status' =>0,
            'alert_start_stop'=>0,
            'account_type'=>'AlertContact',
            'user_id'=>auth()->user()->id,
        );


        $check_email =contact_detlais::where('email',$Alertcontact['email'] )->where('user_id',auth()->user()->id)->count(); 

        if($check_email>0)
        {      
            return 'alertContactExists';     
            
        }
        else{
            $valu=contact_detlais::create($Alertcontact);
            $true=array('true'=>true ,'val'=> $valu );
            return $true;
           }
    }  


   public function conatct_edit($id)
   {
        $data['contact']=contact_detlais::findOrFail($id);
        return $data;
   }

   public function update_contact($id,Request $request)
   {
        if( $request->input('account_type') =='AlertContact')
        {
            $update_contact=array ( 'Friendly_Name'=>$request->input('editEmailAlertContactFriendlyName'),
                                    'notification'=>$request->input('editEmailAlertContactExcludeNotifications') );
        }else{
            $update_contact=array('notification' => $request -> input('editBaseAccountAlertContactExcludeNotifications'));
        }
    
        contact_detlais::whereId($id)->update($update_contact);

       return true;
   }

   public function delete_contact($id)
   {
        $data = contact_detlais::findOrFail($id);
        $data->delete();
   }

   public function startStopAlertContact($id)
   {
       $check_alert=contact_detlais::whereId($id)->where('user_id' ,auth()->user()->id)->get();
       if($check_alert[0]['alert_start_stop'] == 1)
       {
            $data=array('alert_start_stop'=>'2');
            contact_detlais::whereId($id)->update($data);
            return 1;
       }else
       {
        $data=array('alert_start_stop'=>'1');
        contact_detlais::whereId($id)->update($data);
        return 2;
       }
       
   }
   
}
