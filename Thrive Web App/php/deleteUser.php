<?php
session_start();
include '../Connections/conn.php';


$sql =
"DELETE FROM tblUserAccount WHERE id= '" .$_SESSION["userID"]."';";
mysqli_query($conn, $sql);
mysqli_close($conn);

session_unset();

session_destroy();

header ('location:../index.php');
?>