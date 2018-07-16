@extends('layouts.app')

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
            
            #contact input[type="text"],
            #contact input[type="email"],
            #contact input[type="tel"],
            #contact input[type="url"],
            #contact textarea,
            #contact button[type="submit"] {
              font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
            }
            
            #contact {
              background: #F6E5DC;
              padding: 25px;
              margin: 150px 0;
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
              background: #268C8A;
              color: #FFF;
              margin: 0 0 5px;
              padding: 10px;
              font-size: 15px;
            }
            
            #contact button[type="submit"]:hover {
              background: #F6E5DC;
              -webkit-transition: background 0.3s ease-in-out;
              -moz-transition: background 0.3s ease-in-out;
              transition: background-color 0.3s ease-in-out;
            }
            
            #contact button[type="submit"]:active {
              box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
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
            
           
                    </style>

@endsection

@section('content')

      <div class="form-row">
          <div class="col">
              <img src="https://aicaonline.org/wp-content/uploads/2014/08/unknownMale-469x469.jpg" class="rounded float-left" alt="unknown" width=20%>
          </div>
        </div>
    <div class="container-responsive">
      <!--User IMG input -->
        <div class="form-group">
          <label for="exampleFormControlFile1">Example file input</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
      </form>
      <!--table needs to be hooked up the database-->
    <form>
        <div class="form-row align-items-center">
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInput">Name</label>
            <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
          </div>
          <div class="col-auto">
            <label class="sr-only" for="inlineFormInputGroup">Username</label>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">@</div>
              </div>
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
            </div>
          </div>
      </form>

     
    <div id="wrapper">
        <div class="scroll">
          <div class="button">
          <button type="button" class="btn  my-custom-btn"> {{ __('Profile') }}</button>
            <button type="button" class="btn  my-custom-btn"> {{ __('Send') }}</button>
            <button type="button" class="btn  my-custom-btn"> {{ __('Save') }}</button>
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
                    <td>01.02.2018</td>
                  </tr>
                  <tr>
                    <th scope="row">PAID</th>
                    <td>Christa</td>
                    <td>Starbucks</td>
                    <td>-$10</td>
                    <td>03.05.2018</td>
                  </tr>
                  <tr>
                    <th scope="row">OWED</th>
                    <td>Patrick</td>
                    <td>Climax</td>
                    <td>$30.00</td>
                    <td>05.07.2018</td>
                  </tr>
                  <tr>
                      <th scope="row">PAID</th>
                      <td>Nikki</td>
                      <td>Golden Corral</td>
                      <td>-$25.00</td>
                      <td>01.02.2018</td>
                    </tr>
                    <tr>
                      <th scope="row">OWED</th>
                      <td>Laya</td>
                      <td>Starbucks</td>
                      <td>-$10</td>
                      <td>03.05.2018</td>
                    </tr>
                    <tr>
                      <th scope="row">OWED</th>
                      <td>Nemo</td>
                      <td>Climax</td>
                      <td>$30.00</td>
                      <td>05.07.2018</td>
                    </tr>
                  <tr>
                      <th scope="row">PAID</th>
                      <td>Ella</td>
                      <td>EarthBound</td>
                      <td>$30.00</td>
                      <td>05.07.2018</td>
                    </tr>
                </tbody>
              </table>
              <!--container div-->
            </div>
            
 <!-- <script type="application/javascript" src="/public/assets/js/script.js"></script> -->

</body>
</html>