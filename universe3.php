<?php
  require('server/server.php');
  include('inc/header.php');
      if (empty($_SESSION['adminId'])) {
      header('Location: universe.php');
    }

  if(isset($_POST['delete'])){
    $delete_id = mysqli_real_escape_string($db, $_POST['delete_id']);
    

    $query = "DELETE FROM posts WHERE id = {$delete_id}";

    if (mysqli_query($db, $query)) {
      header('Location: universe2.php');
    }else{
      echo "Your post was not deleted";
    }

  }

  $id = mysqli_real_escape_string($db, $_GET['id']);

  $query = 'SELECT * FROM posts WHERE id=' .$id;
  $result = mysqli_query($db, $query);
  $post = mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  mysqli_close($db);
?>
<div class="container">
    <a class="btn btn-secondary" href="universe2.php">Go back</a>
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-8">
          <h2 class="header" id="news-header">News</h2>
              <div class="content" id="news">
                  <h1><?php echo $post['title'];?></h1>
                    <small>Created on <?php echo $post['created_at']?> 
                    <br>
                    By 
                    <?php echo $post['author'];?></small>
                    <div class='row'>
                    <div class='col-md-6 col-sm-6 order-6'>
                        <img class='img-fluid'<?php echo "src='{$post['image']}'"?>>
                    </div>

                    </div>
                        <p class="lead"><?php echo $post['introduction']?></p>
                        <p class="lead"><?php echo $post['body']?></p>
                        <p class="lead"><?php echo $post['conclusion']?></p>
                    <a href="universe4.php?id=<?php echo $post['id'];?>" class="btn btn-primary">Edit</a>
                    <br>
                    <br>
                    <hr>
                    <div class="btn-group">
						      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Delete<span class="caret"></span></button>
					    	  <ul class="dropdown-menu" role="menu">
                      <li> Are you sure?</li>
                      <li>
                            <form method="POST" action="universe3.php">
                                <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
                                <input type="submit" name="delete" value="Yes" class="btn btn-sm btn-success">
                            </form>
                      </li>     
						      </ul>
              </div>
              </div>
              <br>
              
             
        </div>
    </div>      
</div>
<?php
    include('inc/footer.php');
?>