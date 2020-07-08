<html>
<body>
<div id="sidebar" class="span3">
<?php
$mid=0;
if(isset($_SESSION['status']))
{
	$mid=$_SESSION['m_id'];
	
}	
if(isset($_SESSION['status']))
	{
		echo '<div class="well well-small"><a id="myCart" href="product_summary.php"><img src="themes/images/ico-cart.png"height="50px" class="pull-left"alt="cart"><h4>Cart<span class="badge badge-warning pull-right"></h4></span></a></div>';
	}		
	else
	{
		echo '<div class="well well-small"><a id="myCart" href="login.php"><img src="themes/images/ico-cart.png"height="50px" class="pull-left"alt="cart"><h4>Cart<span class="badge badge-warning pull-right"></h4></span></a></div>';
	}
?>

  
  <ul id="sideManu" class="nav nav-tabs nav-stacked">
    <li class="subMenu open"><a> Category</a>
      <ul>
      <?php
          include 'connection.php';
          $sql = mysqli_query($conn,"SELECT * FROM `category`");
          while($r=mysqli_fetch_assoc($sql)) :
      ?>
      <li><a href="products.php?id=<?php echo $r['category_id'];?>"><i class="icon-chevron-right"></i><?php echo $r['category_name']; ?></a></li>
    <?php endwhile; ?>
      </ul>
    </li>
  </ul>
  <br/>
  <?php
		        include 'connection.php';
				$sql = "SELECT * FROM `book_info` WHERE `status`='Active' AND `book_id`='24'";
				$k = mysqli_query($conn,$sql);
				$r=mysqli_fetch_assoc($k);
  ?>
   <!-- <div class="thumbnail">
    <img src="<?php echo $r['book_img']; ?>" alt="<?php echo $r['book_title']; ?>"/>
    <div class="caption">
      <h4><?php echo $r['book_title']; ?></h4>
	  <h6><?php echo $r['book_authorname']; ?></h6>
      <h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?php echo $r['book_id']; ?>">View</a> <a class="btn btn-primary" href="#">$222.00</a></h4>
    </div>
    </div><br/>-->
	  <?php
		        include 'connection.php';
				$sql = "SELECT * FROM `book_info` WHERE `status`='Active' AND `book_id`='27'";
				$k = mysqli_query($conn,$sql);
				$r=mysqli_fetch_assoc($k);
  ?>
   <!-- <div class="thumbnail">
      <img src="<?php echo $r['book_img']; ?>" title="<?php echo $r['book_title']; ?>" alt="Bootshop Kindel">
      <div class="caption">
        <h4><?php echo $r['book_title']; ?></h4>
		<h6><?php echo $r['book_authorname']; ?></h6>
          <h4 style="text-align:center"><a class="btn" href="product_details.php?id=<?php echo $r['book_id']; ?>">View</a>  <a class="btn btn-primary" href="#">$222.00</a></h4>
      </div>
      </div><br/>-->
    
</div>
</body>
</html>
