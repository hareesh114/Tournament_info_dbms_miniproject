<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
html {
	height:100%;
}
body {
	height:100%;
	background-color:dodgerblue;
}
#mainpara {
	width:70%;
	margin:0 auto;
	padding:0;
	border-radius:10px;
	background-color:gray;
	text-align:center;
}
#header, #topleft {
	list-style:none;
	text-align:center;
}
#header li a, #topleft li a, #header ul li a {
	text-decoration:none;
	padding:0 1em;
}
#topleft {
	float:right;
}
#header, #header ul {
	margin:0;
	padding:0;
	list-style:none;
}
#topleft li {
	float:left;
	margin:0 1em 0 0;
	background-color:lightgray;
}
#header {
	display:inline-block;
	font-size: 150%;
	margin:10px 0 0;
}
#header > li {
	display: inline-block;
	margin: 0 10px 10px 0;
	background-color: violet;
}
#header  li{	position:relative;}
#header li a {
	display:block;
	padding:5px 15px;
}
#header ul {
	position:absolute;
	top:100%;
	left:0;
	margin-left:-999em;
	width:200px;
	background:tomato;
}
#header li:hover {
	background-color: tomato;
}
#header ul li {
	display:block;
	text-align:left;
	font-size:16px;
	margin:0;
}
#header ul li a{padding:10px;}
#header li:hover > ul {
	margin:0;
}
#header li li:hover a{background:white}
#header li li:hover > ul {
	margin:0;
	left:100%;
	top:0;
	background:teal;
}
#header li li li:hover a{background:tomato}
</style>
</head>

<body>
<div id="mainpara">
		
		<ul id="header" >
	
				<li><a href="#">GAMES</a>
						<ul>
		
								<li><a href="#">CRICKET</a>
										<ul>
												<li><a href="ipl.php">IPL</a></li>
												<li ><a href="bpl.php">BPL</a></li>
	
										</ul>
								</li>
								<li><a href="#">FOOTBALL</a>
										<ul>
												<li><a href="isl.php">ISL</a></li>
												<li><a href="futsal.php">FUTSAL</a></li>
	
										</ul>
								</li>
								<li><a href="#">KABADDI</a>
										<ul>
												<li><a href="pro.php">PRO KABADDI</a></li>
		
	
										</ul>
								</li>
	
						</ul>
				</li>
 				 
  				<li><a href="login.php">LOGOUT</a></li>
 				
		</ul>
</div>
</body>
</html>


