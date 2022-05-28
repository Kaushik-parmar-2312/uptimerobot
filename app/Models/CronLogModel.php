<?php

namespace App\Models;

use App\Models\User\MonitorModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CronLogModel extends Model
{
    use HasFactory;
    protected $table = 'cron_logs';
    protected $fillable = [
        'id','created_at'
    ];
}
