<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'file_payment',
        'payment_value',
        'payment_datetime',
        'remark',
    ];
        
    public function disburses()
    {
        return $this->belongsTo(Disburse::class);
    }
  
}
