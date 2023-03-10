<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;

class ValidationController extends Controller
{   
    public function index()
    {
        return view('welcome');
    }
    
    public function store(Request $request)
    {  
        $log = $request->validate([
            'username' => 'required|between:6,12|alpha_num:ascii',
            'email' => 'required|email|unique:users',
            'gender' => 'required',
            'password' => ['required', 'alpha_num', Password::min(8)->mixedCase()->letters()->numbers()]
        ]);

        Log::info(json_encode($log));




        return;
    }

}
