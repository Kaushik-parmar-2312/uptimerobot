<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\UserLogModel;
use App\Models\monitor_type;
use App\Models\contact_detlais;

class monitors extends Model
{
    use HasFactory;
    protected $fillable = [
        'friendly_name',
        'url_ip',
        'port',
        'keyword',
        'case_inse',
        'alertWhen',
        'interval',
        'timeout',
        'status',
        'pause',
        'monitor_type_id',
        'user_id',
    ];


    
    public function monitorcontact()
    {
        return $this->hasMany(monitor_contact_details::class, 'monitor_id', 'id');
    }

    public function monitortype()
    {
        return $this->hasOne(monitor_type::class, 'id', 'monitor_type_id');
    }

    public function logs()
    {
        return $this->hasOne(UserLogModel::class, 'monitor_id', 'id')->orderBy('created_at', 'desc');
    }

    public function logs_get()
    {
        return $this->hasMany(UserLogModel::class, 'monitor_id', 'id')->orderBy('created_at', 'desc');
    }
}
