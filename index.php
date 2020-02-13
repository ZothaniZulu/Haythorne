<?php
  include('server/server.php');
  include('inc/header.php');
?>

<div class="container">
  <div class="row" id="main">
      <div class="col-md-8 col-sm-8 col-xs-8"> 
        <h2 class="header" id="header"><i class="fa fa-institution">Home Page</i></h2>
          <div class="content" id="home-welcome">
            <h2 id="welcome">Haythorne Secondary Welcomes You</h2>
                <p>
                 This is some sample text. This is some sample text. This is some sample text. This is some sample text.
                 This is some sample text. This is some sample text. This is some sample text. This is some sample text. This is some sample text.
                </p>
          </div>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-4">
        <h2 class="header" id="notices"><i class="fa fa-columns"></i> Dashboard</h2>
          <div class="notices">
              <ul>
                <li><a href="announcements.php"><i class="fa fa-bell-o"></i> Announcements</a></li>
                <li><a href="important_dates.php"><i class="fa fa-calendar"></i> Important Dates</a></li>
                <li><a href="application.php"><i class="fa fa-file-text-o"></i> Application Forms</a></li>
                <li><a href=""><i class="fa fa-building"></i> Banking Details</a></li>
              </ul>           
          </div>
      </div>
  </div>

  <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-8">
        <h2 class="header" id="news-header"><i class="fa fa-envelope"></i> News</h2>
          <div class="content" id="news">
              <?php
                  $query = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 1";
                  $result = mysqli_query($db, $query);
                  $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  mysqli_free_result($result);
                  mysqli_close($db);
              ?>

              <?php foreach ($posts as $post):?>
                  <h2><?php echo $post['title'];?></h2>
                  Posted by
                  <p id="author"><?php echo $post['author'];?></p>
                    <p>
                        <?php 
                          echo "<div class='col-md-8 col-sm-8 order-8'>";
                          echo "<img class='img-fluid' src='{$post['image']}'>";
                          echo "</div>"; 
                        ?>
                    </p>   
                          <p id="post"><?php echo $post['introduction']?></p>
                          <p id="post"><?php echo $post['body']?></p>
                          <p id="post"><?php echo $post['conclusion']?></p>
                          <hr>   
              <?php endforeach; ?>       
          </div>
          <br>
          <button id="newsButton" class="btn btn-secondary">Load more news</button>
          <a href="#returning" class="btn btn-success">Return to top</a> 
      </div>

      <div class="col-md-4 col-sm-4 col-xs-4">
        <h2 class="header" id="dashboard"><i class="fa fa-info-circle"></i> Navigation</h2>
          <div class="dashboard">
              <ul>
                  <li><a href="resources.php"><i class="fa fa-book"></i> Resources</a></li>
                  <li><a href="contact.php"><i class="fa fa-phone-square"></i> Contact</a></li>
                  <li><a href=""><i class="fa fa-facebook"></i> Our Facebook page</a></li>
              </ul>
          </div>
      </div>
  </div>     
</div>
<br>
           
<?php
  include('inc/footer.php');
?>