<html>

<body>
 
<div  id="footerSection">
<div class="container">
  <h1><p class="pull-right">&copy; Book Hub</p></h1>
    <div class="span3">
      <h4>ACCOUNT</h4>
      
	  
	  <?php
          if(isset($_SESSION['status']))
          {
          echo  " <a href='info.php'><h5>PERSONAL INFORMATION<h5></a>";
          }
          else {
          echo  " <a href='login.php'><h5>PERSONAL INFORMATION<h5></a>  ";
          }
      ?>
       <a href="login.php"><h5>REGISTRATION</h5></a> 
     </div>
    <div class="span3">
      <h4>INFORMATION</h4>
      <a href="feedback.php"><h5>FEEDBACK</h5></a>
      
     </div>
   </div>
</div><!-- Container End 
</div>

</body>

</html>
