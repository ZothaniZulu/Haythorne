<?php
    include('server/server.php');
    include('inc/header.php');
    if (empty($_SESSION['adminId'])) {
        header('Location: universe.php');
    }
?>
    <div class="container">

        <div class="fa fa-user" id="user-admin"> <?php echo $_SESSION['adminId'];?></div><form method="POST" action="universe2.php">
            <button class="btn btn-danger btn-sm" type="submit" name="outAdmin">Log Out</button>
        </form> 

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2 class="header" id="manual-header">User Manual</h2>
                    <div class="content" id="manual">
                        <h4>Welcome <?php echo $_SESSION['adminId'];?></h4>

                        <p class="lead">This web application was designed to be intuitive. It knows what you want to do before you even do it.</p>
                        <h4>This manual covers the following:</h4>
                        <ul>
                            <li>How to post news</li>
                            <li>How to edit news</li>
                            <li>How to delete news.</li>
                            <li>How to add important dates</li>
                            <li>How to delete a date</li>
                            <li>How to add announcements</li>
                            <li>How to delete announcements</li>
                            <li>How to add resources</li>
                            <li>Web application Performance</li>
                        </ul>

                        <p class="lead">
                            <h3>Note</h3>
                                <b><?php echo $_SESSION['adminId'];?></b>, before I walk you through this instruction manual please note that this information should be private. 
                                Students should not know about the functionality that will be discussed in this instruction manual. 
                                If this information gets into the wrong hands, our web application can get abused.
                                I hope you will enjoy using this web application as much as I enjoyed creating it.
                                <br>
                                <br>
                                <address id="developer-manual">
                                    Developer,
                                    <br>
                                    Zothani Zulu
                                    <br>
                                    Ex-Haythorne learner
                                    <br>
                                    Matric 2016
                                </address>
                        </p>
                        <hr>
                        <p class="lead">
                            <h3>1. How to add news</h3>
                            <ul class="manual-content">
                                <li>Step 1: Visit the website www.haythorne.co.za</li>
                                <li>Step 2: You are now on the home page. Go to the URL and edit it as www.haythorne.co.za/universe.php</li>
                                <li>Step 3: By now you should be directed to a login screen. Enter the login details that were provided and login</li>
                                <li>Step 4: On your right, the dashboard gives you the option of adding news. Click on it.</li>
                                <li>Step 5: Create your post.</li>
                            </ul>

                            <h4>Note</h4>
                                Your post will not be submitted if one of the form fields is empty. Everything should be filled in.
                                <hr>
                                <h3>2. How to edit news</h3>
                                Congratulations, you’ve added your first post. Now let’s edit it.
                                <ul class="manual-content">
                                    <li>Step 1: There is a blue button below your post “Read More”, click it. Scroll down and you will find an edit button. Don’t worry about the delete button we will talk about it later. Click edit. </li>
                                    <li>Step 2: Edit your post. Please note that your post will not be submitted if one of the form fields is empty. Due to security purposes, you are advised to re-select an image that will appear on your post. This could be the same image that appeared before or a new image. When you are done, click update.</li>
                                </ul>
                                <hr>
                                <h3>3. How to delete news</h3>
                                <ul class="manual-content">
                                    <li><?php echo $_SESSION['adminId'];?>, to delete a post is very simple. The delete button is situated below the edit button. Its red and you know what that means. If you click the delete button, you will be asked to confirm your action. Once confirmed, this cannot be reversed. </li>
                                </ul>
                                <hr>
                                <h3>4. How to add important dates</h3>
                                Remember the dashboard I mentioned earlier on?
                                <ul class="manual-content">
                                    <li>Step 1: Go to “Add an important date”. You will be presented with a form where you will enter the date and the name of the event</li>
                                    <li>Step 2: Click submit. Your new date will be displayed on your right. The new date will also appear in the ‘Important Dates’ page that is displayed to the public</li>
                                </ul>
                                <hr>
                                <h3>5. How to delete a date</h3>
                                <ul class="manual-content">
                                    <li>Step 1: Click on the edit button</li>
                                    <li>Step 2: Click the delete button, the date will be removed from the list of dates and it will also be removed from the public page of important dates</li>
                                </ul>
                                <hr>
                                <h3>6. How to add an announcement</h3>
                                <ul class="manual-content">
                                    <li>Step 1: Go to the administrator dashboard</li>
                                    <li>Step 2: Click on add announcement</li>
                                    <li>Step 3: Fill in the form and announce.</li>
                                </ul>
                                <h4>Note</h4>
                                Your announcement will appear on your right and it will also appear on the announcements page that is displayed to the public.
                                <hr>
                                <h3>7. How to delete announcement</h3>
                                <ul class="manual-content">
                                    <li>Step 1: Click on the edit button</li>
                                    <li>Step 2: Click the delete button, the announcement will be removed from the announcements page in front of you and it will also be removed from the public announcements page</li>
                                </ul>
                                <hr>
                                <hr>
                                <h3>8. How to add resources</h3>
                                <ul class="manual-content">
                                    <li>Step 1: Visit the website www.haythorne.co.za</li>
                                    <li>Step 2: Edit the URL to www.haythorne.co.za/add_resources.php</li>
                                    <li>Step 3: Enter your login details and proceed</li>
                                    <li>Step 4: Select a file that you wish to upload</li>
                                    <li>Step 5: Select the grade and subject. Click upload. If the upload was successful, a green notification will pop up. If it was unsuccessful a red notification will be displayed</li>
                                </ul>
                                <h4>Note</h4>
                                    If you submit the wrong information, your file will not be uploaded to the system
                                <hr>
                        </p>
                    </div>
                </div>
            </div>
    </div>
<?php
    include('inc/footer.php');
?>