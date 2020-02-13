<?php
     include('server/server.php');
     $announcementNewCount = $_POST['announcementNewCount'];
     $sql = "SELECT * FROM announcements ORDER BY id DESC LIMIT $announcementNewCount";
     $result = mysqli_query($db, $sql);
     $announced = mysqli_fetch_all($result, MYSQLI_ASSOC);
     mysqli_free_result($result);
     mysqli_close($db);
?>

<?php foreach ($announced as $announce):?>
    <b>Announcement by</b>:<h6><?php echo $announce['author'];?></h6>
    <b><?php echo $announce['announcement_date'];?> <?php echo"<a href='edit_announcement.php?id={$announce['id']}' class='btn btn-warning btn-sm'>Edit</a>";?></b>
    <br><br>
    <p><?php echo $announce['announcement'];?></p>
    <hr>
 <?php endforeach; ?>