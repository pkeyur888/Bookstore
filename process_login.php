<?php	
 ob_start();
    session_start();
	
			

if(isset($_POST['insert']))
		{
			include "connection.php";
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			echo $username;
			echo $password;
			
			$sql="SELECT * FROM `member_info` WHERE `m_email_id`='$username' and `m_password`='$password' and `type`=0";
			$res=mysqli_query($conn,$sql);
			
			while($row=mysqli_fetch_assoc($res))
				{			
					$mid= $row['m_email_id'];
					$status=$row['status'];
					$m=$row['m_id'];
				}
				$nr=mysqli_affected_rows($conn);
			   
				
				echo $nr;
				if($nr==1) 
				{
					
					
					if($status=='Active')
					{
						$_SESSION=array();
						$_SESSION['uname']=$row['m_email_id'];
						$_SESSION['m_id']=$m;
						$_SESSION['status']=true;
						echo "login";
						
						header("Location:http://localhost/Bookstore/index.php?mid=$m");
					}
					else
					{
						echo "<script>alert('Admin Block Your Account....')</script>";
					}
				}
				else
				{		
					echo "<script>alert('Wrong username or password..';)</script>";
				}
		}
		else
		{
				echo "<script>alert('Please Insert Username and Password..';)</script>";
		}
		
		
		
?>	