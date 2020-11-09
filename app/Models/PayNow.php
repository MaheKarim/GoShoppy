<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayNow extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function service(){
        return $this->belongsTo(PaymentService::class, 'payment_name_id');
    }
}
