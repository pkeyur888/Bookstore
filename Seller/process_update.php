<?php
								if(isset($_POST['submit']))
								{
									include 'connection.php';
									$stock=$_POST['stock'];
									mysqli_query($conn,"UPDATE `book_info` set `qty`='$stock' where `book_id`='$id'");
									$c=mysqli_affected_rows($conn);
									if($c==1)
									{
										header("Location:http://localhost/bookstore/Seller/stock.php");
									}
								}
						?>