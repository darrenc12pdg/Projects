<?php
include '../connections/conn.php';
$Firstname = mysqli_real_escape_string($conn,$_POST['txtFirstName']);
$LastName = mysqli_real_escape_string($conn,$_POST['txtLastName']);
$Email = mysqli_real_escape_string($conn,$_POST['txtEmail']);
$Password = mysqli_real_escape_string($conn,$_POST['txtPassword']);
$AccountType = mysqli_real_escape_string($conn,$_POST['radioAccountType']);
$Address1 = mysqli_real_escape_string($conn,$_POST['txtAdd1']);
$Address2 = mysqli_real_escape_string($conn,$_POST['txtAdd2']);
$City = mysqli_real_escape_string($conn,$_POST['txtCity']);
$Postcode = mysqli_real_escape_string($conn,$_POST['txtPostcode']);
$Country = mysqli_real_escape_string($conn,$_POST['txtCountry']);
$TelNo = mysqli_real_escape_string($conn,$_POST['txtTelNo']);
$ProfilePicture = 'images/profilePics/defaultProfilePic.jpg';

$sql =
("INSERT INTO tblUserAccount(Email, Password, Firstname, Surname, AccountType, Add1, Add2, City, Postcode, Country, TelNo, profilePicture)
VALUES('$Email','$Password','$Firstname','$LastName', '$AccountType', '$Address1', '$Address2', '$City', '$Postcode', '$Country', '$TelNo', '$ProfilePicture');");

mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);


header ('location:../login.php');
?>  
