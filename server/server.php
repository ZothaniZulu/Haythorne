<?php
	session_start();
	
	//contact form
	$contact_name = "";
	$cellphone = "";
	$email = "";
	$message = "";

	//question paper requests
	$rname = "";
	$grade = "";
	$term = "";
	$subject = "";
	$yr = "";
	$about ="";
	//admin mode
	$adminId = "";
	$pwd = "";
	$wrong = "";

	//database connection
	// define('DBHOST', 'localhost');
	// define('DBUSER', 'root');
	// define('DBPASS', '');
	// define('DBNAME', 'hss');
	// $db = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
	
	$db = mysqli_connect("localhost","root","","hss");
	
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }else{
		 
	  }
	//admin login
	if(isset($_POST['admin'])){
		$adminId = stripslashes(mysql_real_escape_string($_POST['adminId']));
		$pwd = stripslashes(mysql_escape_string($_POST['pwd']));
		$pwd = $pwd;
		$query = "SELECT * FROM controller WHERE pwd='$pwd' AND adminId='$adminId'";
		$result = mysqli_query($db, $query);
		if (mysqli_num_rows($result) == 1 ) {
			$_SESSION['adminId'] = $adminId;
			$_SESSION['pwd'] = $pwd;
			header('location: universe2.php');
		}else{
			$wrong = "<div class='alert alert-danger'><b><em>Wrong Admin name/password.</em></b></div>";	
		}
	}

	//log the user out
	if(isset($_POST['outAdmin'])){
		session_start();
		session_destroy();
		session_unset();
		header('Location: universe.php');
	}

	//request page
	if(isset($_POST['ask'])){
		$subject = mysqli_escape_string($db, $_POST['subject']);
		$grade = mysqli_escape_string($db, $_POST['grade']);
		$term = mysqli_escape_string($db, $_POST['term']);
		$rname = mysqli_escape_string($db, $_POST['rname']);
		$yr = mysqli_escape_string($db, $_POST['yr']);

		$req = "INSERT INTO requests (subject, grade, term, rname, yr) VALUES('$subject', '$grade', '$term', '$rname', '$yr')";

		if(mysqli_query($db, $req)){
			$response = 'Thank you '.$rname.', we will upload the paper soon.';
			$theClass = 'alert-info alert-dismissible';
		}	
	}

	//contact page
	if(isset($_POST['contact'])){
		$contact_name = stripslashes(mysqli_escape_string($db, $_POST['contact_name']));
		$cellphone = stripslashes(mysqli_escape_string($db, $_POST['cellphone']));
		$email = stripslashes(mysqli_escape_string($db, $_POST['email']));
		$message = stripslashes(mysqli_escape_string($db, $_POST['message']));
		$insert = "INSERT INTO queries (contact_name, cellphone, email, message) VALUES('$contact_name', '$cellphone', '$email', '$message')";
		if(mysqli_query($db, $insert)){
			$msg = 'Thank you '.$contact_name.', your message was submitted.';
			$msgClass = 'alert-info alert-dismissible';
		}	
	}
	
?>



