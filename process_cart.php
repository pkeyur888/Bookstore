<?php 
session_start();
include 'connection.php';
$mid=$_SESSION['m_id'];
$sid=$_GET['sid'];

		if(isset($_GET['nm']) and isset($_GET['rate']) and isset($_GET['b_id']) and isset($_GET['sid']))
		{
			
			//add item
			$_SESSION['cart'][] = array("id"=>$_GET['b_id'],"nm"=>$_GET['nm'],"rate"=>$_GET['rate'],"qty"=>"1","sid"=>$_GET['sid']);
			$tot = 0;
			$i = 1;
			if(isset($_SESSION['cart']))
			{

				foreach($_SESSION['cart'] as $id=>$x)
				{	
						
						$name=$x['nm'];
						$book_id=$x['id'];
						$qty=$x['qty'];
						$rate=$x['rate'];
						$tot =$x['qty']*$x['rate'];
						$sid=$x['sid'];
						
				}
			}
	
			
	
			$sql1="INSERT INTO `cart_info`(`book_id`, `m_id`,`s_id` ,`book_name`, `qty`, `price`, `total`) VALUES ('$book_id','$mid','$sid','$name','$qty','$rate','$tot')";
		//$sql="INSERT INTO `cart_info`(`book_id`,`m_id`,`book_name`,`qty`, `price`, `total`) VALUES ('$book_id','$mid','$name','$qty','$rate','$tot')";
			mysqli_query($conn,$sql1);
			$k=mysqli_affected_rows($conn);
			
			$b=$book_id;
			$sql="SELECT `qty` FROM `book_info` WHERE `book_id`='$b'";
			$h=mysqli_query($conn,$sql);
			$z=mysqli_fetch_assoc($h);
			echo $z['qty'];
			$qty1=$z['qty']-1;
			$sql2="UPDATE `book_info` SET `qty`='$qty1' WHERE `book_id`='$b'";
			mysqli_query($conn,$sql2);
			if($k==1)
			{
				header("location: product_summary.php");
			}	
		}
		else if(isset($_GET['id']))
			{
				//del a item
				echo "dsf";
				$id=$_GET['id'];
				$sql="DELETE FROM `cart_info` WHERE `cart_id`='$id'";
				mysqli_query($conn,$sql);
				$m=mysqli_affected_rows($conn);
				if($m==1) 		
				{ 
					header("location: product_summary.php"); 
				}
			
			}
	

	
?>