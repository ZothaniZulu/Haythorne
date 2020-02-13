<?php
    include('server/server.php');
    include('inc/header.php');
?>

<div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8"> 
          <h2 class="header" id="news-header">About us</h2>
            <div class="content" id="content">
                    <?php
                        $query = "SELECT * FROM about";
                        $result = mysqli_query($db, $query);
                        $abouts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        mysqli_free_result($result);
                        mysqli_close($db);
                    ?>
                <p> 
                    <?php foreach ($abouts as $about):?>
                    <?php echo $about['body'];?>
                    <?php endforeach?>
                </p>  
            </div>
      </div>
    </div>
</div>

<br><br><br> 
       
 <?php 
  include('inc/footer.php')
 ?>