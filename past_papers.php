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
          <img class="img-logo" src="images/badgeimg.png" alt="" width="80" height="95" id="logo">
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
  <?php if($rname = "$rname"):?>
    <br>
      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-8">
            <div class="alert <?php echo $theClass; ?>">
              <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
              <b><?php echo $response;?></b>
            </div>
        </div>
      </div>
  <?php endif;?>

<h2>Past Exam Papers</h2> 
  <div class="row">
    <div class="col-md-8 col-sm-8 col-xs-8"> 
        <h2 class="header" id="resources-header">Select your grade and click on a subject</h2>
          <div class="content" id="past-papers">
            <div class="btn-group">
						    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Grade 8<span class="caret"></span>
						    </button>
					    	<ul class="dropdown-menu" role="menu">
                    <li><a href="resources/grade8/pages/grade_8_english.php">English Home Language</a></li>
                    <li><a href="resources/grade8/pages/grade_8_isizulu.php">IsiZulu First Additional Language</a></li>
                    <li><a href="resources/grade8/pages/grade_8_afrikaans.php">Afrikaans First Additional Language</a></li>
                    <li><a href="resources/grade8/pages/grade_8_ca.php">Creative Arts</a></li>
                    <li><a href="resources/grade8/pages/grade_8_lifeo.php">Life Orientation</a></li>
                    <li><a href="resources/grade8/pages/grade_8_maths.php">Mathematics</a></li>
                    <li><a href="resources/grade8/pages/grade_8_geo.php">Geography</a></li>
                    <li><a href="resources/grade8/pages/grade_8_ss.php">Social Sciences</a></li>
                    <li><a href="resources/grade8/pages/grade_8_ems.php">Economic Management Sciences</a></li>
                    <li><a href="resources/grade8/pages/grade_8_tech.php">Technology</a></li>
                    <li><a href="resources/grade8/pages/grade_8_ns.php">Natural Sciences</a></li>   
						    </ul>
                </div>
                <br>
                <br>
                <div class="btn-group">
						    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Grade 9<span class="caret"></span>
						    </button>
					    	<ul class="dropdown-menu" role="menu">
                    <li><a href="resources/grade9/pages/grade_9_english.php">English Home Language</a></li>
                    <li><a href="resources/grade9/pages/grade_9_isizulu.php">IsiZulu First Additional Language</a></li>
                    <li><a href="resources/grade9/pages/grade_9_afrikaans.php">Afrikaans First Additional Language</a></li>
                    <li><a href="resources/grade9/pages/grade_9_ca.php">Creative Arts</a></li>
                    <li><a href="resources/grade9/pages/grade_9_lifeo.php">Life Orientation</a></li>
                    <li><a href="resources/grade9/pages/grade_9_maths.php">Mathematics</a></li>
                    <li><a href="resources/grade9/pages/grade_9_geo.php">Geography</a></li>
                    <li><a href="resources/grade9/pages/grade_9_ss.php">Social Sciences</a></li>
                    <li><a href="resources/grade9/pages/grade_9_ems.php">Economic Management Sciences</a></li>
                    <li><a href="resources/grade9/pages/grade_9_tech.php">Technology</a></li>
                    <li><a href="resources/grade9/pages/grade_9_ns.php">Natural Sciences</a></li>   
						    </ul>
                </div>
                <br>
                <br>
                <div class="btn-group">
						    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Grade 10<span class="caret"></span>
						    </button>
					    	<ul class="dropdown-menu" role="menu">
                    <li><a href="resources/grade10/pages/grade_10_english.php">English Home Language</a></li>
                    <li><a href="resources/grade10/pages/grade_10_isizulu.php">IsiZulu First Additional Language</a></li>
                    <li><a href="resources/grade10/pages/grade_10_afrikaans.php">Afrikaans First Additional Language</a></li>
                    <li><a href="resources/grade10/pages/grade_10_lifeo.php">Life Orientation</a></li>
                    <li><a href="resources/grade10/pages/grade_10_mathslit.php">Mathematics Literacy</a></li>
                    <li><a href="resources/grade10/pages/grade_10_mathematics.php">Mathematics</a></li>
                    <li><a href="resources/grade10/pages/grade_10_accounting.php">Accounting</a></li>
                    <li><a href="resources/grade10/pages/grade_10_bs.php">Business Studies</a></li>
                    <li><a href="resources/grade10/pages/grade_10_economics.php">Economics</a></li>
                    <li><a href="resources/grade10/pages/grade_10_tourism.php">Tourism</a></li>
                    <li><a href="resources/grade10/pages/grade_10_history.php">History</a></li>
                    <li><a href="resources/grade10/pages/grade_10_geo.php">Geography</a></li>
                    <li><a href="resources/grade10/pages/grade_10_consumer.php">Consumer Studies</a></li>
                    <li><a href="resources/grade10/pages/grade_10_egd.php">Engineering Graphic Designs</a></li>
                    <li><a href="resources/grade10/pages/grade_10_cat.php">Computer Applications Technology</a></li>
                    <li><a href="resources/grade10/pages/grade_10_lifes.php">Life Sciences</a></li>
                    <li><a href="resources/grade10/pages/grade_10_physics.php">Physical Sciences</a></li>
						    </ul>
                </div>
                <br>
                <br>
                <div class="btn-group">
						    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Grade 11<span class="caret"></span>
						    </button>
					    	<ul class="dropdown-menu" role="menu">
                    <li><a href="resources/grade11/pages/grade_11_english.php">English Home Language</a></li>
                    <li><a href="resources/grade11/pages/grade_11_isizulu.php">IsiZulu First Additional Language</a></li>
                    <li><a href="resources/grade11/pages/grade_11_afrikaans.php">Afrikaans First Additional Language</a></li>
                    <li><a href="resources/grade11/pages/grade_11_lifeo.php">Life Orientation</a></li>
                    <li><a href="resources/grade11/pages/grade_11_mathslit.php">Mathematics Literacy</a></li>
                    <li><a href="resources/grade11/pages/grade_11_mathematics.php">Mathematics</a></li>
                    <li><a href="resources/grade11/pages/grade_11_accounting.php">Accounting</a></li>
                    <li><a href="resources/grade11/pages/grade_11_bs.php">Business Studies</a></li>
                    <li><a href="resources/grade11/pages/grade_11_economics.php">Economics</a></li>
                    <li><a href="resources/grade11/pages/grade_11_tourism.php">Tourism</a></li>
                    <li><a href="resources/grade11/pages/grade_11_history.php">History</a></li>
                    <li><a href="resources/grade11/pages/grade_11_geo.php">Geography</a></li>
                    <li><a href="resources/grade11/pages/grade_11_consumer.php">Consumer Studies</a></li>
                    <li><a href="resources/grade11/pages/grade_11_egd.php">Engineering Graphic Designs</a></li>
                    <li><a href="resources/grade11/pages/grade_11_cat.php">Computer Applications Technology</a></li>
                    <li><a href="resources/grade11/pages/grade_11_lifes.php">Life Sciences</a></li>
                    <li><a href="resources/grade11/pages/grade_11_physics.php">Physical Sciences</a></li>
						    </ul>
                </div>
                <br>
                <br>
                <div class="btn-group">
						    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Grade 12<span class="caret"></span>
						    </button>
					    	<ul class="dropdown-menu" role="menu">
                    <li><a href="resources/grade12/pages/grade_12_english.php">English Home Language</a></li>
                    <li><a href="resources/grade12/pages/grade_12_isizulu.php">IsiZulu First Additional Language</a></li>
                    <li><a href="resources/grade12/pages/grade_12_afrikaans.php">Afrikaans First Additional Language</a></li>
                    <li><a href="resources/grade12/pages/grade_12_lifeo.php">Life Orientation</a></li>
                    <li><a href="resources/grade12/pages/grade_12_mathslit.php">Mathematics Literacy</a></li>
                    <li><a href="resources/grade12/pages/grade_12_mathematics.php">Mathematics</a></li>
                    <li><a href="resources/grade12/pages/grade_12_accounting.php">Accounting</a></li>
                    <li><a href="resources/grade12/pages/grade_12_bs.php">Business Studies</a></li>
                    <li><a href="resources/grade12/pages/grade_12_economics.php">Economics</a></li>
                    <li><a href="resources/grade12/pages/grade_12_tourism.php">Tourism</a></li>
                    <li><a href="resources/grade12/pages/grade_12_history.php">History</a></li>
                    <li><a href="resources/grade12/pages/grade_12_geo.php">Geography</a></li>
                    <li><a href="resources/grade12/pages/grade_12_consumer.php">Consumer Studies</a></li>
                    <li><a href="resources/grade12/pages/grade_12_egd.php">Engineering Graphic Designs</a></li>
                    <li><a href="resources/grade12/pages/grade_12_cat.php">Computer Applications Technology</a></li>
                    <li><a href="resources/grade12/pages/grade_12_lifes.php">Life Sciences</a></li>
                    <li><a href="resources/grade12/pages/grade_12_physics.php">Physical Sciences</a></li>
						    </ul>
                </div>
                </div>
                </div>
          </div>
      </div>
    </div>
  </div>
<br>
<br>
<br>
</div>
<?php
  include('inc/footer.php')
?>