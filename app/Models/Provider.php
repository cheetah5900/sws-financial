<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'provider_name',
        'provider_shortname',
        'provider_bank',
        'provider_bank_branch',
        'provider_bank_number',
        'provider_bank_file',
    ];
}
