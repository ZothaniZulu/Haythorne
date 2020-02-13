<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
    }
    if(isset($_POST['edit_about'])){
        $update_id = mysqli_real_escape_string($db, $_POST['update_id']);
        $body = mysqli_real_escape_string($db, $_POST['body']);
        $query = "UPDATE about SET body='$body' WHERE id = {$update_id}";
         
        if (mysqli_query($db, $query)) {
            header('Location: update_about.php');
          }
    }
   
        $id = mysqli_real_escape_string($db, $_GET['id']);
        $query = 'SELECT * FROM about WHERE id='.$id;
        $result = mysqli_query($db, $query);
        $about = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($db);
?>
    <div class="container">
    <a class="btn btn-secondary" href="universe2.php">Go back</a>
        <h1>Edit About</h1>
        <form action="update_about3.php" method="POST">
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" class="form-control"><?php echo $about['body']; ?></textarea required>
            </div>
            <input type="hidden" name="update_id" value="<?php echo $about['id']; ?>">
            <input type="submit" name="edit_about" value="update" class="btn btn-primary">
        </form>
        <br>
        <br>
        <br>
    </div>
<?php
    include('inc/footer.php');
?>