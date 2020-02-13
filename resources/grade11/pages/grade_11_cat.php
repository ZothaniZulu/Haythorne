<?php
  include('../../rinc/header.php');
?>

              </header>
              <div class="container">
                <h3>Grade 11 Computer Applications Technology</h3> 
                <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8">
                <input type="text" class="form-control" id="filterInput" placeholder="Search for a past exam paper"> 
                <h2 class="header" id="news-header">Past Exam Papers</h2>
                <div class="content" id="content">
                    <ul id="names">
                    <?php
                                include('../../connection.php');
                                $sql = "SELECT * FROM grade_11_computer_applications_technology";
                                $result = mysqli_query($db, $sql);
                                while ($row = mysqli_fetch_array($result)){
                                $direction = $row['direction'];
                                $paper = $row['paper'];
                            ?>
                              <li><a href="../../../<?php echo $direction;?>" download="<?php echo $paper;?>"><?php echo $paper;?></a></li>
                          <?php
                              }
                          ?> 
                    </ul>
                  
                </div>
                </div>
                </div>
              </div>
<?php
  include('../../rinc/footer.php');
?>