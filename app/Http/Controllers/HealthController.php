<?php

namespace App\Http\Controllers;

use App\Models\Disburse;

use Illuminate\Http\Request;

class HealthController extends Controller
{
    public function index()
    {
        return view('blank');
    }
    public function chkdatabase()
    {
        $disburse = Disburse::all();
        return view('blank', compact('disburse'));
    }
}
