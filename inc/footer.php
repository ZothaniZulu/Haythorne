
      <!-- /.container -->
<br>
<footer class="py-4" style ="background: #065ca1;">
      <div class="container">
          <p class="m-0 text-center text-white" id="footer-text">Haythorne Secondary &copy; 2018. Website created by ex-Haythorne learner, <a href="developer.php" id="developer"><b>Zothani Zulu</b></a>, 2012-2016.</p>
      </div>
</footer>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        var newsCount = 1;
        $("#newsButton").click(function(){
            newsCount = newsCount + 1;
            $("#news").load("load-news.php",{
              newsNewCount : newsCount
            });
        });
      });
    </script> 
    <script>
      $(document).ready(function(){
        var announcementCount = 1;
        $("#announcementButton").click(function(){
            announcementCount = announcementCount + 1;
            $("#announcements").load("load-announcements.php",{
              announcementNewCount : announcementCount
            });
        });
      });
    </script>
     <script>
      $(document).ready(function(){
        var announcementCount = 1;
        $("#announcementsButton").click(function(){
            announcementCount = announcementCount + 1;
            $("#announcements-box").load("load-announcements.php",{
              announcementNewCount : announcementCount
            });
        });
      });
    </script>
    <script>
      $(document).ready(function(){
        var PublicAnnouncementCount = 1;
        $("#PublicAnnouncementsButton").click(function(){
            PublicAnnouncementCount = PublicAnnouncementCount + 1;
            $("#announcements-box").load("public_announcements.php",{
              PublicAnnouncementNewCount : PublicAnnouncementCount
            });
        });
      });
    </script>
    <script>
      $(document).ready(function(){
        var adminCount = 1;
        $("#adminButton").click(function(){
            adminCount = adminCount + 1;
            $("#news").load("adminnews.php",{
              adminNewCount : adminCount
            });
        });
      });
    </script>
    <!-- Created by Zothani Zulu 01 December 2017-->
     
</body>

</html>