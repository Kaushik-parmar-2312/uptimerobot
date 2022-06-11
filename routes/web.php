<?php

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\coantct_detalis_controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\monitors_controller;
use App\Http\Controllers\user_controller;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

//userside  route
Route::get('/statuspage', function () {
    return view('userside.status-page');
});


    Route::get('/inc/pages/settingsDashboard.php', [HomeController::class, 'settingsDashboard'])->name('user.settings');

    Route::get('/inc/pages/mainDashboard.php', [monitors_controller::class, 'mainDashboard'])->name('user.maindashbord');

    Route::get('inc/dml/userDML.php', function () {
        return view('dml.userDML');
    });


//user routing
    Route::post('/editPersonalEmailForm', [user_controller::class, 'change_email'])->name('editPersonalEmailForm');
    Route::post('/change_password', [user_controller::class, 'change_password'])->name('chnage_password');
    Route::post('/change_name', [user_controller::class, 'update_name'])->name('change_name');

//conatct detalis route
    Route::get('/contactlist', [coantct_detalis_controller::class, 'Contact_list'])->name('contactList');
    Route::post('/addContact', [coantct_detalis_controller::class, 'addAlertContact'])->name('addAlert');
    Route::get('/getAlertContactDetails/{id}', [coantct_detalis_controller::class, 'conatct_edit'])->name('getAlertContactDetails');
    Route::post('/editAlertContact/{id}', [coantct_detalis_controller::class, 'update_contact'])->name('editAlertContact');
    Route::get('/deleteAlertConatct/{id}', [coantct_detalis_controller::class, 'delete_contact'])->name('deleteAlertConatct');
    Route::get('/startStopAlertContact/{id}', [coantct_detalis_controller::class, 'startStopAlertContact'])->name('startStopAlertContact');

//add monitirng userside route  Crud
    Route::resource('/monitor', monitors_controller::class);
    Route::get('/monitordelete/{id}', [monitors_controller::class, 'delete'])->name('monitor.delete');

    Route::get('/getMonitorDetailsArray/{id}', [monitors_controller::class, 'monitor'])->name('monitor.array_detalis');

    Route::get('/monitor_detalis/{id}', [monitors_controller::class, 'monitor_detalis'])->name('monitor.detalis');
    Route::get('/startpausemonitor/{id}', [monitors_controller::class, 'startpausemonitor'])->name('monitor.startpausemonitor');

//monitor Search and sorting
    Route::get('/getMonitors&monitorSearchKeyword/{monitorSearchKeyword}', [monitors_controller::class, 'monitorSearch'])->name('monitor.monitorSearch');
    Route::get('/getMonitors', [monitors_controller::class, 'getMonitors'])->name('monitor.getMonitors');
    Route::get('/sortmoniting/{sortmonitor}', [monitors_controller::class, 'sortmonitring'])->name('monitor.sortmonitring');


    Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard')->middleware('is_admin');

    Route::get('admin/', [admin_controller::class, 'get_admin'])->name('monitor.startpausemonitor');
    Route::get('admin/users', [admin_controller::class, 'get_details'])->name('monitor.startpausemonitor');
    Route::get('admin/contact_details', [admin_controller::class, 'get_contact_details'])->name('monitor.startpausemonitor');
    Route::get('admin/monitor_type', [admin_controller::class, 'get_monitorType_details'])->name('monitor.startpausemonitor');
    Route::get('admin/monitor', [admin_controller::class, 'get_monitor_details'])->name('monitor.startpausemonitor');

