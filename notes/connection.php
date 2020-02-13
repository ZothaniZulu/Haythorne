<?php
  session_start();

  //error variable
  $error ="";
  $errors ="";
	$errorMessage = "";

  //educator mode
	$teacher = "";
  $pswd = "";

  //table
  $table ="";
  $direction ="";
  $paper ="";
  $success ="";

  //connection to the database
  define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'class_notes');
  $db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
  //educator login
	if(isset($_POST['notes'])){
		$teacher = mysql_real_escape_string($_POST['teacher']);
		$pswd = mysql_escape_string($_POST['pswd']);
		$pswd = $pswd;
		$query = "SELECT * FROM teachers WHERE pswd='$pswd' AND teacher='$teacher'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1 ) {
			$_SESSION['teacher'] = $teacher;
			$_SESSION['pswd'] = $pswd;
			$_SESSION['success'] = "You are signed in";
			header('location: add_notes2.php');
		}else{
			$errorMessage = "<div class='alert alert-danger'><b><em>Incorrect name/password.</em></b></div>";
		}
  }
  
	//log teacher out
	if(isset($_POST['outTeacherNotes'])){
		session_start();
		session_destroy();
		session_unset();
		header('Location: index.php');
    }
    
    //Upload a file to resources
    /* This is the greatest block of code I've ever written */
    if(isset($_POST['upload_notes'])){
      $name = $_FILES['file']['name'];
      $tmp_name = $_FILES['file']['tmp_name'];
      $fileExt = explode('.', $name);
      $fileActualExt = end($fileExt);
      $newFileName = uniqid('', true).".".$fileActualExt;
      $location = 'notes/files/'.$newFileName;
      move_uploaded_file($tmp_name, $location);
      $grade = $_POST['grade'];
      $subject =  $_POST['subject'];
      $table = strtolower($grade.'_'.$subject);
      $direction = "$location";
      $paper = $_FILES['file']['name'];
      $sql = "INSERT INTO $table(direction, paper) VALUES('$direction', '$paper')";
      if (mysqli_query($db, $sql)) {
      
        $errors = "<div class='alert alert-success'><b><em> $paper was uploaded successfully</em></b></div>"; 
         
        }else{
          $errors = "<div class='alert alert-danger'><b><em>upload failed</em></b></div>";
          
        }
        
    }

?>