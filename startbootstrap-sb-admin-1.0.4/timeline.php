<!doctype html>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Responsive Timeline design using html and css only - Using CSS3</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<style>
body{font: 14px "Open Sans", serif; background-color: #fdfdfd; float: left; height: 100%; position: relative; width: 100%;}
*{margin: 0; padding: 0; box-sizing: border-box;}
a{text-decoration: none;}
li{list-style: none;}
h2{font-size: 24px; font-weight: 600; margin: 20px 0 10px; text-align: center;}

.container{margin: 0 auto; max-width: 600px;}
.row{float: left; width: 100%;}


/*= timeline css for data in both side =*/
.timeline-both-side{float: left; width: 96%; margin: 20px 2% 50px; position: relative; box-sizing: border-box;}
.timeline-both-side:before{background-color: #ccc; bottom: 0; content: " "; left: 50%; position: absolute; top: 0; width: 1px;}
.timeline-both-side:after{border-radius: 50%; bottom: -22px; content: ""; height: 18px; left: 50%; margin-left: -11px; position: absolute; width: 18px; border: 2px solid #ccc;}
.timeline-both-side li {position: relative; float: left; width: 100%;}
.timeline-both-side li .border-line{background-color: #ccc; font-size: 1.4em; height: 1px; left: 50%; margin-left: -8%; position: absolute; text-align: center; top: 50%; width: 8%; z-index: 100;}
.timeline-both-side li.opposite-side .border-line{left: 50%; right: 50%; margin-left: 0; margin-right: -8%;}
.timeline-both-side li .border-line:before {background-color: #ccc; content: ""; height: 7px; position: absolute; right: -4px; top: -3px; width: 7px;}
.timeline-both-side li.opposite-side .border-line:before{left: -4px; right: auto;}
.timeline-both-side li .timeline-description{border-radius: 2px; background-color: #f1f1f1; border: 1px solid #ccc; float font-size: 13px; padding: 20px; position: relative; width: 42%;}
.timeline-both-side li.opposite-side .timeline-description{float: right;}
/*= timeline css for data in both side end =*/
</style>
<?php
include "connection.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function output($date,$conn)
{

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
		$output = "";
		$id = $_GET['id'];
		$date1=$date;
		
		
		$sql = "SELECT Program.program_name, Person_Program.joining_date, Person_Program.ending_date
		 FROM  Person_Program, Program
		WHERE Person_Program.person_id =".$id."
		AND Person_Program.program_id = Program.program_id 
		AND joining_date > '".$date."-01-01' 
		AND joining_date < '".$date."-12-31' 
		ORDER BY joining_date ";
		
		
		
		$result = mysqli_query($conn, $sql);
		
		$i = 1;
		
		if (!is_null($result) && mysqli_num_rows($result) > 0) {
			// output data of each row
			
			if($i==1)
			{	$output_header ='<p style="text-align=center;margin-left:50%;margin-right:50%">
					'.$date1.'
				</p>
				 <ul class="timeline-both-side">';
				 echo $output_header;
			}
			while($row = mysqli_fetch_assoc($result)) {
				$output = "";
				if(($i%2)==0)
				{	$output.='<li>
						<div class="border-line"></div>
						<div class="timeline-description">
							<p>'. $row['program_name'].'</p>
						</div>
					</li>';
				}
				else{
					$output.= '<li class="opposite-side">
						<div class="border-line"></div>
						<div class="timeline-description">
                    <p>'. $row['program_name'].'</p>
						</div>
					</li>';
				}
				$i++;
				echo $output;
				}
				echo "</ul>";
				
		}
		
}


?>
<body>

        <div class="row">
        <h2>Timeline</h2>
			<?php $date = 2013 ?>
			
			<?php
				while($date<2017)
				{	output($date,$conn);
					$date++;
				}
			?>
       <!-- <ul class="timeline-both-side">
			<?php $date = 2014 ?>
			<p style="text-align='center' "><?php $output = output($date,$conn); $date++; ?>
			<p style="text-align='center' "><?php $output = output($date,$conn); $date++; ?>
			<p style="text-align='center' "><?php $output = output($date,$conn); $date++; ?>
			<p style="text-align='center' "><?php $output = output($date,$conn); $date++; ?>
			<p style="text-align='center' "><?php $output = output($date,$conn); $date++; ?>
			<p style="text-align='center' "><?php $output = output($date,$conn); $date++; ?>
			<p style="text-align='center' "><?php echo $date ;  ?> </p>
			<?php 
				echo $date ;
				$output = output($date,$conn);
				 
				$date++;
			?>
			<p style="text-align='center' "><?php echo $date ; ?> </p>
			<?php 
				echo $date ;
				$output = output($date,$conn);
				 
				$date++;
			?>
			<p style="text-align='center' "><?php echo $date ; ?> </p>
			<?php 
				echo $date ;
				$output = output($date,$conn);
				 
				$date++;
			?>
			
        </ul> -->
    </div>



    </div>
</body>
</html>
<?php
	mysqli_close($conn);
	unset($conn);
?>