<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaseorderlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'device_name',
        'amount',
        'priceperunit',
        'total_price',
        'remark',
    ];
    public function purchaseorders()
    {
        return $this->belongsTo(Purchaseorder::class);
    }
}
