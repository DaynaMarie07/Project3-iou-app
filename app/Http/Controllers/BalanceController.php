<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BalanceController extends Controller
{
    //
    public function save_data(Request $request)
    {     
    $user = User::create($request->all());
    return redirect()->route('home');
    }
}
