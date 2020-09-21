<?php 

session_start();
include '../connections/conn.php';


if (isset( $_POST['btnUpdateDetails'])) {	

$newEmail = mysqli_real_escape_string($conn,$_POST['txtEmail']);    
$newFirstName = mysqli_real_escape_string($conn,$_POST['txtFirstName']);
$newLastName = mysqli_real_escape_string($conn,$_POST['txtLastName']);
$newPassword = mysqli_real_escape_string($conn,$_POST['txtPassword']);
$newAdd1 = mysqli_real_escape_string($conn,$_POST['txtAdd1']);
$newAdd2 = mysqli_real_escape_string($conn,$_POST['txtAdd2']);
$newCity = mysqli_real_escape_string($conn,$_POST['txtCity']);
$newPostcode = mysqli_real_escape_string($conn,$_POST['txtPostcode']);
$newCountry = mysqli_real_escape_string($conn,$_POST['txtCountry']);
$newTelNo = mysqli_real_escape_string($conn,$_POST['txtTelNo']);        
        
 
$sql = 
"UPDATE tblUserAccount SET Email='$newEmail', Password ='$newPassword', Firstname ='$newFirstName', Surname='$newLastName', Add1 ='$newAdd1', Add2='$newAdd2', City='$newCity', Postcode='$newPostcode', Country='$newCountry', TelNo='$newTelNo'
         WHERE id='".$_SESSION["userID"]."';";

mysqli_query($conn, $sql);
mysqli_close($conn);


header ('location:../account.php');
}

	elseif (isset( $_POST['btnUpload'])) { 

 		if(isset($_FILES['fupProfPic'])){ 
		
			$errors= array();
                        $errors[] = "no file selected. ";
			$file_name = $_FILES['fupProfPic']['name'];
			$file_size =$_FILES['fupProfPic']['size'];
			$file_tmp =$_FILES['fupProfPic']['tmp_name'];
			$file_type=$_FILES['fupProfPic']['type'];  
			$file_ext=strtolower(end(explode('.',$_FILES['fupProfPic']['name']))); 
			$extensions = array("jpeg","jpg","png"); 		
			if(in_array($file_ext,$extensions )=== false){
			 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}
			if($file_size > 2097152){	
			$errors[]='File size must be under 2 MB';
			}
							
			if(empty($errors)==true){//if no errors
			
				
				$finalPath = 'img/profilepics/'.$_SESSION["userID"].$_SESSION["Firstname"].'.'.$file_ext;
				
				
				move_uploaded_file($file_tmp,'../'.$finalPath);
				
				$sql = "UPDATE tblUserAccount SET profilePicture='$finalPath'
				WHERE id='".$_SESSION["userID"]."';";
						
				mysqli_query($conn,$sql);
				mysqli_close($conn);				
								
				header('location:../account.php');				
				
			}else{
				
				$_SESSION['err'] = $errors;
				header("location:../errorAccount.php");
			}

		} 
					
	}
	
	//Check to see if the btnDefault has been clicked	
	elseif (isset( $_POST['btnDefault'])) {

		$sql = "UPDATE tblUserAccount SET profilePicture='img/gjwr8.png'
		WHERE id='".$_SESSION["userID"]."';";
				
		mysqli_query($conn,$sql); 
		mysqli_close($conn);		
		
		header('location:../account.php');	
	}
	
	//If a user hasn't clicked any buttons, go to index.
	else {
		header('location:../index.php');	
	}
		
?>