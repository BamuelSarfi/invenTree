<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['user_id'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uid = validate($_POST['user_id']);

	if (empty($uid)) {
		header("Location: index.php?error=User ID is required");
	    exit();
	}else{
		$sql = "SELECT * FROM user WHERE user_id='$uid'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_id'] === $uid) {
            	$_SESSION['id'] = $row['user_id'];
				$_SESSION['name'] = $row['name'];
            	header("Location: ../index.php?");
		        exit();
            }else{
				header("Location: index.php?error=Incorrect User ID");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect User ID");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}