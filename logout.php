<?php
		session_start();
				
					ob_end_clean();
					session_destroy();
					header("location:http://localhost/Bookstore/");
?>