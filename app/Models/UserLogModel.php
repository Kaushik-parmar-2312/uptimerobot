<?php

namespace App\Models;

use App\Models\monitors;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserLogModel extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $fillable = [
        'monitor_id','status','min','avg','max','mdev','interval','user_id','StatusCode'
    ];

    public function monitor()
    {
        return $this->belongsTo(monitors::class);
    }
}
