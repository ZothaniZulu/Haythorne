<?php
    include('resources/connection.php');
    if (empty($_SESSION['teacher'])) {
        header('Location: add_resources.php');
      }
    include('inc/header.php');

?>

<div class="container">
    <div class='alert alert-warning alert-dismissible'>
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        <p class="lead">
            <b>
                <?php echo $_SESSION['teacher'];?>, please make sure that you choose the correct grade and subject otherwise the system will not upload your document!
            </b>
        </p>
    </div>
    <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <form method="POST" action="add_resources2.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Upload File</label>
                        <?php echo $errors;?>
                        <?php echo $success;?>
                        <input type="file" name="file" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Select Grade</label>
                            <select name="grade" required>
                                <option>Grade_8</option>
                                <option>Grade_9</option>
                                <option>Grade_10</option>
                                <option>Grade_11</option>
                                <option>Grade_12</option>
	        	            </select> 
                     </div>
        
                    <div class="form-group">
                        <label>Select Subject</label>
                            <select name="subject">
                                <option>Afrikaans</option>
                                <option>English</option>
                                <option>IsiZulu</option>
                                <option>History</option>
                                <option>Geography</option>
                                <option>Social_Sciences</option>
                                <option>Life_Orientation</option>
                                <option>Creative_Arts</option>
                                <option>Technology</option>
                                <option>Natural_Sciences</option>
                                <option>Mathematics</option>
                                <option>Mathematics_Literacy</option>
                                <option>Accounting</option>
                                <option>Tourism</option>
                                <option>Business_Studies</option>
                                <option>Economics</option>
                                <option>Computer_Applications_Technology</option>
                                <option>Economic_Management_Sciences</option>
                                <option>Consumer_Studies</option>
                                <option>Engineering_Graphic_Design</option>
                                <option>Life_Sciences</option>
                                <option>Physical_Sciences</option>
	        	            </select> 
                    </div>
                    <input type="submit" name="upload_file" class="btn btn-primary" onclick="uploadFile()" value="upload">
                </form>
                <br>
                    <form action="" method="POST">
                        <input type="submit" name="outTeacher" class="btn btn-secondary" value="Log Out">
                    </form>
                    <br>
                    <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="progressBar"></div>
                            <p id="loaded_n_total"></p>
                    </div>
        </div>
    </div>
</div>

<?php
    include('inc/footer.php')
?>      