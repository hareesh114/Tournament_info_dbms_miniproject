
<?php //include('server.php') ?> 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tournament";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (empty($conn)) {
    die("Connection failed: " . $conn->error());
} 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="yellow">
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register1.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
<?php
  if(isset($_POST['login_user'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);


    //$password = md5($password);
    //echo $password;
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
    //$r = mysqli_fetch_assoc($results);
    echo $r['password'];
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }else {
      echo mysqli_error($conn);
      //array_push($errors1, "Wrong username/password combination");
    }
  }
?>