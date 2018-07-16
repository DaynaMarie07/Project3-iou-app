@extends('layouts.contact')

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
              font-size: 12px;
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
            
            .card {
    padding-top: px;
    margin: 10px 0 px 0;
    background-color: rgba(214, 224, 226, 0.2);
    border-top-width: 0;
    border-bottom-width: 2px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card .card-heading {
    padding: 0 px;
    margin: 0;
}

.card .card-heading.simple {
    font-size: px;
    font-weight: 300;
    color: #777;
    border-bottom: 1px solid #e5e5e5;
}

.card .card-heading.image img {
    display: inline-block;
    width: 46px;
    height: 46px;
    margin-right: 15px;
    vertical-align: top;
    border: 0;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.card .card-heading.image .card-heading-header {
    display: inline-block;
    vertical-align: top;
}

.card .card-heading.image .card-heading-header h3 {
    margin: 0;
    font-size: 14px;
    line-height: 16px;
    color: #262626;
}

.card .card-heading.image .card-heading-header span {
    font-size: 12px;
    color: #999999;
}

.card .card-body {
    padding: 0 px;
    margin-top: px;
}

.card .card-media {
    padding: 0 px;
    margin: 0 -14px;
}

.card .card-media img {
    max-width: 100%;
    max-height: 100%;
}

.card .card-actions {
    min-height: 30px;
    padding: 0 px px px;
    margin: px 0 0 0;
}

.card .card-comments {
    padding: px;
    margin: 0;
    background-color: #f8f8f8;
}

.card .card-comments .comments-collapse-toggle {
    padding: 0;
    margin: 0 px 12px px;
}

.card .card-comments .comments-collapse-toggle a,
.card .card-comments .comments-collapse-toggle span {
    padding-right: 5px;
    overflow: hidden;
    font-size: 12px;
    color: #999;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.card-comments .media-heading {
    font-size: 13px;
    font-weight: bold;
}

.card.people {
    position: relative;
    display: inline-block;
    width: 170px;
    height: 300px;
    padding-top: 0;
    margin-left: px;
    overflow: hidden;
    vertical-align: top;
}

.card.people:first-child {
    margin-left: 0;
}

.card.people .card-top {
    position: absolute;
    top: 0;
    left: 0;
    display: inline-block;
    width: 170px;
    height: 150px;
    background-color: #ffffff;
}

.card.people .card-top.green {
    background-color: #53a93f;
}

.card.people .card-top.blue {
    background-color: #427fed;
}

.card.people .card-info {
    position: absolute;
    top: 150px;
    display: inline-block;
    width: 100%;
    height: 101px;
    overflow: hidden;
    background: #ffffff;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.people .card-info .title {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    color: #404040;
}

.card.people .card-info .desc {
    display: block;
    margin: 8px 14px 0 14px;
    overflow: hidden;
    font-size: 12px;
    line-height: 16px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.people .card-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    display: inline-block;
    width: 100%;
    padding: 10px px;
    line-height: 29px;
    text-align: center;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: rgba(214, 224, 226, 0.2);
}

.card.hovercard .cardheader {
    background: url("/img/header.jpg");
    background-size: cover;
    height: 145px;
 
}

.card.hovercard .avatar {
    position: relative;
    top: -50px;
    margin-bottom: -50px;
}

.card.hovercard .avatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255,255,255,0.5);
}

.card.hovercard .info {
    padding: 4px 8px 10px;
}

.card.hovercard .info .title {
    margin-bottom: 4px;
    font-size: 24px;
    line-height: 1;
    color: #7777;
    vertical-align: middle;
}

.card.hovercard .info .desc {
    overflow: hidden;
    
    line-height: px;
    color: #737373;
    text-overflow: ellipsis;
}

.card.hovercard .bottom {
    padding: 0 px;
    margin-bottom: 17px;
}

.btn{ 
  border-radius: 50%; width:32px; height:32px; line-height:18px;    
 }
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
 /* .btn::before{
   position:absolute;
   top: 10px;
   left: 5px;
   background: url(/img/filler.jpg) no-repeat center center;
   width: 30px;
   height: 40px;
} */

                    </style>

@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">

                </div>
                <div class="avatar">
                    <img alt="jane doe Google Img" src="/img/filler.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="https://scripteden.com/">Jane Doe</a>
                    </div>
                    <div class="desc">Passionate designer</div>
                    <div class="desc">Curious developer</div>
                    <div alt="paid off BIG" class="desc">$240.00</div>
                    <div alt="owes sml" class="desc">$75.00</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"> {{ __('t') }}</i>
                    </a>
                    <button type="button" class="btn btn-secondary btn-sm" href=""> {{ __('f') }}</button>

                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"> {{ __('i') }}</i>
                    </a>
                    <a class="btn btn-secondary btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance">{{ __('@') }}</i>
                    </a>
                </div>
            </div>

        </div>

	</div>
</div>

     
    <div id="wrapper">
        <div class="scroll">
          <div class="button">
          <button type="button" class=" my-custom-btn btn-lg active bg-teal" role="button" aria-pressed="true"> {{ __('Send') }}</button>
            <button type="button" class=" my-custom-btn btn-lg active" role="button" aria-pressed="true"> {{ __('Request') }}</button>
            <button type="button" class=" my-custom-btn btn-lg active" role="button" aria-pressed="true" > {{ __('Contact') }}</button>
          </div>
        </div>
        <div class="col">
            <div class="table-responsive">
              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">PAID</th>
                    <td>Becca</td>
                    <td>Golden Corral</td>
                    <td>-$25.00</td>
                    <td>01.02.18</td>
                  </tr>
                  <tr>
                    <th scope="row">PAID</th>
                    <td>Christa</td>
                    <td>Starbucks</td>
                    <td>-$10</td>
                    <td>03.05.18</td>
                  </tr>
                  <tr>
                    <th scope="row">OWED</th>
                    <td>Patrick</td>
                    <td>Climax</td>
                    <td>$30.00</td>
                    <td>05.07.18</td>
                  </tr>
                  <tr>
                      <th scope="row">PAID</th>
                      <td>Nikki</td>
                      <td>Golden Corral</td>
                      <td>-$25.00</td>
                      <td>01.02.18</td>
                    </tr>
                    <tr>
                      <th scope="row">OWED</th>
                      <td>Laya</td>
                      <td>Starbucks</td>
                      <td>-$10</td>
                      <td>03.05.18</td>
                    </tr>
                    <tr>
                      <th scope="row">OWED</th>
                      <td>Nemo</td>
                      <td>Climax</td>
                      <td>$30.00</td>
                      <td>05.07.18</td>
                    </tr>
                  <tr>
                      <th scope="row">PAID</th>
                      <td>Ella</td>
                      <td>EarthBound</td>
                      <td>$30.00</td>
                      <td>05.07.18</td>
                    </tr>
                </tbody>
              </table>
              <!--container div-->
            </div>
            
@endsection