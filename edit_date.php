<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
      }

      if(isset($_POST['edit_date'])){
        $update_id = mysqli_real_escape_string($db, $_POST['update_id']);
        $event_date = mysqli_real_escape_string($db, $_POST['event_date']);
        $event = mysqli_real_escape_string($db, $_POST['event']);
        $query = "UPDATE dates SET event_date='$event_date', event='$event' WHERE id = {$update_id}";
         
        if (mysqli_query($db, $query)) {
            header('Location: add_date.php');
          }
    }

    if(isset($_POST['delete_date'])){
        $delete_id = mysqli_real_escape_string($db, $_POST['delete_id']);
        $query = "DELETE FROM dates WHERE id = {$delete_id}";
        if (mysqli_query($db, $query)) {
          header('Location: add_date.php');
        }else{
          echo "Your date was not deleted";
        }
    }
        $id = mysqli_real_escape_string($db, $_GET['id']);
        $query = 'SELECT * FROM dates WHERE id='.$id;
        $result = mysqli_query($db, $query);
        $upcoming = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($db);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
              <form action="edit_date.php" method="POST">
                    <input type="text" class="form-control" name="event_date" value="<?php echo $upcoming['event_date'];?>" required>
                    <input type="text" class="form-control" name="event" value="<?php echo $upcoming['event'];?>" required>
                    <br>
                    <input type="hidden" name="update_id" value="<?php echo $upcoming['id']; ?>">
                    <input type="hidden" name="delete_id" value="<?php echo $upcoming['id']; ?>">
                    <input type="submit" name="edit_date" class="btn btn-success"  value="Finish">
                    <br>
                    <br>
                    <input type="submit" class="btn btn-danger" name="delete_date" value="Delete">
              </form>
              <br>
        </div>
    </div>
</div>

<?php
  include('inc/footer.php');
?>