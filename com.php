<?php


$name = $_POST["name"]; 
$text_comment = $_POST["comment"];

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "praktika");

$sql = "INSERT INTO messages(name, com_message) VALUES ('$name', '$text_comment')";
$result=mysqli_query($link, $sql);

header("Location: ".$_SERVER["HTTP_REFERER"]); 
exit;

?>
