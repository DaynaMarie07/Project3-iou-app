@extends('layouts.app')

@section('title', 'Send and Request')

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
            
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea,
            #contact button[type="submit"] {
              font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
            }
            
            #contact {
              background: #FFF4EE;
              padding: 25px;
              margin: 100px 0;
              box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
            
            #contact h3 {
              display: block;
              font-size: 30px;
              font-weight: 300;
              margin-bottom: 10px;
            }
            
            #contact h4 {
              margin: 5px 0 15px;
              display: block;
              font-size: 13px;
              font-weight: 400;
            }
            
            fieldset {
              border: medium none !important;
              margin: 0 0 10px;
              min-width: 100%;
              padding: 0;
              width: 100%;
              
            }
            
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea {
              width: 100%;
              border: 1px solid #ccc;
              background: #FFF;
              margin: 0 0 5px;
              padding: 10px;
              border-radius: 5px;
            }
            
            #contact input[type="text"]:hover,
            #contact input[type="email"]:hover,
            #contact input[type="tel"]:hover,
            #contact input[type="url"]:hover,
            #contact textarea:hover {
              -webkit-transition: border-color 0.3s ease-in-out;
              -moz-transition: border-color 0.3s ease-in-out;
              transition: border-color 0.3s ease-in-out;
              border: 1px solid #aaa;
            }
            
            #contact textarea {
              height: 100px;
              max-width: 100%;
              resize: none;
            }
            
            #contact button[type="submit"] {
              cursor: pointer;
              width: 100%;
              border: none;
              background:  #17a2b8;
              color: #FFF;
              margin: 0 0 5px;
              padding: 10px;
              font-size: 15px;
            }
            
            #contact button[type="submit"]:hover {
              background: #66CFCC;
              -webkit-transition: background 0.3s ease-in-out;
              -moz-transition: background 0.3s ease-in-out;
              transition: background-color 0.3s ease-in-out;
            }
            
            #contact button[type="submit"]:active {
              box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
              background-color: #17a2b8;
            }
            
            .copyright {
              text-align: center;
            }
            
            #contact input:focus,
            #contact textarea:focus {
              outline: 0;
              border: 1px solid #aaa;
            }
            
            ::-webkit-input-placeholder {
              color: #888;
            }
            
            :-moz-placeholder {
              color: #888;
            }
            
            ::-moz-placeholder {
              color: #888;
            }
            
            :-ms-input-placeholder {
              color: #888;
            }
            .input{
                width: 100%;
                padding: 5px 10px;
                font-size: 1.25em;
                background-color:#E3FFFD;
                color: #kkk;

            }
            .form-inline{
                width: 100%;
            }
            .custom-select{
                border: 3px black;
                background-color: #FFFFFF;
            }
 
           
                    </style>

@endsection
@section('content')

    <div class="container">  
        <form id="contact" action="{{ $iouCreateAction }}" method="post">
        @csrf
        <h3>
            @if($type=='IOU')
              Send
            @else
              Recieve
            @endif
        </h3>
        <h4></h4>
        
        <fieldset>
            <input placeholder="Email Address"  name="email" type="email" tabindex="2" required>
        </fieldset>
      
        <fieldset>
            <input placeholder="Amount"  name="amount" type="number" tabindex="4" required autofocus>
        </fieldset>
        <fieldset>
            <textarea placeholder="Type your message here...."  name="comment" tabindex="5" required></textarea>
        </fieldset>
        <fieldset>
            <button  type="submit" class="contact-submit" data-submit="...Sending">
              @if($type=='IOU')
                Send
              @else
                Recieve
              @endif
            </button>
        </fieldset> 
        <p class="copyright">Created by <a href="https://colorlib.com" target="_blank" title="Colorlib">Dayna Payne</a></p>
        </form>
  </div>
@endsection
