<?php
if(session_id() == '') {
	session_start();
        
}
if($_SESSION["userType"]!=9933 ){
	
       header("location:../accessdenied.php");
    }
        
function readUser() {
    include ("../connections/conn.php");
    $queryUser = "SELECT * FROM tblUserAccount";
    $user = mysqli_query($conn, $queryUser) or die (mysqli_error($conn));
    mysqli_close($conn);
     if(mysqli_num_rows($user) > 0) {
   while($row = mysqli_fetch_assoc($user)) {
   
      $email = $row["Email"];$pass = $row["Password"]; $fname = $row["Firstname"];$sname = $row["Surname"];
      $atype= $row["AccountType"]; $add11 = $row["Add1"];
        $add2 = $row["Add2"];
        $city = $row["City"];
        $post = $row["Postcode"];
        $country = $row["Country"];
        $telnum = $row["TelNo"];
        $prof = $row["profilePicture"];
        $ban = $row["banned"];
        echo "<a href='#'>
                <div class='box'>
                <h3>$email</h3><h3>$fname</h3><h4>$sname</h4><h4>$atype</h4><h4>$add11</h4><h4>$add2</h4><h4>$city</h4><h4>$post</h4><h4>$country</h4><h4>$telnum</h4><h4>$prof</h4><h4>$ban</h4></div></a>";
  }}
    return $user;
}


function goBack() {
    window.history.back();
}
?>

