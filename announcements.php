<?php
    include('server/server.php');
    include('inc/header.php');
?>

<?php
      $sql = "SELECT * FROM announcements ORDER BY id DESC LIMIT 1";
      $result = mysqli_query($db, $sql);
      $announced = mysqli_fetch_all($result, MYSQLI_ASSOC);
      mysqli_free_result($result);
      mysqli_close($db);
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-8">
                <h2 class="header" id="announcement-header"><i class="fa fa-bell-o"></i> Announcements</h2>
                <div class="content" id="announcements-box">
                        <?php foreach ($announced as $announce):?>
                            <b>Announcement by</b>:<h6><?php echo $announce['author'];?></h6>
                            <b><?php echo $announce['announcement_date'];?></b>
                            <br><br>
                            <p><?php echo $announce['announcement'];?></p>
                            <hr>
                        <?php endforeach; ?>
                </div>
                <br>
                        <button id="PublicAnnouncementsButton" class="btn btn-success">Load previous announcements</button>
                <br>
        </div>
     </div>
</div>

<?php
    include('inc/footer.php');
?>