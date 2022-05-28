<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\UserLogModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Monitor_response extends Model
{
    use HasFactory;
    protected $table = 'monitor_response';
    protected $fillable = [
        'monitor_id','response_time'
    ];

    public function logs(){
        return $this->hasOne(UserLogModel::class,'monitor_id','monitor_id')->orderBy('created_at','desc');
    }


}
