<?php
if (isset($_POST['signup-submit'])){
		require 'dbh.inc.php';
		
		$username=$_POST['uname'];
		$mailid=$_POST['mail'];
		$password=$_POST['pwd'];
		$passwordRepeat=$_POST['pwd-repeat'];
		
		if(empty($username)||empty($mailid)||empty($password)||empty($passwordRepeat)){
			header("Location: ../register.php?error=emptyfields&uname=".$username."&mail=".$mailid);
			exit();
		}
		
		elseif(!filter_var($mailid, FILTER_VALIDATE_EMAIL)){
			header("Location: ../register.php?error=invalidemail&uname=".$username);
			exit();
		}
		
		else if($password!==$passwordRepeat){
			header("Location: ../register.php?error=passwordcheck&uname=".$username ."&mail=".$mailid);
			exit();
		}
		
		else{
			
			$sql="SELECT * FROM users WHERE emailUsers='$mailid'|| uidUsers='$username'";
			$val=mysqli_query($conn, $sql);
			$num=mysqli_num_rows($val);
			if($num>=1){
				header("Location: ../register.php?error=taken");
				exit();
			}
			else{
				$reg="INSERT INTO users(uidUsers, emailUsers, pwdUsers) VALUES ('$username','$mailid', '$password')";
				mysqli_query($conn, $reg);
				header("Location: ../validation.php?signup=success");
			}
		}
		mysqli_close($conn);
}

else{
	header("Location: ../register.php?");
}