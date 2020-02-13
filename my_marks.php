<?php
  include('server/academics.php');
  include('inc/header.php');
    if (empty($_SESSION['lurits_no'])) {
        header('Location: students.php');
      }
?>

<div class="container">
        <form action='my_marks.php' method='POST'>
        <button type='submit' class='btn btn-success btn-sm' name='signout'>Log Out</button>
        </form>
      <?php
          $sql = "SELECT * FROM students WHERE lurits_no='".$_SESSION['lurits_no']."'";
          $result = mysqli_query($connection, $sql);
          while ($row = mysqli_fetch_assoc($result)){
          $name = $row['name'];
          $grade = $row['grade'];
          }          
      ?>
          <h1 id="student-name">Welcome <?php echo "$name";?></h1>
          <h4>Grade: <?php echo "$grade";?></h4>
          <p class="lead">Your results are as follows:</p>
          <h6>Term: 1</h6>

      <?php
          /*Created by Zothani Zulu 01 December*/
          if(isset($_SESSION['lurits_no'])){
          $query = "SELECT * FROM marks WHERE lurits_no='".$_SESSION['lurits_no']."'";
          $result = mysqli_query($connection, $query);  
          echo "<div class='row'>";
          echo "<div class='col-md-8'>";
          echo "<div class='panel panel-default'>";       
          echo "<div>";
          echo "<table width='75%' class='table table-striped table-bordered table-hover'>";
          echo "<thead>";
          echo "<tr><th>Subject</th><th>%</th><th>Comment</th></tr>";
          echo "</thead>";
          echo "<tbody>";
          while ($row = mysqli_fetch_assoc($result)){ 
            if($row['mark'] >= 30){
              $comment = "Passed";
              }else{
              $comment = "Failed";
            }         
          echo "<tr><td>{$row['subname']}</td><td>{$row['mark']}</td><td>{$comment}</td></tr>";              
          } 
          echo "</tbody>";
          echo "</table>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";             
          }
      ?> 
      <br>
      <div class="box">
        <h5>Assessment Level</h5>
              <ul>
                  <li>Level: 1 ---[0% to 29%]--- Not Achieved</li>
                  <li>Level: 2 ---[30% to 39%]--- Elementary Achievement</li>
                  <li>Level: 3 ---[40% to 49%]--- Moderate Achievement</li>
                  <li>Level: 4 ---[50% to 59%]--- Adequate Achievement</li>
                  <li>Level: 5 ---[60% to 69%]--- Substantial Achievement</li>
                  <li>Level: 6 ---[70% to 79%]--- Meritorious Achievement</li>
                  <li>Level: 7 ---[80% to 100%]--- Outstanding Achievement</li>
              </ul>
      </div>                
</div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>  
</body>
</html>