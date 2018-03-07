-<html><body ><center>
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

$sql = "SELECT T_name from team inner join tournament on team.Tmnt_id = tournament.Tmnt_id where tournament.Tmnt_name='ISL'; ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo " TEAMS:"."<br><br>";
    while($row = $result->fetch_assoc()) {
		//echo "$value","<br>";
		echo "<a href=players.php?roc=" . $row["T_name"] .">".$row["T_name"]."</a>"."<br>";	
    }
} else {
    echo "0 results";
}
echo "<br><br>";
$sql1 = "SELECT T_name from team inner join tournament on team.Tmnt_id = tournament.Tmnt_id where tournament.winT_id = team.T_id and tournament.Tmnt_name='ISL'; ";
$result1 = $conn->query($sql1);
$sql2 = "SELECT city from team inner join tournament on team.Tmnt_id = tournament.Tmnt_id where tournament.GT_id = team.T_id and tournament.Tmnt_name='ISL'; ";
$result2 = $conn->query($sql2);


if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
		//echo "$value","<br>";
		echo "WON TEAM:"."<br><br>". $row["T_name"] ;	
    }
} else {
    echo "0 results";
}

echo "<br><br>";
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        //echo "$value","<br>";
        echo "VENUE:"."<br><br>". $row["city"] ;
    
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</center>
</body>
</html>