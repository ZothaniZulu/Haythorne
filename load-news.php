<?php
     include('server/server.php');
     $newsNewCount = $_POST['newsNewCount'];
     $query = "SELECT * FROM posts ORDER BY created_at DESC LIMIT $newsNewCount";
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
            <p><?php echo $post['introduction']?></p>
            <p><?php echo $post['body']?></p>
            <p><?php echo $post['conclusion']?></p>
            <hr>
 <?php endforeach; ?> 