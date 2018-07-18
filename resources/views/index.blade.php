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
              max-width: 400px;
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
                font-size: 15px; 
                margin: 10px;
                margin-bottom: 17px; 

                
                }
                th, td {
                    padding: 15px;
                    text-align: left;
                }
           
                    </style>
@section('content')
       
       <div class = "container">
           <table class="table table-bordered table-dark">
             <thead class="thead-light">
                  
       </div>    
     
       <div id="wrapper">
        <div class="scroll">
          <div class="my-custom-btn">
          <button type="button" class="my-custom-btn btn-lg active" role="button" aria-pressed="true"> {{ __('Send') }}</button>
            <button type="button" class="my-custom-btn btn-lg active" role="button" aria-pressed="true"> {{ __('Request') }}</button>
            <button type="button" class="my-custom-btn btn-lg active" role="button" aria-pressed="true" > {{ __('Contact') }}</button>
          </div>
        </div>
        <div class="col">
            <div class="table-responsive">
              <table class="th td">
              <tr>
                       <th scope="row">IOU</th>
                       <td>Amy</td>
                       <td>Olive Garden</td>
                       <td>-$25.00</td>
                       <td>01.02.2018</td>
                   </tr>
                   <tr>
                       <th scope="row">IOU</th>
                       <td>Kaitlyn</td>
                       <td>Starbucks</td>
                       <td>-$10</td>
                       <td>03.05.2018</td>
                   </tr>
                   <tr>
                       <th scope="row">UOME</th>
                       <td>Julie</td>
                       <td>Outback</td>
                       <td>$30.00</td>
                       <td>05.07.2018</td>
                   </tr>
                <tbody>
                  <tr>
                    <th scope="row">IO</th>
                    <td>Jane</td>
                    <td>Golden Corral</td>
                    <td>-$25.00</td>
                    <td>01.02.18</td>
                  </tr>
                  <tr>
                    <th scope="row">IO</th>
                    <td>John</td>
                    <td>Starbucks</td>
                    <td>-$10</td>
                    <td>03.05.18</td>
                  </tr>
                  <tr>
                    <th scope="row">OWED</th>
                    <td>Matt</td>
                    <td>Climax</td>
                    <td>$30.00</td>
                    <td>05.07.18</td>
                  </tr>
                  <tr>
                      <th scope="row">IO</th>
                      <td>Amelia</td>
                      <td>Golden Corral</td>
                      <td>-$25.00</td>
                      <td>01.02.18</td>
                    </tr>
                    <tr>
                      <th scope="row">OWED</th>
                      <td>Amy</td>
                      <td>Starbucks</td>
                      <td>-$10</td>
                      <td>03.05.18</td>
                    </tr>
                    <tr>
                      <th scope="row">OWED</th>
                      <td>Chase</td>
                      <td>Climax</td>
                      <td>$30.00</td>
                      <td>05.07.18</td>
                    </tr>
                  <tr>
                      <th scope="row">IO</th>
                      <td>Alex</td>
                      <td>EarthBound</td>
                      <td>$30.00</td>
                      <td>05.07.18</td>
                    </tr>
                </tbody>
              </table>
              <!--container div-->
            </div>
            
@endsection

@section('footer')
@endsection