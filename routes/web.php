<?php

use App\Http\Controllers\coantct_detalis_controller;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;
  

use App\Models\contact_detlais;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\monitors_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Visitor.index');
});

Route::get('/integrations', function () {
    return view('Visitor.integrations');
});
Route::get('/status-page', function () {
    return view('Visitor.status-page');
});
Route::get('/pricing', function () {
    return view('Visitor.pricing');
});

//layout route
Route::get('/LR', function () {
    return view('layouts.LR');
});


//userside  route
Route::get('/statuspage',function(){
    return view('userside.status-page');
});

// Route::get("/inc/pages/mainDashboard.php", function(){    
//     return view('pages.mainDashboard');
// });

// Route::get("/inc/pages/settingsDashboard.php", function(){
//     $Contact_detalis =contact_detlais::select('*',DB::raw('(select count(id) from contact_detlais where user_id = '.auth()->user()->id.') as count' ))->where('user_id', auth()->user()->id)->get();
//     return view('pages.settingsDashboard',compact('Contact_detalis'));
// });
Route::get('/inc/pages/settingsDashboard.php',[HomeController::class, 'settingsDashboard'])->name('user.settings');

Route::get('/inc/pages/mainDashboard.php',[monitors_controller::class,'mainDashboard'])->name('user.maindashbord');



Route::get('inc/dml/userDML.php',function(){
    return view('dml.userDML');
});


Auth::routes();

Route::get('/dashboard',[HomeController::class, 'index'])->name('dashboard');
Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard')->middleware('is_admin');

//user routing 
Route::post('/editPersonalEmailForm',[user_controller::class,'change_email'])->name('editPersonalEmailForm');
Route::post('/change_password',[user_controller::class,'change_password'])->name('chnage_password');
Route::post('/change_name',[user_controller::class,'update_name'])->name('change_name');


//conatct detalis route 
Route::get('/contactlist',[coantct_detalis_controller::class,'Contact_list'])->name('contactList');
Route::post('/addContact',[coantct_detalis_controller::class,'addAlertContact'])->name('addAlert');
Route::get('/getAlertContactDetails/{id}',[coantct_detalis_controller::class,'conatct_edit'])->name('getAlertContactDetails');
Route::post('/editAlertContact/{id}',[coantct_detalis_controller::class,'update_contact'])->name('editAlertContact');
Route::get('/deleteAlertConatct/{id}',[coantct_detalis_controller::class,'delete_contact'])->name('deleteAlertConatct');
Route::get('/startStopAlertContact/{id}',[coantct_detalis_controller::class,'startStopAlertContact'])->name('startStopAlertContact');

//add monitirng userside route  Crud
Route::resource('/monitor',monitors_controller::class);
Route::get('/monitordelete/{id}',[monitors_controller::class,'delete'])->name('monitor.delete');

Route::get('/getMonitorDetailsArray/{id}',[monitors_controller::class,'monitor'])->name('monitor.array_detalis');

Route::get('/monitor_detalis/{id}',[monitors_controller::class,'monitor_detalis'])->name('monitor.detalis');
Route::get('/startpausemonitor/{id}',[monitors_controller::class,'startpausemonitor'])->name('monitor.startpausemonitor');

//monitor Search and sorting 
Route::get('/getMonitors&monitorSearchKeyword/{monitorSearchKeyword}',[monitors_controller::class,'monitorSearch'])->name('monitor.monitorSearch');
Route::get('/getMonitors',[monitors_controller::class,'getMonitors'])->name('monitor.getMonitors');
Route::get('/sortmoniting/{sortmonitor}',[monitors_controller::class,'sortmonitring'])->name('monitor.sortmonitring');


