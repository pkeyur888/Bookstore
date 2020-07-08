<?php
	session_start();
	
	
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
    <a class="brand" href="index.php"><img src="themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="search_result.php" >
		    <input  class="srchTxt" name="s" type="text"/>
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
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  <div class="item active">
		  <div class="container">
			     <a href="register.php"><img src="themes/images/carousel/0033.jpg"  alt="special offers"/></a>
		  </div>
		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div>
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php include 'component/sidebar.php';?>
<!-- Sidebar end=============================================== -->








		<div class="span9">
			<div class="well well-small">
			<h4>Avaliable Book <small class="pull-right"></small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">

			<?php
			include 'connection.php';
			$sql = "SELECT * FROM `book_info` WHERE `status`='Active' AND `qty` >0 AND `type`='Sell'";
			$result = mysqli_query($conn,$sql);
			$total = mysqli_num_rows($result);
			$i = 1;
			?>
			<?php while($i<=$total): ?>
			<div class='item'>
			  <ul class='thumbnails'><?php $t = 1; ?>
				<?php while( $r=mysqli_fetch_assoc($result)): ?>
				<li class='span3'>
				  <div class='thumbnail'>
					<a href='product_details.php?id=<?php echo $r['book_id']; ?>'><img src="<?php echo $r['book_img']; ?>" alt='' width='200px' height='170px'></a>
					<div class='caption'>
					  <h5><?php echo $r['book_title']; ?></h5>
					  <h4><a class='btn' href='product_details.php?id=<?php echo $r['book_id']; ?>'>VIEW</a> <span class='pull-right'>Price:<?php echo $r['book_price']; ?></span></h4>
					</div>
				  </div>
				</li>
				<?php
				$i++;
				$t++;
				if($t>=5)
				break;
				?>
				<?php endwhile; ?>
			  </ul>
			 </div>
			<?php endwhile; ?>

			 </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
		<h4>Latest Products </h4>

		<?php
				include 'connection.php';
				$sql = "SELECT * FROM `book_info` WHERE `status`='Active' AND `qty` >0 AND `type`='Sell'";
				$k = mysqli_query($conn,$sql);

		?>
			  <ul class="thumbnails"><?php while( $r=mysqli_fetch_assoc($k)): ?>
				<li class='span3'>
				  <div class='thumbnail'>
					<a  href='product_details.php?id=<?php echo $r['book_id']; ?>'><img src="<?php echo $r['book_img']; ?>" alt="<?php echo $r['book_img']; ?>"></a>
					<div class='caption'>
					  <h5><?php echo $r['book_title']; ?></h5>
					  <h4><a class='btn' href='product_details.php?id=<?php echo $r['book_id']; ?>'>VIEW</a> <span class='pull-right'>Price:<?php echo $r['book_price']; ?></span></h4>
					</div>
				  </div>
				</li>
			 <?php endwhile; ?> </ul>

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
