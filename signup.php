<?php

include 'dbh.php';

$firstfame = $_POST['firstfame'];
$lastfame = $_POST['lastfame'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql ="INSERT INTO userfame (firstfame, lastfame, uid, pwd)
       VALUES ('$firstfame', '$lastfame', '$uid', '$pwd')";
$result = mysqli_query($conn, $sql);

header("Location: Index.html");
?>
