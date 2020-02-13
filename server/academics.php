<?php
session_start();
	//student login
	$lurits_no = "";
	$password = "";
	$name = "";
	$subname = "";
	$mark = "";
	$error ="";
	$comment ="";
    $evaluation ="";
    
	//database connection
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'academics');
    $connection = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);

    //From the login page, sign student in
	if(isset($_POST['student'])){
		$lurits_no = stripslashes(mysql_real_escape_string($_POST['lurits_no']));
		$password = stripslashes(mysql_escape_string($_POST['password']));
		$password = $password;
		$query = "SELECT * FROM students WHERE password='$password' AND lurits_no='$lurits_no'";
		$result = mysqli_query($connection, $query);
		if (mysqli_num_rows($result) == 1 ) {
			$_SESSION['lurits_no'] = $lurits_no;
			$_SESSION['password'] = $password;
			$_SESSION['success'] = "You are signed in";
			header('location: my_marks.php');
		}else{
			$error = "<div class='alert alert-danger'><b><em>Wrong student number/password.</em></b></div>";	
		}
    }
    
    //log the student out
	if(isset($_POST['signout'])){
		session_start();
		session_destroy();
		session_unset();
		header('Location: students.php');
	}
    ?>