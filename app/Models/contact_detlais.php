<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact_detlais extends Model
{
    use HasFactory;
    protected $table = 'contact_detlais';
    protected $fillable = [
        'Friendly_Name',
        'email','notification',
        'status',
        'account_type',
        'user_id',
        'alert_start_stop',
        'created_at',
        'updated_at',
    ];
}
