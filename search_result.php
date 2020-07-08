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

    <title>Register | The Book Shop</title>

  </head>
<body>

  <?php include 'component/header.php';?>

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php include 'component/sidebar.php';?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    
	<h3> Book Name</h3>
	
	  </form>

<?php
		include 'connection.php';
		$search=$_POST['s'];
		$query="SELECT * FROM `book_info` WHERE `book_id` like '%".$search."%' OR `book_authorname` like '%".$search."%' OR `book_title` like '%".$search."%' OR `book_language` like '%".$search."%' OR `isbn_no` like '%".$search."%' OR `description` like '%".$search."%' OR `category_id` like (SELECT `category_id` FROM `category` where `category_name` like '%".$search."%')";
		$res=mysqli_query($conn,$query) ;
		while($v=mysqli_fetch_assoc($res)):
?>

<!---------------------------------------------------------------------------------------------------------------------->
<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			<li class="span3">
			  <div class="thumbnail">
			<a  href='product_details.php?id=<?php echo $v['book_id']; ?>'><img src="<?php echo $v['book_img']; ?>" height="150px" width="90px" alt=""/></a>
				<div class="caption">
				  <h5><?php echo $v['book_title'];?></h5>
				   <h4 style="text-align:center"><a class='btn btn-large' href='product_details.php?id=<?php echo $v['book_id']; ?>&mid=<?php echo $mid;?>'>VIEW</a> <br><br>Price: <a class="btn btn-primary"><?php echo $v['book_price']; ?></a></h4>
				</div>
			  </div>
			</li>
			<?php endwhile; ?>
		</ul>
		<hr class="soft"/>
	</div>
	
</div>
<!---------------------------------------------------------------------------------------------------------------------->
	
			<br class="clr"/>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
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
