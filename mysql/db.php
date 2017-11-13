<?php 
	$connection = mysqli_connect('localhost', 'root', '', 'course_test');
		//check if connection is done
		if(!$connection) {
			die("Database connection failed");
		}
		
?>