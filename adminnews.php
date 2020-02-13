<?php
     include('server/server.php');
     $adminNewCount = $_POST['adminNewCount'];
     $sql = "SELECT * FROM posts ORDER BY id DESC LIMIT $adminNewCount";
     $result = mysqli_query($db, $sql);
     $posts= mysqli_fetch_all($result, MYSQLI_ASSOC);
     mysqli_free_result($result);
     mysqli_close($db);
?>

<?php foreach ($posts as $post):?>
    <h2><?php echo $post['title'];?></h2>
    Posted by
    <p id="author"><?php echo $post['author'];?></p>
        <div class='row'>
            <div class='col-md-8 col-sm-6 order-8'>
                <img class='img-fluid'<?php echo "src='{$post['image']}'"?>>
            </div>
        </div>
    <p class="lead" id="introduction"><?php echo $post['introduction']?></p>
    <p class="lead" id="post"><?php echo $post['body']?></p>
    <p class="lead" id="conclusion"><?php echo $post['conclusion']?></p>
    <a class="btn btn-primary" href="universe3.php?id=<?php echo $post['id'];?>">Read more</a>
    <hr>
 <?php endforeach; ?>