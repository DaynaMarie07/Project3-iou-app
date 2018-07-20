<?php

namespace App\Http\Controllers;

use App\Iou;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::check()) 
        {
            $user = \Auth::user();
            $userEmail = $user->email;
        }
        $ious = \App\Iou
            ::where('lender_email', $userEmail)
            ->orWhere('borrower_email', $userEmail)
            ->where('paid', false)
            ->orderBy('date', 'desc')
            ->take(10)
            ->get();

        return view('index')->with('ious', $ious);
    }
}
