<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RF Comments</title>
</head>

<link rel="stylesheet" href="./style_comments_app.css">

<body>
	
	<header class="header">
        <hr size=4px color=#4F2000>
        <h1 align="center" margin-top="30" class="f2">RF Comments</h1>

        <nav class="header_nav">
            <img src="./images/logo.png" width="130" hspace="30">
            <ul class="header_list">
                <li><a href="http://sitedb/" class="appear">HOME</a></li>
                <li><a href="http://sitedb/#information" class="appear">INFORMATION</a></li>
                <li><a href="http://sitedb/#catalog" class="appear">CATALOG</a></li>
                <li><a href="http://sitedb/#collaborations" class="appear">COLLABORATIONS</a></li>
            </ul>
			<img src="./images/logo.png" width="130" hspace="30">
        </nav>

        <hr size=4px color=#4F2000>
    </header>
	
	<form action="com.php" method="post">
		<label>Enter your name:<br></label>
		<input type="text" placeholder="Name" name="name" class="name_text">
		<label><br>Enter your comment:<br></label>
		<input type="text" placeholder="Comment" name="comment" class="comments_text"><br>
		<button type="submit">Send</button>
	</form>
	
	<hr size=4px color=#4F2000 class="hr">
	
	<div class="divv">
		<?php
			$link = mysqli_connect("localhost", "root", "");
			mysqli_select_db($link, "praktika");

			$sql="SELECT name, com_message FROM messages";
			$result=mysqli_query($link, $sql);

			while ($line=mysqli_fetch_row($result)) {
			echo "<b>Name: </b>".$line[0]."<br>";
			echo "<b>Comment: </b>".$line[1]."<br><br><br>";
			}
		?>
	</div>
</body>
