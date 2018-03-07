<html><body ><center>
<?php
include_once('home.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tournament";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a = $_GET['roc'];
$sql2 = "SELECT P_name from player inner join team on team.T_id = player.T_id where team.T_name = '$a'" ;
$result = $conn->query($sql2);

#$result2 = 



if ($result->num_rows > 0) {
    // output data of each row
    echo "PLAYERS:"."<br><br>";
    while($row = $result->fetch_assoc()) {
		//echo "$value","<br>";
		echo  $row["P_name"]."<br>" ;
		//$ans = $row["T_name"];
		//echo "<a href=home.php?roc=" . $row["P_name"] .">".$row["T_name"]."</a>"."<br>";
		
		#<a href="#">$ans</a>
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</center>
</body>
</html>