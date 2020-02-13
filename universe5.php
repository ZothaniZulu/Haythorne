<?php
  require('server/server.php');
  include('inc/header.php');
       if (empty($_SESSION['adminId'])) {
       header('Location: universe.php');
    }

  if(isset($_POST['add'])){
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
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $author = mysqli_real_escape_string($db, $_POST['author']);
    $introduction = mysqli_real_escape_string($db, $_POST['introduction']);
    $body = mysqli_real_escape_string($db, $_POST['body']);
    $conclusion = mysqli_real_escape_string($db, $_POST['conclusion']);
    $images = "$location.$name";
    $query = "INSERT INTO posts(title, author, introduction, body, conclusion, image) VALUES('$title', '$author', '$introduction', '$body', '$conclusion', '$location$name')";

   
    if (mysqli_query($db, $query)) {
      header('Location: universe2.php');
    }else{
      echo "Your post was not submitted";
      
    }

  }
 
?>

<div class="container">
<a class="btn btn-secondary" href="universe2.php">Go back</a>
          <h1>Add Post</h1>
          <form method="POST" action="universe5.php" enctype="multipart/form-data">
            <div class="form-group">
                <label>title</label>
                <input type="text" name="title" class="form-control"  placeholder="Insert title" required>
            </div>

            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control" placeholder="Name of Author" required>
            </div>

            <div class="form-group">
                <label>image</label>
                <input type="file" name="file" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Introduction</label>
                <textarea name="introduction" class="form-control" placeholder="Write an introduction" required></textarea>
            </div>

            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control" placeholder="Write main content" required></textarea>
            </div>
            <div class="form-group">
                <label>Conclusion</label>
                <textarea name="conclusion" class="form-control" placeholder="Write a conclusion" required></textarea>
                <br>
                <input type="submit" name="add" value="Add Post" class="btn btn-primary">
            </div>
          </form>
</div>

<?php
  include('inc/footer.php');
?>