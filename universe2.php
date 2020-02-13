<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
    }
?>
<div class="container">

    <div class="fa fa-user" id="user-admin"> <?php echo $_SESSION['adminId'];?></div>
    <form method="POST" action="universe2.php">
        <button class="btn btn-danger btn-sm" type="submit" name="outAdmin">Log Out</button>
    </form> 

    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-8">
                <?php
                    $query = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 1";
                    $result = mysqli_query($db, $query);
                    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    mysqli_free_result($result);
                    mysqli_close($db);
                ?>

                <h2 class="header" id="news-header">News</h2>
                <div class="content" id="news">
                <?php foreach ($posts as $post):?>
                        <h2><?php echo $post['title'];?></h2>
                        Posted by
                        <p id="author"><?php echo $post['author']?></p>
                            <div class='row'>
                                <div class='col-md-8 col-sm-6 order-8'>
                                    <img class='img-fluid'<?php echo "src='{$post['image']}'"?>>
                                </div>
                            </div>
                        <p class="lead" id="introduction"><?php echo $post['introduction']?></p>
                        <p class="lead" id="post"><?php echo $post['body']?></p>
                        <p class="lead" id="conclusion"><?php echo $post['conclusion'];?></p>
                        <a class="btn btn-primary" href="universe3.php?id=<?php echo $post['id'];?>">Read more</a>
                        <hr>
                <?php endforeach; ?>
                </div>
                <br>
                <button id="adminButton" class="btn btn-secondary">Load more news</button>
                <a href="#returning" class="btn btn-success">Return to top</a> 
        </div>

            <div class="col-md-4 col-sm-4 col-xs-4">
                  <h2 class="header" id="dashboard"><i class="fa fa-columns"></i> Dashboard</h2>
                <div class="dashboard">
                    <ul>
                        <li><a href="universe5.php"><i class="fa fa-envelope-square"></i> Add News</a></li>
                        <li><a href="add_date.php"><i class="fa fa-calendar"></i> Add an Important Date</a></li>
                        <li><a href="add_announcement.php"><i class="fa fa-bell-o"></i> Add Announcement</a></li>
                        <li><a href="add_resources.php"><i class="fa fa-book"></i> Add Resources</a></li>
                        <li><a href="update_about.php"><i class="fa fa-edit"></i> Update About page</a></li>
                        <li><a href="queries.php"><i class="fa fa-inbox"></i> Queries</a></li>
                        <li><a href="http://facebook.com/haythorne"><i class="fa fa-facebook"></i> Facebook Page</a></li>
                        <li><a href="contact.php"><i class="fa fa-phone-square"></i> Contact</a></li>
                        <li><a href="manual.php"><i class="fa fa-question-circle"></i> Get help <?php echo $_SESSION['adminId'];?></a></li>  
                    </ul>
                </div>
            </div>
            
        </div>          
</div>
    

<?php
    include('inc/footer.php');
?>
