<?php
if(session_id() == '') {
	session_start();
        
}



if(!isset($_SESSION['myEmail'])){ //if login in session is not set
    header("Location: login.php");
}

 if (!isset($_SESSION['myEmail'])) {
		echo"  <a href='login.php'";
	  }
	  else {
             $myFName = $_SESSION['userFirstName'];
          }

    
        
?>

