<?php

namespace App\Http\Controllers;

use App\Iou;

use Carbon\Carbon;

use Illuminate\Http\Request;

class IouController extends Controller
{
    //
    public function showCreateIOU() {
        return view('sendRequest')
            ->with('type', 'IOU')
            ->with('iouCreateAction', 'createIOU');
    }
    public function showCreateUOME() {
        return view('sendRequest')
            ->with('type', 'UOME')
            ->with('iouCreateAction', 'createUOME');
    }

    public function createIOU(Request $request) {

        // save the iou in database
        $iou = new IOU;
        
        $iou->lender_email = $request->input('email');
        $iou->borrower_email = \Auth::user()->email;
        $iou->paid = false;
        $iou->comment = $request->input('comment');
        $iou->amount = $request->input('amount');
        $iou->created_date = Carbon::now();
        $iou->due_date     = Carbon::now();

        $iou->save();

        return redirect('');

    }
    public function createUOME(Request $request) {


        // save the iou in database
        $iou = new IOU;
        
        $iou->borrower_email = $request->input('email');
        $iou->lender_email= \Auth::user()->email;
        $iou->paid = false;
        $iou->comment = $request->input('comment');
        $iou->amount = $request->input('amount');
        $iou->created_date = Carbon::now();
        $iou->due_date     = Carbon::now();

        $iou->save();

        return redirect('');
    }
}
