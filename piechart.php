<?php
	include "libchart/libchart/classes/libchart.php";

	header("Content-type: image/png");
	
	$data = array();
	$chart = new PieChart(500, 500);

	$dataSet = new XYDataSet();
	mysql_connect("127.0.0.1", "root", "root") or die (mysql_error ());

	// Select database
	mysql_select_db("DreamADream") or die(mysql_error());
	$date = 2012;
	// SQL query
	while($date<2017){
	$strSQL = "SELECT count(person_id) as count_row FROM Person WHERE joined_date > '".$date."-01-01' AND joined_date< '".$date."-12-31' ";

	// Execute the query (the recordset $rs contains the result)
	$rs = mysql_query($strSQL);
	// Loop the recordset $rs
	// Each row will be made into an array ($row) using mysql_fetch_array
	$row = mysql_fetch_array($rs)
	 
	$dataSet->addPoint(new Point($date,$row[count_row]));
	$chart->setDataSet($dataSet);
	$date++;
	}
	

	
	$chart->render();
?>