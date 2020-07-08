<?php
			if(isset($_POST['submit']))
			{

						include 'connection.php';
						$category=$_POST['category'];
						mysqli_query($conn,"INSERT INTO `category`(`category_name`) VALUES ('$category')");
						$c=mysqli_affected_rows($conn);
						if($c==1)
						{
							header("Location:http://localhost/Bookstore/Admin/category.php");
						}


			}
?>
