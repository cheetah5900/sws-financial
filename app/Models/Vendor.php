<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_name',
        'vendor_sname',
        'vendor_bank',
        'vendor_account',
        'file_account',
        'remark',
    ];

    public function advances()
    {
        return $this->hasOne(Advance::class);
    }
}
