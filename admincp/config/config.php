<?php 

	$conn = mysqli_connect("localhost","root","","web_mysqli");
	mysqli_set_charset($conn,"utf8");

	if(mysqli_connect_error())
	{
		echo'Failed to connect to database'.mysqli_connect_error();
	}

?>