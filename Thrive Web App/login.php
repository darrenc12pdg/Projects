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
</head>
<body>
<div class="login-form">
    <form id="frmLogin" action= "php/checkLogin.php" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <center>Email Address: <input name="txtEmail" type="text" required="required"> </center><br/>
        </div>
        <div class="form-group">
             <center>Password: &emsp;&emsp;<input name="txtPassword" type="password"required="required" </center>
        </div>
        <div class="form-group">
            <center><input type= "submit" value="Submit" /></center>
        </div>      
    </form>
    <p class="text-center"><a href="newUser.php">Create an Account</a></p>
</div>
</body>
</html>                                		                            





















   
    
