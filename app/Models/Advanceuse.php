<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advanceuse extends Model
{
    use HasFactory;

    protected $fillable = [
        'advance_value',
        'remark',
        'disburse_id',
        'person_id',
        'vendor_id'
    ];
    public function disburse()
    {
        return $this->belongsTo(Disburse::class);
    }
    public function advance()
    {
        return $this->belongsTo(Advance::class);
    }
    
}
