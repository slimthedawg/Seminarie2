<?php

include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM userfame WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
  //echo "Username and Password do not match.";
}
else {
  //echo "Logged in successful!";
  header("Location: Index.html");
}

//header("Location: Index.html");
?>
