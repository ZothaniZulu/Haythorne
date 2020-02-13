<?php
  include('server/server.php');
  include('inc/header.php');
  $sql = "SELECT * FROM dates ";
  $result = mysqli_query($db, $sql);
  $upcomings = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);
  mysqli_close($db);
?>

<div class="container">
      <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-8">
              <h2 class="header" id="dates-header"><i class="fa fa-calendar"></i> Important Dates</h2>
              <div class="content" id="dates">
                <div class="blue" id="blue">
                    <ul>
                        <?php foreach ($upcomings as $upcoming):?>
                          <li id="important-dates"><?php echo $upcoming['event_date'];?> <b id="event-color">- <?php echo $upcoming['event'];?></b></li>
                        <?php endforeach; ?>
                    </ul>
                  </div>
              </div>
          </div>
      </div>
    <br>
</div>
<?php
  include('inc/footer.php');
?>