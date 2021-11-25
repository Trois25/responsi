<?php
include "db.php";
$code = $_GET["item_id"];
$syntax = mysqli_query($mydb,"DELETE FROM inventory WHERE item_id='$code'");
$mydb->query($syntax);

header("location:list.php");