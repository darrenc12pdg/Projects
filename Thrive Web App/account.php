<?php
include("php/functions.php");


	
	if ($_SESSION["userID"]=='') {
		header('location:accessdenied.php');
	}
	else {
	include 'connections/conn.php';
	$sql=
	"SELECT * FROM tblUserAccount WHERE id='".$_SESSION["userID"]."';";			
	$result=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($result);		
	mysqli_close($conn);	
	}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Thrive Web App</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    

        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">

        <script src="assets/js/chart-master/Chart.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>


    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="index.php" class="logo"><b>Thrive Web App</b></a>
                <!--logo end-->

                <!-- settings end -->

                <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="php/logout.php">Logout</a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <!--Place php profile picture here -->
                        <p class="centered"><a href="account.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        
                        <h5 class="centered"><?php echo $_SESSION["userFirstName"]; ?></h5>

                        <li class="mt">
                            <a class="active" href="index.php">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard Home</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-desktop"></i>
                                <span>Thrive Content</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="diary.php">View your Online Diary</a></li>
                                <li><a  href="thrivebook.php">Read the Book</a></li>
                                <li><a  href="quiz.php">Take a Locus of Control Quiz</a></li>
                                <li><a  href="selfesteemquiz.php">Calculate your Self Esteem</a></li>
                                <li><a  href="socialanxietyquiz.php">Calculate your Social Anxiety levels</a></li>

                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="scores.php" >
                                <i class="fa fa-cogs"></i>
                                <span>Your Scores</span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;" >
                                <i class="fa fa-book"></i>
                                <span>External Thrive Content</span>
                            </a>
                            <ul class="sub">
                                <li><a  href="https://www.thriveprogramme.org/thrivers/">Testimonials</a></li>
                                <li><a  href="https://www.thriveprogramme.org/research/">Research</a></li>
                                <li><a  href="https://www.thriveprogramme.org/locate-a-licensed-thrive-programme-consultant/">Book a Thrive Consulation</a></li>
                                <li><a  href="https://shop.thriveprogramme.org/">Thrive Shop</a></li>


                            </ul>


                    </ul>
                    <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <section id="main-content">
          <section class="wrapper site-min-height">
      
          	<div class="row mt">
          		
<script type="text/javascript">
function unlockFrm() {
		//Enable value editing
                document.getElementById('txtEmail').readOnly = false;
		document.getElementById('txtFirstName').readOnly = false;
		document.getElementById('txtLastName').readOnly = false;		
		document.getElementById('txtPassword').readOnly = false;
                document.getElementById('txtAdd1').readOnly = false;
                document.getElementById('txtAdd2').readOnly = false;
                document.getElementById('txtCity').readOnly = false;
                document.getElementById('txtPostcode').readOnly = false;
                document.getElementById('txtCountry').readOnly = false;
                document.getElementById('txtTelNo').readOnly = false;
		
		//change css styling to indicate fields are editable
		document.getElementById('txtEmail').className = "unlockedFields";
		document.getElementById('txtFirstName').className = "unlockedFields";	
		document.getElementById('txtLastName').className = "unlockedFields";
		document.getElementById('txtPassword').className = "unlockedFields";
                document.getElementById('txtAdd1').className = "unlockedFields";
                document.getElementById('txtAdd2').className = "unlockedFields";
                document.getElementById('txtCity').className = "unlockedFields";
                document.getElementById('txtPostcode').className = "unlockedFields";
                document.getElementById('txtCountry').className = "unlockedFields";
                document.getElementById('txtTelNo').className = "unlockedFields";
}
</script>
<script>

function CheckForm() {
			
			var newFirstName = 
			document.forms["frmUpdateAccount"].elements["txtFirstName"].value;
			
			var newLastName = 
			document.forms["frmUpdateAccount"].elements["txtLastName"].value;
			
			var newEmail = 
			document.forms["frmUpdateAccount"].elements["txtEmail"].value;
			
                        var newAdd1 = 
			document.forms["frmUpdateAccount"].elements["txtAdd1"].value;
			
                        var newAdd2 = 
			document.forms["frmUpdateAccount"].elements["txtAdd2"].value;
			
                        var newCity = 
			document.forms["frmUpdateAccount"].elements["txtCity"].value;
			
                        var newPostcode = 
			document.forms["frmUpdateAccount"].elements["txtPostcode"].value;
                        
                        var newCountry = 
			document.forms["frmUpdateAccount"].elements["txtCountry"].value;
			
                        var newTel = 
			document.forms["frmUpdateAccount"].elements["txtTelNo"].value;
			
			
			var newPassword = 
			document.forms["frmUpdateAccount"].elements["txtPassword"].value;
                
                
			
			if (newFirstName=="" || newLastName=="" || newEmail=="" || newAdd1=="" || newCity=="" || newTel=="" || newPostcode=="" || newCountry=="" || newPassword=="" )
			 {
				 
				alert("You need to fill in all fields!");
				
			 }
                         else if(isNaN(newTel)){
                             alert("Please enter a valid Phone Number (Must contain only numbers 0-9)");
                           
                         }
                        
                         
			else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(newEmail))
			{
			document.getElementById('btnDetails').click();
			}
			
			else
			{
				alert("Please Enter a valid email address");
                                
			}
                    }
			function checkDelete(){
    if (confirm('Are you sure you want to delete your account? THIS ACTION CANNOT BE UNDONE!')) {
    document.getElementById('btnDelete').click();
} else {
    
}
}
</script>
<style type="text/css">
#profPic {
	width:200px; height:220px; float:left;
}

#profInfo {
	width:395px; height:220px; float:left; padding-left:5px;	
}

#prof {
	width: 600px;
	height: 700px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	clear: both;
} 

#prof img{
	width:200px; height:220px; 
}

.subHead {
	padding:0px; margin:0px;
	font-size:100%;	
}

.lockedFields {
	background-color:#CCC;	
}

.unlockedFields {
	background-color:#FFF;	
}
tr, td {
      padding: 5px;
  }
  
</style>

<?php
				echo '<img src="'.$row['profilePicture'].'" alt="profile pic" />';
			?>
            <br>
                
            <br>
            <h2>Personal Details:</h2>
        
        
        
        <form action="php/applyProfileUpdate.php" method="post" enctype="multipart/form-data" id="frmUpdateAccount">
            <h2 class="subHead">Change Profile Picture: <br><i>(must be a jpg or png file, must not exceed 2MB)</i></h2>
        <input type="file" name="fupProfPic" />
         <input type="submit" name="btnUpload" value="Upload"/><br />
        Delete Current Profile Picture: 
        <input type="submit" name="btnDefault" value="Delete"/>
        
       
        <table><thead> <td>
        <h2 class="subHead">Update Profile:</h2>
        </td> <td><input type="button" name="btnUnlock" 
                         onclick="unlockFrm();" value="Edit" /></td></thead>
        
        
             
         <tr><td><h2 class="subHead"> Email:
          </td><td><input type="text" name="txtEmail" id="txtEmail" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['Email'].'"' ?> />
          </td></tr><br />
        
             <tr><td><h2 class="subHead"> First Name:
          </td><td><input type="text" name="txtFirstName" id="txtFirstName" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['Firstname'].'"' ?> />
          </td></tr><br />
             
             <tr> <td>Last Name:</td>
          <td><input type="text" name="txtLastName" id="txtLastName" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['Surname'].'"' ?> />  
          </td></tr> <br />
             
             <tr> <td>Address Line 1:</td>
          <td><input type="text" name="txtAdd1" id="txtAdd1" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['Add1'].'"' ?> />  
          </td></tr> <br />
             
             <tr> <td>Address Line 2:</td>
          <td><input type="text" name="txtAdd2" id="txtAdd2" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['Add2'].'"' ?> />  
          </td></tr> <br />
             
             <tr> <td>City:</td>
          <td><input type="text" name="txtCity" id="txtCity" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['City'].'"' ?> />  
          </td></tr> <br />
             
             <tr> <td>Postcode:</td>
          <td><input type="text" name="txtPostcode" id="txtPostcode" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['Postcode'].'"' ?> />  
          </td></tr> <br />
             
             <tr> <td>Country:</td>
          <td><select name="txtCountry" id="txtCountry" 
        readonly="readonly" class="lockedFields"/><?php include 'php/countryDropDown.php';$dropdown = displayDropDown(); echo $dropdown;  ?></select>  
          </td></tr> <br />
             
             <tr> <td>Tel No:</td>
          <td><input type="text" name="txtTelNo" id="txtTelNo" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['TelNo'].'"' ?> />  
          </td></tr> <br />
             
             <tr><td>Password:</td>
          <td><input type="password" name="txtPassword" id="txtPassword" 
        readonly="readonly" class="lockedFields"
        <?php echo  'value="'.$row['Password'].'"' ?> />  
          </td></tr><br />      
          </table>
        <input type="button" name="btnSubmit" onclick="CheckForm();" value="Submit" />
         <input type="submit" hidden id="btnDetails" name="btnUpdateDetails" value="Update Details" />  
         
        </form>
        
       
   
     
            <form method="post" action="php/deleteUser.php">
                <input type="button" name="btnDelete2" onclick="checkDelete();" value="Delete Account" />
        <input type="submit" hidden id="btnDelete" name="btnDelete" value="Delete Account">
            </form>
       
        </div>
            
          
          
                </div>
          </div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Thrive Web App 2019
              <a href="post_add" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
