<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationUser extends Model
{
    use HasFactory;

    protected $fillable = ['userId', 'notificationId'];

    public function notification()
    {
        return $this->hasOne(Notification::class,'id','notificationId')->latest();
    }
}
