<?php
 
     $connect = mysqli_connect("localhost", "root", "root", "vnexpress");
 	$qr = "
 		SELECT *FROM tin
 		ORDER BY idTin DESC
 		LIMIT 0,1;
 	";
 	$result = $connect->query($qr);
 	// var_dump($result);
 	$row_hotNew = $result->fetch_assoc();
 	// var_dump($row_hotNew);

 	//Next hot news

 	
 		$query = "SELECT *FROM tin ORDER BY idTin DESC LIMIT 1,4;";

 		$hotNews2 = $connect->query($query);
 		
 		$data = $hotNews2->fetch_assoc();
 		var_dump($data);
 		
 		
 
?>
