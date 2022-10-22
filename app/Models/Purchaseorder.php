<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchaseorder extends Model
{
    use HasFactory;

    protected $fillable = [
        'po_no',
        'provider_id',
        'po_date',
        'credit',
        'po_file',
        'remark',
        'disburse_id',
    ];


    public function disburses()
    {
        return $this->belongsTo(Disburse::class);
    }

    public function purchaseorderlists()
    {
        return $this->hasMany(Purchaseorderlist::class);
    }
    public function provider() // ถ้าจะใช้เป็น hasOne ชื่อฟังก์ชันไม่ต้องเติม s
    {
        return $this->hasOne(Provider::class, 'id', 'provider_id'); // ต้องใส่ param เข้าไปด้วยให้รู้ว่า ตัวแปรฝั่งตาราง provider คือ id และตัวแปรที่ต้องการเชื่อมในตาราง purchaseorder คือ provider_id
    }
}
