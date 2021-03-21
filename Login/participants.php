<html>
<head>
<title>event_info</title>
<?php 
$con = mysqli_connect('localhost','root','');//connecting to dbserver
mysqli_select_db($con,'kalam2020');//selecting the database
$query = "Select * from eventparticipants";
$un =mysqli_query($con,$query);
$result = mysqli_num_rows($un);
echo "<html> <head><title>Participants</title></head><body><tr><th>Month</th><th>Savings</th></tr>";
if ($result >0)
   {
   while($row = mysqli_fetch_assoc($un )){
  echo "<tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$80</td>
  </tr>";
   echo "fname:" .$row["fname"];
	echo "lname:" .$row["lname"];
	echo "dob:" .$row["dob"];
	echo "gender:" .$row["gender"];
	echo "mail:" .$row["mail"];
	echo "events:" .$row["events"];
	echo "mob:" .$row["mob"];
	}
   }
   echo"</body></html>";
?>
</head>
<body>
</body>
</html>
