<html>
<head/>
<body>
<?php
//<form method="post" action="#">

$servername = "localhost";
$username = "root";
$password = "root";
$db="DreamADream";
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
//    echo "inside if";


}

$selectedvalue = $_POST["workshop"];
echo "hey";
$sql = "SELECT Person.contact_no
FROM Person, Person_workshop, Workshops
WHERE Workshops.workshop_name =  '".$selectedvalue."'
AND Workshops.workshop_id = Person_workshop.workshop_id
AND Person_workshop.person_id = Person.person_id
";

echo $sql;
$result = mysqli_query($conn, $sql);

// if($result = mysqli_query($conn, $sql)){
// 	echo "inside 0";
	if( $result && mysqli_num_rows($result) > 0)
	{

		
    // output data of each row
    	while($row = mysqli_fetch_row($result)) {
       		// echo "id: " . $row[0]."<br/>";
       		$phone=$row[0];
			echo $phone;

		$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
  		  'From'   => '08268706861',
  		  'To'    => $phone,
  		  'Body' => 'You are on DND list. has added you as customer. If you dont wish to receive their calls, give a missed call to ',
   		  );
		echo "helloooooo";
		$exotel_sid = "pal57"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
		$exotel_token = "2d9bd70e8c40af515088dbe9d8f666b1fd290e80"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
 
		$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
		echo $url;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_VERBOSE, 1);
		echo "heybye";
		curl_setopt($ch, CURLOPT_URL, $url);
		echo "tye";
		curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FAILONERROR, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 echo "heyy" ;
//print "Response = ".print_r($http_result);
//alert("messages sent.");
//print '<script type="text/javascript">'; 
echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully sent');
    window.location.href='message.php';
    </SCRIPT>");
//print 'alert("The email address  is already registered")'; 
//print 'window.location = "message.php"';
//print '</script>'; 
//header ('Location :message.php');
//<script>

//</script>
}

//echo "msg sent to".$phone;
   		}
	
	//else {
  	//  echo "0 results";
	//}
	$conn->close();


//header ('Location :message.php');

//$sql = "SELECT * FROM customer";
?>
</body>
</html>