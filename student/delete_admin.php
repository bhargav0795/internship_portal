<?php
	require_once '../connect.php';
	$admin_query = $conn->query("SELECT * FROM `stud`") or die(mysqli_error());
	$admin_valid = $admin_query->num_rows;
	if($admin_valid == 1){
		echo '<script>alert("Error: Can\'t delete if only one admin account is available")</script>';
		echo '<script>window.location = "admin.php"</script>';
	}else{
		$conn->query("DELETE FROM `stud` WHERE `stu_id` = '$_REQUEST[stu_id]'") or die(mysqli_error());
		header('location:admin.php');
	}	