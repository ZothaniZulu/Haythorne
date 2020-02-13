<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
    }
?>

<?php
    if(isset($_POST['annmt'])){
        $announcement_date = mysqli_escape_string($db, $_POST['announcement_date']);
        $author = mysqli_escape_string($db, $_POST['author']);
        $announcement = mysqli_escape_string($db, $_POST['announcement']);
        $sql = "INSERT INTO announcements(announcement_date, author, announcement) VALUES('$announcement_date', '$author', '$announcement')";
        if(mysqli_query($db, $sql)){    
        }else{
            $errorMsg = "<div class='alert alert-danger'><b><em>Announcement not submitted.</em></b></div>";
        }
    }
?>

<?php
      $sql = "SELECT * FROM announcements ORDER BY id DESC LIMIT 1";
      $result = mysqli_query($db, $sql);
      $announced = mysqli_fetch_all($result, MYSQLI_ASSOC);
      mysqli_free_result($result);
      mysqli_close($db);
?>
<div class="container">
<a class="btn btn-secondary" href="universe2.php">Go back</a>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-6">
            <form method="POST" action="add_announcement.php">
                <label>Date</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="announcement_date" placeholder="Enter date" required>
                    </div>

                <label>Announcement by</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="author" placeholder="Enter your name" required> 
                    </div>

                <label>Announce</label>
                    <div class="form-group">
                    <textarea name="announcement" class="form-control" placeholder="Write your announcement" required></textarea>
                    </div>
                <input type="submit" class="btn btn-primary" name="annmt" value="Announce">
            </form>
        </div>
        <br>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <h2 class="header" id="announcement-header"><i class="fa fa-bell-o"></i> Announcements</h2>
                <div class="content" id="announcements">
                    <?php foreach ($announced as $announce):?>
                        <b>Announcement by</b>:<h6><?php echo $announce['author'];?></h6>
                            <b><?php echo $announce['announcement_date'];?> <a href='edit_announcement.php?id=<?php echo $announce['id'];?>' class='btn btn-warning btn-sm'>Edit</a></b>
                            <br><br>
                            <p><?php echo $announce['announcement'];?></p>
                            <hr>
                    <?php endforeach; ?>    
                </div>
                <br>
                <button id="announcementButton" class="btn btn-success">Load previous announcements</button>
        </div>   
    </div>
</div>
 
<?php
    include('inc/footer.php');
?>