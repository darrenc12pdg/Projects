<?php

include '../connections/conn.php';


$myEmail= mysqli_real_escape_string($conn,$_POST['txtEmail']); 
$myPassword=mysqli_real_escape_string($conn,$_POST['txtPassword']); 


$sql="
	SELECT * 
	FROM tblUserAccount 
	WHERE Email='$myEmail' 
	AND Password='$myPassword';
	";
	
$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_array($result);

$count=mysqli_num_rows($result);

mysqli_close($conn);

// if valid credentials have been submitted, one match
// will be returned by the database. 
if($count==1){
	session_start();
	
	$_SESSION["myEmail"] = $myEmail;
	$_SESSION["userID"] = $row['id'];
	$_SESSION["userFirstName"] = $row['Firstname'];
	$_SESSION["userSurname"] = $row['Surname'];
	$_SESSION["userType"] = $row['AccountType']; 
	
        if($_SESSION["userType"]==1){
	header("location:../index.php");
        }
        elseif($_SESSION["userType"]==9933) {
        header("location:../admin/index.php");
    }
}
else {
	
	header("location:../logInFail.php");
}

?>