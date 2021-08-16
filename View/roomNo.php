<?php
$mysqli = new mysqli("localhost", "root", "", "project");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT roomNo
FROM room WHERE booked = 'no'";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($roomNo);
$stmt->fetch();
$stmt->close();


echo  $roomNo;

?>
