<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Payment;

class Disburse extends Model
{
    use HasFactory;

    protected $fillable = [
        'disburse_name',
        'disburse_value',
        'disburse_date',
        'received_date',
        'payment_ready_date',
        'gr_status',
        'payment_status',
        'remark',
        'file_vendor',
        'file_sws',
        'person_id',
        'vendor_id',
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'person_id');
    }
    public function vendor()
    {
        return $this->hasOne(Vendor::class, 'id', 'vendor_id');
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    public function purchaseorders()
    {
        return $this->hasMany(Purchaseorder::class);
    }

    // ต่อ string
    public function getFileVendorAttribute($value)
    {
        $endPoint = env('APP_URL'); // ตัวแปรสำหรับตรวจสอบ app_url ของไฟล์ env ว่าเป็นอะไร
        if ($value != "") {
            return $endPoint . '/' . $value;
        } else {
            return $value;
        }
    }
    public function getFileSwsAttribute($value)
    {
        $endPoint = env('APP_URL'); // ตัวแปรสำหรับตรวจสอบ app_url ของไฟล์ env ว่าเป็นอะไร

        if ($value != "") {
            return $endPoint . '/' . $value;
        } else {
            return $value;
        }
    }
}
