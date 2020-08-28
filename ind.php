<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}

	if(!isset($error_message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO reg (user_name, email, phone) VALUES ('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}
	}
}
?>
<html>
<head>
<meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Acme|Akronim|Barrio|Bigelow+Rules|Bonbon|Cinzel|Cookie|Courgette|Creepster|Dancing+Script|Eagle+Lake|Ewert|Faster+One|Gochi+Hand|IM+Fell+DW+Pica+SC|Jacques+Francois+Shadow|Leckerli+One|Lemon|Macondo+Swash+Caps|Montez|Lily+Script+One|Irish+Grover|Jim+Nightshade|Kaushan+Script|Lobster|Merienda|Gorditas|Goudy+Bookletter+1911|Pacifico|Satisfy|Special+Elite&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="book.css">

<title>PHP User Registration Form</title>
<style>
	body{
    text-align:center;
    background-image: url("https://images.pexels.com/photos/2003154/pexels-photo-2003154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    background-repeat: no-repeat;
    background-size: cover;
    
}
.navi a {
    text-align: center;
    font-size: 30px;
    font-family:'times new roman';
   
 }
#mainNavBar a{
   text-align: center;
   font-size: 17px;
}
.box{
    
    border: 1px solid lightslategrey;
    margin: 35px;
    padding: 35px;
    border-radius: 5px;
    opacity: 0.8;
}
.heading{
    font: bold 35px 'Cinzel',cursive;
}
.username{
    font: bold 25px 'Cinzel',cursive;
}

input[type=text],input[type=email],input[type=number]{
    width: 30%;
}
.btnRegister{
	font: bold 19px 'Cinzel',cursive;
    background-color: black;
    color: white;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
@media only screen and (max-width:812px){
    body{
        text-align:center;
        background-image: url("https://images.pexels.com/photos/2003154/pexels-photo-2003154.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
        background-repeat: no-repeat;
        background-size: cover;
      
    }
    .heading{
        font: bold 30px 'Cinzel',cursive;
    }
    .username{
        font: bold 22px 'Cinzel',cursive;
    }
    .btnRegister{
        font: bold 20px 'Cinzel',cursive;
        background-color: black;
        color: white;
	}
	input[type=text],input[type=email],input[type=number]{
    width: 50%;
}
}

</style>
</head>
<body>
<nav class="navbar navbar-inverse">
            <div class="container-fluid">
                
                <button type="button"class="navbar-toggle" data-toggle="collapse"data-target=#mainNavBar>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
    
                <div class="navi navbar-header">
                    <a href="https://killeradventures.000webhostapp.com/index.html" class="navbar-brand" >Killer Adventures</a>
                </div>
               
                <div class="collapse navbar-collapse" id="mainNavBar">
                    <ul class="nav navbar-nav">
                            <li ><a href="https://killeradventures.000webhostapp.com/home.html">Home</a></li>
                            <li class="dropdown">
                                    <a href="#" class="dropdowm-toggle" data-toggle="dropdown">Things To Do<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                            <li><a href="https://killeradventures.000webhostapp.com/land.html">Land-venture</a></li>
                                            <li><a href="https://killeradventures.000webhostapp.com/water.html">Water-venture</a></li>
                                    </ul>
                            </li>
                            <li><a href="https://killeradventures.000webhostapp.com/terms.html">Terms and Conditions</a></li>
                            <li><a href="https://killeradventures.000webhostapp.com/about.html">About</a></li>
                            <li><a href="https://killeradventures.000webhostapp.com/contact.html">Contact Us</a></li>
                            <li class="active"><a href="https://killeradventures.000webhostapp.com/book.html">Book Now</a></li>
    
                            
                            
                    </ul>
                    
                </div>
                
            </div>
            </nav>
       
<form name="frmRegistration" method="post" action="">
<section class="box" style="background-color: aquamarine">   
<h1 class="heading">Booking Details</h1>
                      <br>      
<div class="conatiner-fluid">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<label class="username">Username</label><br><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"><br><br>
<label class="username">Email</label><br><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"><br><br>
<label class="username">Phonenumber</label><br><input type="text" class="demoInputBox"name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"><br><br>
<label ><input type="checkbox" name="terms"> I accept Terms and Conditions<br><br> <input type="submit" name="register-user" value="Register" class="btnRegister"></label><br><br>
</div>
</section>
</form>
</body></html>