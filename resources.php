<?php
  include('server/server.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Haythorne Secondary School</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/haythorne.css">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">  
</head>
<!-- Created by Zothani Zulu -->
<body>
  <nav class="navbar navbar-dark" style ="background: #065ca1;" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="index.php">
          <img class="img-logo" src="images/badge.png" alt="" width="80" height="95" id="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="nav">
              <ul class="navbar-nav" id="toggle">
                  <li class="nav-item">
                      <a class="nav-link" href="index.php"><i class="fa fa-institution">Home</i></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="resources.php"><i class="fa fa-book">Resources</i></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="students.php"><i class="fa fa-graduation-cap">Students</i></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.php"><i class="fa fa-phone-square"> Contact</i></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="about.php"><i class="fa fa-archive">About</i></a>
                  </li>  
              </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-8"> 
            <h2 class="header" id="resources-first">Resources</h2>
              <div class="content" id="resources-body">
                    <a href="classnotes.php" class="btn btn-info btn-lg">Class Notes</a>
                    <br>
                    <br>
                    <a href="past_papers.php" class="btn btn-secondary btn-lg">Past Papers</a>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
              </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<?php
  include('inc/footer.php')
?>
