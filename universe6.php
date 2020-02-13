<?php
  include('inc/header.php');
  include('server/server.php');
  if (empty($_SESSION['adminId'])) {
    header('Location: universe.php');
  }
  $sql = "SELECT * FROM dates ";
  $result = mysqli_query($db, $sql);
  $upcomings = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($db);
?>
<div class="container">
<a class="btn btn-secondary" href="universe2.php">Go back</a>
       <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">
            <h2 class="header" id="news-header"><i class="fa fa-calendar"></i> Important Dates</h2>
            <div class="content" id="news">
            <div class="blue" id="blue">
                  <?php foreach ($upcomings as $upcoming):?>
                  <h3> <?php echo $upcoming['event_date']?></h3>
                  <i>-<?php echo $upcoming['event']?></i>    
                  <hr>
                  <?php endforeach; ?>
            </div>
            </div>
      </div>
    </div>
<?php
  include('inc/footer.php');
?>