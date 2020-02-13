<?php
   require('server/server.php');
   include('inc/header.php');
        if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
     }

    
  //edit post
  if(isset($_POST['update'])){
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    
  
    if (isset ($name)){
      if (!empty($name)){
  
        $location = 'images/image/';
      }
    }
        if(move_uploaded_file($tmp_name, $location.$name)){
          echo 'Uploaded';
      }
    $update_id = mysqli_real_escape_string($db, $_POST['update_id']);
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $author = mysqli_real_escape_string($db, $_POST['author']);
    $introduction = mysqli_real_escape_string($db, $_POST['introduction']);
    $body = mysqli_real_escape_string($db, $_POST['body']);
    $conclusion = mysqli_real_escape_string($db, $_POST['conclusion']);
    $file = mysqli_real_escape_string($db, $_POST['image']);
    $query = "UPDATE posts SET title='$title', author='$author', introduction='$introduction', body='$body', conclusion='$conclusion', image='$location$name' WHERE id = {$update_id}";
    
    if (mysqli_query($db, $query)) {
      header('Location: universe2.php');
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
        <h1>Edit Post</h1>
        <form method="POST" action="universe4.php" enctype="multipart/form-data">
            <div class="form-group">
            <label>title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>" required>
            </div>

            <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo $post['author'];?>" required>
            </div>

            <div class="form-group">
            <label>Image (important!)</label>
                            
            <input type="file" name="file" class="form-control" value="<?php echo $post['image'];?>" required>
            </div>
            <div class="form-group">
            <label>Introduction</label>
            <textarea name="introduction" class="form-control"><?php echo $post['introduction']; ?></textarea required>
            </div>
            <div class="form-group">
            <label>Body</label>
            <textarea name="introduction" class="form-control"><?php echo $post['body']; ?></textarea required>
            </div>
                            
            <div class="form-group">
            <label>Conclusion</label>
            <textarea name="body" class="form-control"><?php echo $post['conclusion']; ?></textarea required>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
            <input type="submit" name="update" value="update" class="btn btn-primary">
        </form>
</div>
<?php
  include('inc/footer.php');
?>