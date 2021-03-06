<?php
  
  session_start();
  $id = $_SESSION['userid'];
  if(!isset($_SESSION["userid"]) ){
    header("location:./login.html");
  }

?>


<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
  
  <title>TrackFox</title>

  <!-- Loading Bootstrap -->
  <link href="./css/vendor/bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="./js/vendor/jquery.min.js"></script>
  
  <!-- Loading Angular -->
  <script type="text/javascript" src="./js/angular.min.js"></script>
  <!--script src='./js/ng-grid.js'></script-->


  <!-- Loading Flat UI -->
  <link href="./css/flat-ui.css" rel="stylesheet">
</head>

<body data-ng-app='app'>

  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
          <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="#">TrackFox</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-01">
        <ul class="nav navbar-nav navbar-center">
          <!-- Default Navbar Button -->
          <a class="btn btn-primary navbar-btn" href="./account.html" type="button">Account</a>
          <!-- Small Navbar Button -->
          <a class="btn btn-default navbar-btn" href="./statistics.html" type="button">Statistics</a>
          <!-- Extra Small Navbar Button -->
          <a class="btn btn-primary navbar-btn" href="./gps.html" type="button">GPS</a>
        </ul>
        <ul class="nav navbar-nav navbar-right">
         <button class="btn btn-danger navbar-btn" type="button"><a href='./scripts/logout.php'>Sign Out!</button>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav><!-- /navbar -->
    
    

    <div class='panel panel-default' data-ng-controller='cotController'>
      <div class='panel-heading'>
        <h1 class='panel-title'>
          <a data-toggle='collapse' data-parent='#accordion' href='#collapseThree'>
            Account
          </a>
        </h1>
      </div>
      
      <div class='panel-body'>
        <div class='row'>
          <div class='col-md-12'>
            <div class='table-responsive'>
              <table class='table'>
                <thead>
                  <td>
                    <b>Device ID</b>
                  </td>
                  <td>
                    <b>Session ID</b>
                  </td>
                  <td>
                    <b>Latitude</b>
                  </td>
                  <td>
                    <b>Longitude</b>
                  </td>
                  <td>
                    <b>Date added</b>
                  </td>
                </thead>
                <tr ng-repeat='device in devices'>
                  <td>
                    {{device.deviceid}}
                  </td>
                  <td>
                    {{device.sessionid}}
                  </td>
                  <td>
                    {{device.lat}}
                  </td>
                  <td>
                   {{device.long}}
                 </td>
                 <td>
                   {{device.datetime}}
                 </td>
               </tr>
             </table>
           </div>
         </div>
       </div>
     </div>
   </div>
</div>




<footer>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/flat-ui.min.js"></script>
    <script src="./js/stat.js"></script>
  </body>
</body>
</html>