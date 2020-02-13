<br>
<footer class="py-4" style ="background: #065ca1;">
      <div class="container">
            <p class="m-0 text-center text-white" id="footer-text">Haythorne Secondary &copy; 2018. Website created by ex-Haythorne learner, <a href="../../../developer.php" id="developer"><b>Zothani Zulu</b></a>, 2012-2016.</p>
      </div>
</footer>
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/popper/popper.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script>
        let filterInput = document.getElementById('filterInput');       
            filterInput.addEventListener('keyup', filterNames);
                function filterNames(){
                let filterValue = document.getElementById('filterInput').value.toUpperCase();
                let ul = document.getElementById('names');
                let li = ul.querySelectorAll('li');
                for (let i = 0;i < li.length;i++){
                let a =  li[i].getElementsByTagName('a')[0];
                if(a.innerHTML.toUpperCase().indexOf(filterValue)> -1){
                li[i].style.display ='';
                }else{
                li[i].style.display = 'none';
                    }
                }
            }
    </script>

    <!-- Created by Zothani Zulu 01 December 2017-->  
</body>
</html>