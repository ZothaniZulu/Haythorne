<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
      }

      if(isset($_POST['proceed'])){
      $event_date = mysqli_real_escape_string($db, $_POST['event_date']);
      $event = mysqli_real_escape_string($db, $_POST['event']);
      $sql = "INSERT INTO dates( event_date, event) VALUES('$event_date', '$event')";
            
      if (mysqli_query($db, $sql)) {
            header('Location: add_date.php');
      }else{
                 
          }
      }
?>

<?php
      $sql = "SELECT * FROM dates";
      $result = mysqli_query($db, $sql);
      $upcomings = mysqli_fetch_all($result, MYSQLI_ASSOC);
      mysqli_free_result($result);
      mysqli_close($db);
?>


<div class="container">

      <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
            <a class="btn btn-secondary" href="universe2.php">Go back</a>
            <br>
            <br>
                  <form action="add_date.php" method="POST">
                        <input type="text" class="form-control" name="event_date" placeholder="Enter Date" required>
                        <input type="text" class="form-control" name="event" placeholder="Name of event" required>
                        <br>
                        <input type="submit" name="proceed" class="btn btn-success"  value="submit">
                  </form>
                  <br>
            </div>
                  
            <div class="col-md-6 col-sm-6 col-xs-6">
               <h2 class="header" id="dates-header"><i class="fa fa-calendar"></i> Important Dates</h2>
                  <div class="content" id="dates">
                        <div class="blue" id="blue">
                              <ul>
                                    <form>
                                          <?php foreach ($upcomings as $upcoming):?>
                                                <li id="important-dates"><?php echo $upcoming['event_date'];?>
                                                      <b id="event-color">-<?php echo $upcoming['event'];?></b> <a href='edit_date.php?id=<?php echo $upcoming['id'];?>' class='btn btn-warning btn-sm'>Edit</a>
                                                </li>
                                                <hr>
                                          <?php endforeach; ?>
                                   </form>
                              </ul>
                        </div>
                  </div>
            </div>
      </div>   
</div>

<?php
  include('inc/footer.php');
?>