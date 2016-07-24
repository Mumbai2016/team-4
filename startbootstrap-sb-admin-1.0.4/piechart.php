<?php
	include "libchart/libchart/classes/libchart.php";

	header("Content-type: image/png");
	
	$servername = "ec2-54-179-133-213.ap-southeast-1.compute.amazonaws.com";
	$username = "root";
	$password = "root";
	$dbname = "DreamADream";

	// Create connection


	$conn = mysqli_connect("127.0.0.1", $username, $password, $dbname);
	
	

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$chart = new PieChart(850,700);
	
	
	$dataSet = new XYDataSet();
	
	// Select database
	
	$date = 2012;
	// SQL query
	
	while($date<2017){
	$strSQL = "SELECT count(person_id) as count_row FROM Person WHERE joined_date > '".$date."-01-01' AND joined_date < '".$date."-12-31' ";
	//$strSQL ="SELECT * FROM Person ";
	
	
	$result = mysqli_query($conn, $strSQL);
	
	
		
		
		
	$row = mysqli_fetch_assoc($result); 
	
		
	$dataSet->addPoint(new Point($date+"",$row[count_row]));
	$chart->setDataSet($dataSet);
	
	
	$date++;
	}
	

	
	$chart->render();
	
?>