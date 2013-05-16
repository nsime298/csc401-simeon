<?php
		$con=mysqli_connect("localhost","root","root","InventoryMGR");
		
		// Check connection
		if (mysqli_connect_errno($con))
 		 {
  			//echo "Failed to connect to MySQL: " . mysqli_connect_error();
			echo('Error');
 		 }
		$sql = "INSERT INTO `InventoryMGR`.`student` (`studentID`, `fname`, `lname`, `email`, `class`, `major`, `password`) VALUES 		(\'220584\', \'Nate\', \'Simeon\', \'nsime298@gmail.com\', \'senior\', \'Computer Science\', \'Password\');";
	
		
		//mysqli_query($con,$sql);
		
	
		//mysqli_close($con);
		
		echo('Worked!');
?>