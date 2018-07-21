@extends('layouts.app')
@section('header')

@endsection

@section('pagestyles')

    <style> @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
            * {
              margin: 0;
              padding: 0;
              box-sizing: border-box;
              -webkit-box-sizing: border-box;
              -moz-box-sizing: border-box;
              -webkit-font-smoothing: antialiased;
              -moz-font-smoothing: antialiased;
              -o-font-smoothing: antialiased;
              font-smoothing: antialiased;
              text-rendering: optimizeLegibility;
            }
            
            body {
              font-family: "Roboto", Helvetica, Arial, sans-serif;
              font-weight: 100;
              font-size: 15px;
              line-height: 30px;
              color: #777;
            }
            body:after {
            content:"";
            position:fixed; /* stretch a fixed position to the whole screen */
            top:0;
            height:100vh; /* fix for mobile browser address bar appearing disappearing */
            left:0;
            right:0;
            z-index:-1; /* needed to keep in the background */
            background: url(/img/bg.jpg) center center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            }
            
            .container {
              max-width: 700px;
              width: 100%;
              margin: 0 auto;
              position: relative;
             
            }
            
            .custom-select{
                border: 3px black;
                background-color: #FFFFFF;
            }
                 /* .btn{ 
                border-radius: 50%;S
                width:32px;
                height:32px;
                line-height:18px;    
                } */
                .my-custom-btn{
                white-space: nowrap;
                border-radius: 50%; 
                width:87px; 
                height:80px; 
                line-height:10px;
                font-size: 1.2rem; 
                margin: 10px;
                margin-bottom: 17px; 

                
                }
                .table-mycolor {
                background-color: rgba(255,255,255,0.1) !important;
                color: #000;
                }
           
                    </style>
@section('content')

<div class = "container">
  <div id="wrapper">
    <div class="scroll">
      <div class="d-flex justify-content-center">
        <form method='GET' action='{{ route('sendIOU') }}'>
          <button type="submit" class="my-custom-btn active" role="button" aria-pressed="true"> 
            {{ __('Send') }}
          </button>
        </form>
        <form method='GET' action='{{ route('recieveUOME') }}'>
          <button type="submit" class="my-custom-btn active" role="button" aria-pressed="true"> 
            {{ __('Request') }}
          </button>
        </form>
        <button type="button" class="my-custom-btn active" role="button" aria-pressed="true" > {{ __('Contact') }}</button>
      </div>
    </div>
  </div>
  <table class="table-mycolor table table-bordered ">
    <thead class="thead-light">
      <tr>
        <th scope="col">Owes</th>
        <th scope="col">First</th>
        <th scope="col">Comment</th>
        <th scope="col">Amount</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ious as $iou)
        <tr>
          @if($iou->borrower_email==$userEmail)
            @if($iou->lender_email==$userEmail)
              <!-- IOU case -->
              <th scope="text-danger row">IOME</th>
              <td class='text-danger'>I owe me!!</td>
            @else
              <!-- IOU case -->
              <th scope="row">IOU</th>
              <td>{{$iou->lender_email}}</td>
            @endif
          @else
            <!-- UOME case -->
            <th scope="row">UOME</th>
            <td>{{$iou->borrower_email}}</td>
        @endif
            <td>{{$iou->comment}}</td>
            <td>{{$iou->amount}}</td>
            <td>{{$iou->due_date}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
            
@endsection

@section('footer')
@endsection