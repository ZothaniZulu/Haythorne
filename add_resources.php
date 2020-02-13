<?php
 include('resources/connection.php');
 include('inc/header.php');
?>

<div class="container">
    <h1 class="system-head">Past Papers Uploads System</h1> 
    <div id="sign-up-image">
		<img src="images/profile.png" class="img-responsive" alt="Responsive image">
	</div>
	<form class="form-signin" method="POST" action="add_resources.php">
            <h3 class="form-signin-heading">Educator</h3>
            <?php echo $errorMessage;?>
            <input type="text" id="inputName" class="form-control" name="teacher" placeholder="Username" required>
            <input type="password" id="inputPassword" class="form-control" name="pswd" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="educator">Login</button>
	</form>	
</div>
               
<?php
    include('inc/footer.php');
?>