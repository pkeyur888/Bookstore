<?php
    session_start();
	$mid=0;
if(isset($_SESSION['status']))
{
	$mid=$_SESSION['m_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

        <?php include 'component/head.php';?>

        <title>The Book Shop</title>

  </head>
<body>
<div id="header">
<div class="container">
<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
  <div class="navbar-inner">
    <a class="brand" href="index.php?mid=<?php echo $mid; ?>"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.php" >
		    <input id="srchFld" class="srchTxt" type="text"/>
		        <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
      <li class="">
        <a href="#" role="button"><span class="btn btn-large btn-success">Rent</span></a>
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
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php include 'component/rent_sidebar.php';?>
<!-- Sidebar end=============================================== -->
		<div class="span9">

		
		
		
		<?php
          if(isset($_SESSION['status']))
          {
          echo  "<li>
  	           <a href='Customer/upload.php' class='btn btn-large pull-right'>Manage Rent Book</a>
            </li>";
          }
          else {
			  "<li>
  	           <a href='login.php' class='btn btn-large pull-right'>Manage Rent Book</a>
            </li>";
          }
      ?>
		
	
		
		<!--<a href="Customer/upload.php" class="btn btn-large pull-right">Manage Rent Book</a>-->
		<?php
				include 'connection.php';
				$sql = "SELECT * FROM `book_info` WHERE `status`='Active' and `type`='Rent'";
				$k = mysqli_query($conn,$sql);

		?>
		<ul class="thumbnails">
			 <?php while( $r=mysqli_fetch_assoc($k)): ?>
				<li class='span3'>
				  <div class='thumbnail'>
					<a  href='rent_details.php?id=<?php echo $r['book_id']; ?>'><img src="<?php echo $r['book_img']; ?>" alt="<?php echo $r['book_img']; ?>"></a>
					<div class='caption'>
					  <h5><?php echo $r['book_title']; ?></h5>
					  <h4><a class='btn' href='rent_details.php?id=<?php echo $r['book_id']; ?>'>VIEW</a> <span class='pull-right'><?php echo $r['rent_price']; ?></span></h4>
					</div>
				  </div>
				</li>
			 <?php endwhile; ?>
     </ul>
     
		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<?php include 'component/footer.php';?>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="themes/js/jquery.js" type="text/javascript"></script>
	<script src="themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="themes/js/google-code-prettify/prettify.js"></script>

	<script src="themes/js/bootshop.js"></script>
  <script src="themes/js/jquery.lightbox-0.5.js"></script>

<span id="themesBtn"></span>
</body>
</html>
