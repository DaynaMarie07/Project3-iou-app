@extends('layouts.app')

@section('header')
@endsection

@section('content')
       
       <div class = "container">
           <table class="table table-bordered table-dark">
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
                   </tbody>
               </table>
       </div>    
   
       <div id="wrapper">
               <div class="scroll">
                 <div class="button">
                 <button type="button" class="btn  my-custom-btn"><a href="sendRequest.html">Request
                   <br>$</a></button>
                   <button type="button" class="btn  my-custom-btn"><a href="sendRequest.html" >Send
                   <br>$</a></button>
                   <button type="button" class="btn  my-custom-btn"> <a href="#"> Save
                   <br>$</a></button>
                 </div>
               </div>
@endsection

@section('footer')
@endsection