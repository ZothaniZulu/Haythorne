<?php
  include('server/academics.php');
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
    <nav class="navbar navbar-dark fixed-top" style ="background: #065ca1;" role="navigation">
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
           
    <header class="bg-primary text-white" id="stuff">
        <div class="container text-center">
            <h1 id="banner-text">View your latest results</h1>
            <p class="lead">Enter your details below</p>
        </div>
    </header>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="sign-up-image">
	  		        <img src="images/grad.png" class="img-responsive" alt="Responsive image">
	          </div>
	  				<form class="form-signin" method="POST" action="students.php">
                  <h3 class="form-signin-heading">Student</h3>
                  <?php echo $error;?>
                  <input type="text" id="inputName" class="form-control" name="lurits_no" value="<?php echo isset($_POST['lurits_no']) ? $lurits_no: '';?>" placeholder="Lurits Number" required>
                  <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="student">Login</button>
	  			  </form>	
        </div>
    </div> 
</div>
<footer class="py-4" style ="background: #065ca1;">
      <div class="container-fluid">
          <p class="m-0 text-center text-white" id="footer-text">Haythorne Secondary &copy; 2018. Website created by ex-Haythorne learner, <a href="" id="developer"><b>Zothani Zulu</b></a>, 2012-2016.</p>
      </div>
</footer>           
            
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>  
</body>
</html>