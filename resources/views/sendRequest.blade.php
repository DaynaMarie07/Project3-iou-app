@extends('layouts.contact')
@section('pagestyles')
<style>@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

body {
    padding: 0px 0px 60px;
 
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
.panel > .list-group .list-group-item:first-child {
    /*border-top: 1px solid rgb(204, 204, 204);*/
}
@media (max-width: 767px) {
    .visible-xs {
        display: inline-block !important;
    }
    .block {
        display: block !important;
        width: 100%;
        height: 1px !important;
    }
}
#back-to-bootsnipp {
    position: fixed;
    top: 10px; right: 10px;
}


.c-search > .form-control {
   border-radius: 0px;
   border-width: 0px;
   border-bottom-width: 1px;
   font-size: 1.3em;
   padding: 12px 12px;
   height: 44px;
   outline: none !important;
}
.c-search > .form-control:focus {
    outline:0px !important;
    -webkit-appearance:none;
    box-shadow: none;
}
.c-search > .input-group-btn .btn {
   border-radius: 0px;
   border-width: 0px;
   border-left-width: 1px;
   border-bottom-width: 1px;
   height: 44px;
}


.c-list {
    padding: 0px;
    min-height: 44px;
}
.title {
    display: inline-block;
    font-size: 1.7em;
    font-weight: bold;
    padding: 5px 15px;
}
ul.c-controls {
    list-style: none;
    margin: 0px;
    min-height: 44px;
}

ul.c-controls li {
    margin-top: 8px;
    float: left;
}

ul.c-controls li a {
    font-size: 1.7em;
    padding: 11px 10px 6px;   
}
ul.c-controls li a i {
    min-width: 24px;
    text-align: center;
}

ul.c-controls li a:hover {
    background-color: rgba(51, 51, 51, 0.2);
}


.name {
    font-size: 1.7em;
    font-weight: 700;
}

.c-info {
    padding: 5px 10px;
    font-size: 1.25em;
}
/* .img{
    border-radius: 50%;
     width:32px; 
     height:32px; line-height:18px; 
} */
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
.btn-custom{
    background-color: #8ABAFF;
}
 
.img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 80%;
    
}
</style>
@endsection
@section('content')
<body> 
    <div class ="img"> 

          <div class="col">
              <img src="https://aicaonline.org/wp-content/uploads/2014/08/unknownMale-469x469.jpg" class="img" alt="unknown" width=20% >
          </div>
        </div>
   
    <form>
       <div class = "input">
            <div class="form-row-3">
                <select class="form-control">
                    <option>IOU</option>
                    <option>UOME</option>
                  </select>
            </div>
           
        </form>
  <!---bootstrap form !-->
  <form class="form-inline ">

  <label class="mr-sm-2" for="inlineFormCustomSelect">Favorites</label>
  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
    <option selected>Choose user...</option>
    <option value="1">Poe</option>
    <option value="2">Atticus</option>
    <option value="3">Shakespear</option>
  </select>

  <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
    <input type="checkbox" class="custom-control-input">
    <span class="custom-control-indicator"></span>
    <span class="custom-control-description">Remember user</span>
  </label>

  <button type="submit" class="btn btn-custom">Submit</button>
</form>
<!--another BS form!-->
<form class="form-inline">
<div class="form-inlinerow">
<div class="input[type=text]">
  <label for="example-search-input" class="col-2 col-form-label">To:</label>
  <div class="col-10">
    <input class="form-control" type="search" placeholder="Jane Doe" id="example-search-input">
  </div>
</div>

<div class="form-inline row">
  <label for="example-text-input" class="col-2 col-form-label">Comment</label>
  <div class="col-10">
      <br>
      
    <input class="form-control" type="text" placeholder="i owe you $20 for food" id="example-text-input">
  </div>
</div>
</br>
<div class="form-inline row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
  <br>
    <input class="form-control" type="email" placeholder="janeDoe@example.com" id="example-email-input">
  </div>
</div>
</br>
<div class="form-inline row">
  <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
  <div class="col-10">
  <br>
    <input class="form-control" type="tel" placeholder="1-(555)-555-5555" id="example-tel-input">
  </div>
</div>
</br>
<div class="form-inline row">
  <label for="example-number-input" class="col-2 col-form-label">Amount</label>
  <div class="col-10">
  <br>
    <input class="form-control" type="number" placeholder="$20.00" id="example-number-input">
  </div>
</div>
</br>
<div class="form-inline row">
  <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
  <div class="col-10">
  <br>
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
  </div>
</div>
</div>
</br>
</form>


        <!-- <script type="application/javascript" src="/public/assets/js/script.js"></script> -->
  
 @endsection