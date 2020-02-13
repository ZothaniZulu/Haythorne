<?php
  include('server/server.php');
  include('inc/header.php');
?>

<div class="container">
    <h1 id="feedback-message">We like to hear from you!</h1>
      <?php if($message = "$message"):?>
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-8">
            <div class="alert <?php echo $msgClass; ?>">
               <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                  <p class="lead" id="contact-paragraph"><b><?php echo $msg;?></b>
                  </p>
            </div>
          </div>
        </div>
      <?php endif;?>

      <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-8"> 
          <h2 class="header" id="news-header">Our Contact Details</h2>
            <div class="" id="contact">
                  <p>
                    <address>
                      <strong>
                          30 Hickory Road 
                          <br>
                          Woodlands
                          <br>
                          Pietermaritzburg 3201<br>
                          <br>
                          TEL: (033) 3874291/2
                          <br>
                          FAX: (033) 3979599
                          <br>
                          Email: haythorne@telkomsa.net
                      </strong>
                      </address>
                  </p>
                <hr>

                <p class="lead"><h5>For any other queries, leave us a message and we will get back to you.</h5></p>
                <div class="jumbotron" id="jumbotron">
                  <form method="POST" action="contact.php">
                      <div class="form-group">
                        <label>Name</label>
                          <input type="text" class="form-control" name="contact_name" placeholder="Add Name" required>
                      </div>

                      <div class="form-group">
                        <label>Cellphone</label>
                          <input type="text" class="form-control" name="cellphone" placeholder="Add Cellphone Number" required>
                      </div>

                      <div class="form-group">
                        <label>Email</label>
                          <input type="email" class="form-control" name="email" placeholder="Add Email">
                      </div>

                      <div class="form-group">
                        <label>Message</label>
                          <textarea class="form-control" name="message" placeholder="Add Message" required></textarea>
                      </div>
                      <button type="submit" name="contact" class="btn btn-primary">Submit</button>      
                  </form>
                </div>
                <br>
            </div>
            <br>
        </div>
      </div>
</div>

<?php
  include('inc/footer.php');
?>