<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    use HasFactory;

    protected $fillable = [
        'advance_value',
        'advance_used',
        'advance_date',
        'remark',
        'status',
        'file_advance',
        'person_id',
        'vendor_id'
    ];
    // ดึงข้อมูลมาว่า ผู้รับเงินเข้าไหนมียอด advance อันไหนบ้าง
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'person_id');
    }
}
