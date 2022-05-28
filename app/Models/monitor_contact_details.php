<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monitor_contact_details extends Model
{
    use HasFactory;
    protected $table = 'monitor_contact_details';
    protected $fillable = [
        'monitor_id',
        'contact_id',
    ];

    public function contact()
    {
        return $this->hasOne(contact_detlais::class,'id','contact_id');
    }
}
