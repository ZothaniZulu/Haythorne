<?php
  include('../../rinc/header.php');
?>

              </header>
              <div class="container">
                <h3>Grade 10 Mathematics Literacy</h3> 
                <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8">
                <input type="text" class="form-control" id="filterInput" placeholder="Search for a past exam paper"> 
                <h2 class="header" id="news-header">Notes</h2>
                <div class="content" id="content">
                    <ul id="names">
                    <?php
                                include('../../connection.php');
                                $sql = "SELECT * FROM grade_10_mathematics_literacy";
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