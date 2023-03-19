<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table='attendances';
    protected $fileable=[
        'id',
        'date',
        'status',
        'user_id',
    ];


    public function user()
    {
       return $this->belongsTo(User::class,'user_id','id');
    }
}
