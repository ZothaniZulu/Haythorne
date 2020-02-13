<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
    }
?>
    <div class="container">
    <a class="btn btn-secondary" href="universe2.php">Go back</a>
    <br>
        <div class="fa fa-user" id="user-admin"> <?php echo $_SESSION['adminId'];?></div>
        <form method="POST" action="universe2.php">
            <button class="btn btn-danger btn-sm" type="submit" name="outAdmin">Log Out</button>
        </form> 

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2 class="header" id="queries-header">Queries</h2>
                <div class="content" id="queries-body">
                    <?php
                        $sql = "SELECT * FROM queries";
                        $result = mysqli_query($db, $sql);
                        $queries = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        mysqli_free_result($result);
                        mysqli_close($db);
                    ?>
                    <?php foreach ($queries as $query):?>
                        <b>Name:</b> <?php echo $query['contact_name'];?>
                        <br>
                        <b>Cellphone:</b> <?php echo $query['cellphone'];?>
                        <br>
                        <b>Email:</b> <?php echo $query['email'];?>
                        <br>
                        <br>
                        <b>Message:</b>
                        <br>
                        <p>
                        <?php echo $query['message'];?>
                        </p>
                        <hr>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php
    include('inc/footer.php');
?>