<?php
$conn=mysqli_connect("localhost","root","");
				if(!$conn)
				{
							die("<div class='alert alert-danger'>
                                Something is wrong or connection is faild. <a href='http://localhost/Bookstore/Seller/login.php' class='alert-link'>Try Again..</a>.
                            </div>");
				}
				//echo "connection successfully......<br><br>";
				mysqli_select_db($conn,"bookshop");
?>
