
<html>
<body>
<div id="header">
<div class="container">
<br />
<div id="logoArea" class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="search_result.php" >
      <input  class="srchTxt" type="text" name="s"/>
		  <input type="submit" name="go" class="btn btn-primary" value="Go">
		</form>
    <ul id="topMenu" class="nav pull-right">
      <li class="">
   	    <a href="rent_list.php" role="button"><span class="btn btn-large btn-success">Rent</span></a>
      </li>
	    <?php
          if(isset($_SESSION['status']))
          {
          echo  "<li class=''>
  	           <a href='logout.php' role='button'><span class='btn btn-large btn-success'>Logout</span></a>
            </li>";
          }
          else {
          echo  "<li class=''>
      	       <a href='login.php' role='button'><span class='btn btn-large btn-success'>Login</span></a>
            </li>";
          }
      ?>
    </ul>
  </div>
</div>
</div>
</div>
</body>
</html>
