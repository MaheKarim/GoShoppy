<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentService extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function payment(){
        return $this->belongsTo(PayNow::class);
    }
}
