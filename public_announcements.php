<?php
     include('server/server.php');
     $PublicAnnouncementNewCount = $_POST['PublicAnnouncementNewCount'];
     $sql = "SELECT * FROM announcements ORDER BY id DESC LIMIT $PublicAnnouncementNewCount";
     $result = mysqli_query($db, $sql);
     $announced = mysqli_fetch_all($result, MYSQLI_ASSOC);
     mysqli_free_result($result);
     mysqli_close($db);
?>

<?php foreach ($announced as $announce):?>
    <b>Announcement by</b>:<h6><?php echo $announce['author'];?></h6>
    <b><?php echo $announce['announcement_date'];?></b>
    <br><br>
    <p><?php echo $announce['announcement'];?></p>
    <hr>
<?php endforeach; ?>