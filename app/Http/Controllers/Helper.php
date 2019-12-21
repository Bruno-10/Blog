<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Helper extends Controller
{
    public static function noEsAdmin()
    {
        return Auth::user()->email != "admin@admin.com";
    }   
}