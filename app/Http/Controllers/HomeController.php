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
            $userEmail = \Auth::user()->email;
        }
        $ious = \App\Iou::where('paid', false) 
            ->where(function($query) {
                $userEmail = \Auth::user()->email;
                $query
                    ->where('lender_email', $userEmail)
                    ->orWhere('borrower_email', $userEmail);
            })
            ->orderBy('due_date', 'asc')
            ->take(10)
            ->get();

        return view('index')
                ->with('ious', $ious)
                ->with('userEmail', $userEmail);
    }
}
