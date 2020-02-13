<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
    }
    

?>

    <div class="container">
    <a class="btn btn-secondary" href="universe2.php">Go back</a>
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8"> 
                <h2>Currently set as:</h2>
                <h2 class="header" id="news-header">About us</h2>
                    <div class="content" id="content">
                        <?php
                            $query = "SELECT * FROM about";
                            $result = mysqli_query($db, $query);
                            $abouts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                            mysqli_free_result($result);
                            mysqli_close($db);
                        ?>
                        <?php foreach ($abouts as $about):?>
                        <?php echo $about['body'];?>
                        <br>
                            <a href="update_about3.php?id=<?php echo $about['id'];?>" class="btn btn-primary">Proceed to Edit</a>
                        <?php endforeach?> 
                    </div>
            </div>
        </div>
    </div>
<?php
    include('inc/footer.php');
?>