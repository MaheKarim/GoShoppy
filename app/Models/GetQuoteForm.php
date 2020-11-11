<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetQuoteForm extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function courier()
    {
        return $this->belongsTo(CourierType::class, 'couriertype_id');
    }
}
