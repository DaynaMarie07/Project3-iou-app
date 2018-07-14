<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Profile</title> 
    
    <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    
                  <div class="bg-dark p-4 ">
                    <h4 class="text-white">Collapsed content</h4>
                    <span class="text-muted">Welcome to the best IOU app out there.</span>
                       <ul>
                           <li>About</li>
                           <li>Login</li>
                           <li>Profile</li>
                       </ul>
                    </div>
                </div>
                <nav class="navbar navbar-dark bg-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <img src="../images/iou1" alt="" style="width:120px;height:60px;" >
                </nav>
              </div>
</head>
  <body>
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
          <button type="button" class="btn  my-custom-btn"><a href="sendRequest.html">Request
            <br>$</a></button>
            <button type="button" class="btn  my-custom-btn"><a href="sendRequest.html" >Send
            <br>$</a></button>
            <button type="button" class="btn  my-custom-btn"> <a href="#"> Save
            <br>$</a></button>
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