<?php
	include 'connection.php';
				$id=$_POST['id'];
				$title=$_POST['title'];
				$author=$_POST['author'];
				$isbn=$_POST['isbn'];
				$price=$_POST['price'];
				$language=$_POST['language'];
				//$image=$_POST['image'];
				//$category=$_POST['category'];



				$sql="UPDATE `book_info` SET `book_title`='$title',`rent_price`='$price',`book_authorname`='$author',`book_language`='$language',`isbn_no`='$isbn' WHERE `book_id`='$id'";
				mysqli_query($conn,$sql);

				$c=mysqli_affected_rows($conn);

						if($c==1)
						{
							header("Location:http://localhost/Bookstore/Customer/book_manage.php");
						}
						//echo $c;


?>
