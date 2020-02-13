<?php
  include('server/server.php');
  include('inc/header.php');
?>

    <div id="sign-up-image">
		    <img src="images/profile.png" class="img-responsive" alt="Responsive image">
	  </div>
		<form class="form-signin" method="POST" action="universe.php">
					<h3 class="form-signin-heading">Administrator</h3>
     		  <?php echo $wrong;?>
					<input type="text" id="inputName" class="form-control" name="adminId" placeholder="Admin name" required>
					<input type="password" id="inputpassword" class="form-control" name="pwd" placeholder="Password" required>
					<button class="btn btn-lg btn-primary btn-block" type="submit" name="admin">Login</button>
		</form>	

<?php 
  include('inc/footer.php')
?>