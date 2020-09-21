<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Simple Login Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
    
     body {
    background-color: #f17a10;
}
        
    
</style>
  
     
        <script type="text/javascript">
	function CheckForm() {
			var isOK = 0;
			document.getElementById('err').innerHTML = "";
                        
                        var isOK2 = 0;
			document.getElementById('passErr').innerHTML = "";
			 
			var newFirstName = 
			document.forms["frmNewAccount"].elements["txtFirstName"].value;
			
			var newLastName = 
			document.forms["frmNewAccount"].elements["txtLastName"].value;
			
			var newEmail = 
			document.forms["frmNewAccount"].elements["txtEmail"].value;
			
                        var newAdd1 = 
			document.forms["frmNewAccount"].elements["txtAdd1"].value;
			
                        var newAdd2 = 
			document.forms["frmNewAccount"].elements["txtAdd2"].value;
			
                        var newCity = 
			document.forms["frmNewAccount"].elements["txtCity"].value;
			
                        var newPostcode = 
			document.forms["frmNewAccount"].elements["txtPostcode"].value;
                        
                        var newCountry = 
			document.forms["frmNewAccount"].elements["txtCountry"].value;
			
                        var newTel = 
			document.forms["frmNewAccount"].elements["txtTelNo"].value;
			
			
			var newPassword = 
			document.forms["frmNewAccount"].elements["txtPassword"].value;
                
                        var newConfirmPassword = 
			document.forms["frmNewAccount"].elements["txtConfirmPassword"].value;
                
			
			if (newFirstName=="" || newLastName=="" || newEmail=="" || newAdd1=="" || newCity=="" || newTel=="" || newPostcode=="" || newCountry=="" || newPassword=="" || newConfirmPassword=="" )
			 {
				 
				alert("You need to fill in all fields!");
				document.getElementById('err').innerHTML = 
				"Please fill in all fields marked *";
			 }
                         else if(isNaN(newTel)){
                             alert("Please enter a valid Phone Number (Must contain only numbers 0-9)");
                             document.getElementById('passErr').innerHTML = 
				"Please enter a valid phone number";
                         }
                         else if (newPassword != newConfirmPassword){
                             alert("Passwords do not match");
                             document.getElementById('passErr').innerHTML = 
				"Passwords do not match";
                         }
			else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(newEmail))
			{
			document.getElementById('frmNewAccount').submit();
			}
			
			else
			{
				alert("Please Enter a valid email address");
                                document.getElementById('passErr').innerHTML = 
				"Please enter a valid email address";
			}

			
	}
	</script>
    </head>
     
 <body>
<div class="login-form">

        
      
          <h1><center>Create new Account</center></h1>
          <br>
          <h4><center>To create a new account please provide the following information...</center></h4>
          
    <form name="frmNewAccount" id="frmNewAccount" 
    action="php/addNewUser.php" method="post">
        <center><table id="newUserTable">
                <tr><td>*First Name: </td><td><input type="text" name="txtFirstName" /></td></tr> <br />
               
        <tr><td>*Last Name: </td><td><input type="text" name="txtLastName" /></td></tr><br />
        <tr><td>*Email:  </td><td><input type="text" name="txtEmail" /> </td></tr><br /> 
        <tr><td>*Address Line 1 : </td><td><input type="text" name="txtAdd1" /></td></tr>
        <tr><td> Address Line 2 : </td><td><input type="text" name="txtAdd2" /></td></tr>
        <tr><td>*City: </td><td><input type="text" name="txtCity" /></td></tr>
        <tr><td>*Postcode: </td><td><input type="text" name="txtPostcode" /></td></tr>
        <tr><td>*Country: </td><td><select name="txtCountry" ><?php include 'php/countryDropDown.php';$dropdown = displayDropDown(); echo $dropdown;  ?></select></td></tr>
        <tr><td>*Phone Number: </td><td><input type="text" name="txtTelNo" /></td></tr>
        <tr><td>Account Type: &nbsp; </td><td><input type="radio" name="radioAccountType" value="1" checked="checked"/>Diary User</tr>
        <tr><td><span id="passErr" style="color:red"></span>&nbsp;</td></tr>
        <tr><td>*Create Password: </td><td><input type="password" name="txtPassword" /></td></tr>
        <tr><td>*Confirm Password: </td><td><input type="password" name="txtConfirmPassword" /></td></tr>
        
            </table>
         <span id="txtNameError"; text-size: 10pt; color: red><br />
             <p></p>
        <input type="button" name="btnSubmit" 
        onclick="CheckForm();" value="Submit" />
        <input type="reset" name="Reset" id="Reset" value="Reset">
     </center>
        <span id="err" style="color:red"></span>
    </form> 
        </div>

  
       
    </body>
</html>
