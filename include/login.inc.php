<?php
if (isset($_POST['login-submit'])){
		require 'dbh.inc.php';
		
		$mailid=$_POST['mail'];
		$password=$_POST['pwd'];
		
		if (empty($mailid) || empty($password)){
			header("Location: ../index.php?error=emptyfields&uid=".$mailid);
		}
		else{
			$sql="SELECT * FROM users WHERE emailUsers='$mailid' && pwdUsers='$password'";
			$val=mysqli_query($conn, $sql);
			$num=mysqli_num_rows($val);
			if($num==1){
				header("Location: ../validation.php?result=hurray");
			}
			else{
				header("Location: ../index.php?error=inavlid&uid=".$mailid);
			}
			
			
		}
	mysqli_close($conn);
}

else{
	header("Location: ../index.php?");
}