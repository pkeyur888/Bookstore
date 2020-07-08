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

    <?php include 'component/head.php'; ?>

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
    
<?php
					include 'connection.php';
					if(isset($_GET['id']))
					{	
					$id=$_GET['id'];
					$sql = "SELECT * FROM `book_info` WHERE `book_id`='$id'";
					$k = mysqli_query($conn,$sql);
					$s=mysqli_fetch_assoc($k);
					}
?>	
	<div class="row">
			<div  class="span3">
				<img src="<?php echo $s['book_img']; ?>" style="width:100%" alt=" Not Available"/>            
			<div class="span6">
				<h3><?php echo $s['book_title']; ?> </h3>
				<hr class="soft"/>
				<form class="form-horizontal qtyFrm">
				  <div class="control-group">
					<label class="control-label"><span><b>Price:</b><?php echo $s['book_price']; ?></span></label>
					<div class="controls">
					<?php
							
						
						if(isset($_SESSION['status']))
						{
							
							echo '<a href="process_cart.php?nm='.$s['book_title'].'&rate='.$s['book_price'].'&b_id='.$s['book_id'].'&sid='.$s['m_id'].'" class="btn btn-large  pull-right">Add to cart<i class="icon-shopping-cart"></i></a>';
						}		
						else
						{
							echo '<a href="login.php" class="btn btn-large  pull-right">Add to cart<i class="icon-shopping-cart"></i></a>';
						}
					?>
			  
					</div>
				  </div>
				</form>

				<hr class="soft"/>
				<h5><?php $a=$s['qty'];
					  if($a<=0){ echo 'Out of stock';}
					  else{ echo "Stock Available";}?>
				</h5>
				<hr class="soft"/>
				<p><b>Description:</b>
				<?php echo $s['description']; ?>
				</p>
				
				<br class="clr"/>
			<a href="#" name="detail"></a>
			<hr class="soft"/>
			</div>

			<div class="span9">
            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              
            </ul>
            <div id="myTabContent" class="tab-content">
              <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-bordered" border="2px">
				
				<tr class="techSpecRow"><th colspan="2">Product Details</th></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Book Title </td><td class="techSpecTD2"><?php echo $s['book_title']; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Book Authorname</td><td class="techSpecTD2"><?php echo $s['book_authorname']; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Book Language</td><td class="techSpecTD2"><?php echo $s['book_language']; ?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Book Isbn No</td><td class="techSpecTD2"><?php echo $s['isbn_no']; ?></td></tr>
				
			
				</table>

				</p>
              </div>
		
		</div>
          </div>
		  
		  
		  
		  
		  

	</div>
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
