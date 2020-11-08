<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourierType extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function getquotes()
    {
        return $this->belongsTo(GetQuoteForm::class);
    }
}
