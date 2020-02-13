<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
    }

    if(isset($_POST['edit_announcement'])){
        $update_id = mysqli_real_escape_string($db, $_POST['update_id']);
        $announcement_date = mysqli_real_escape_string($db, $_POST['announcement_date']);
        $author = mysqli_real_escape_string($db, $_POST['author']);
        $announcement = mysqli_real_escape_string($db, $_POST['announcement']);
        $query = "UPDATE announcements SET announcement_date='$announcement_date', author='$author', announcement='$announcement' WHERE id = {$update_id}";
         
        if (mysqli_query($db, $query)) {
            header('Location: add_announcement.php');
          }
    }

    if(isset($_POST['delete_announcement'])){
        $delete_id = mysqli_real_escape_string($db, $_POST['delete_id']);
        $query = "DELETE FROM announcements WHERE id = {$delete_id}";
        if (mysqli_query($db, $query)) {
          header('Location: add_announcement.php');
        }else{
          echo "Your announcement was not deleted";
        }
    }
        $id = mysqli_real_escape_string($db, $_GET['id']);
        $query = 'SELECT * FROM announcements WHERE id='.$id;
        $result = mysqli_query($db, $query);
        $announce = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($db);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <form method="POST" action="edit_announcement.php">
                <label>Date</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="announcement_date" value="<?php echo $announce['announcement_date'] ?>" required>
                    </div>

                <label>Announcement by</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="author" value="<?php echo $announce['author'] ?>" required> 
                    </div>

                <label>Announce</label>
                    <div class="form-group">
                        <textarea name="announcement" class="form-control" required><?php echo $announce['announcement']; ?></textarea>
                    </div>
                    <input type="hidden" name="update_id" value="<?php echo $announce['id']; ?>">
                    <input type="hidden" name="delete_id" value="<?php echo $announce['id']; ?>">
                    <input type="submit" class="btn btn-primary" name="edit_announcement" value="Edit Announcement">
                    <br>
                    <br>
                    <input type="submit" class="btn btn-danger" name="delete_announcement" value="Delete Announcement">
            </form>
        </div>
    </div>
</div>
<?php
    include('inc/footer.php');
?>