<?php
if(!empty($_POST["next"])) {
	if(!isset($error_message)) {
		require_once("dbcontroller1.php");
		$db_handle = new DBController();
		$query = "INSERT INTO reg (date,time,bunjee,paintball,rappelling,zipline,offroad,rafting,canyoning,bananaboat) VALUES
		('" . $_POST["date"] . "','" . $_POST["time"] . "','" . $_POST["1"] . "','" . $_POST["2"] . "','" . $_POST["3"] . "','" . $_POST["4"] . "','" . $_POST["5"] . "','" . $_POST["6"] . "','" . $_POST["7"] . "','" . $_POST["8"] . "')";
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


<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Acme|Akronim|Barrio|Bigelow+Rules|Bonbon|Cookie|Courgette|Creepster|Dancing+Script|Eagle+Lake|Ewert|Faster+One|Gochi+Hand|IM+Fell+DW+Pica+SC|Jacques+Francois+Shadow|Leckerli+One|Lemon|Macondo+Swash+Caps|Montez|Lily+Script+One|Irish+Grover|Jim+Nightshade|Kaushan+Script|Lobster|Merienda|Gorditas|Goudy+Bookletter+1911|Pacifico|Satisfy|Special+Elite&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="book.css">
         <link href="/Content/css/datepicker.css" rel="stylesheet">
         <title>Booking</title>
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
                    
        <div class="container-fluid">
            
            <h1 class="one">Book Now</h1>
            <section class="box" style="background-color:white">
                <div class="display">
                    <div class="panel-info">
                        <div class="panel-head">
                            <p class="title">Select your Adventure</p>
                        </div>
                        <div class="panel-body">
                            <form action="book.php" method="POST">
                                <div  class="group">
                                        <div class="row">
                                                <div class="col-sm-6">
                                                    <span class="col col-sm-3">Calendar</span>
                                                    <div class="input-group col-sm-4">
                                                        <input type="date" name="date" class="date" value="<?php if(isset($_POST['date'])) echo $_POST['date']; ?>">
                                                    </div>
                                                </div>
                                                <div class=" col-sm-6">
                                                  <span class="col col-sm-2">Time</span>
            
                                                    <select id="Time" name="time" class="col-sm-2" value="<?php if(isset($_POST['time'])) echo $_POST['time']; ?>">
                                                        <option selected="selected" value="9 AM">9 AM</option>
                                                        <option value="10 AM">10 AM</option>
                                                        <option value="11 AM">11 AM</option>
                                                        <option value="12 AM">12 PM</option>
                                                        <option value="1 PM">1 PM</option>
                                                        <option value="2 PM">2 PM</option>
                                                        <option value="3 PM">3 PM</option>
                                                        <option value="4 PM">4 PM</option>
                                                        <option value="5 PM">5 PM</option>
                                                        <option value="5 PM">6 PM</option>
                                                    </select>
            
                                                </div>
                                            </div>
                                 </div><br>
                                 <div class=" table-responsive">
                                            <table class="table">
                                                <thead class="headd">
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Game</th>
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td width="50%" name="bunjee">Bunjee Jumping</td>
                                                        <td >2500</td>
                                                        <td width="5%"><input class="form-control" id="Count" name="count"  type="text"  value="<?php if(isset($_POST['1'])) echo $_POST['1']; ?>"></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>2</td>
                                                         <td width="50%" name="paint">Paint Ball</td>
                                                         <td >250/hr</td>
                                                        <td width="5%"><input class="form-control" id="Count" name="count" type="text" value="<?php if(isset($_POST['2'])) echo $_POST['2']; ?>"></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                            <td>3</td>
                                                            <td width="50%" name="rappel">Rappeling</td>
                                                            <td >500</td>
                                                            <td width="5%"><input class="form-control" id="Count" name="count" type="text" value="<?php if(isset($_POST['3'])) echo $_POST['3']; ?>"></td>
                                                        </tr>
                                                        
                                                    <tr>
                                                            <td>4</td>
                                                            <td width="50%" name="zipline">Ziplining</td>
                                                            <td >1000</td>
                                                            <td width="5%"><input class="form-control" id="Count" name="count"  type="text" value="<?php if(isset($_POST['4'])) echo $_POST['4']; ?>"></td>
                                                        </tr>
                                                        
                                                    <tr>
                                                            <td>5</td>
                                                            <td width="50%" name="off-road">Off-road riding</td>
                                                            <td >500</td>
                                                            <td width="5%"><input class="form-control" id="Count" name="count" type="text" value="<?php if(isset($_POST['5'])) echo $_POST['5']; ?>"></td>
                                                        </tr>
                                                        
                                                    <tr>
                                                            <td>6</td>
                                                            <td width="50%" name="rafting">Rafting</td>
                                                            <td >1000</td>
                                                            <td width="5%"><input class="form-control" id="Count" name="count" type="text" value="<?php if(isset($_POST['6'])) echo $_POST['6']; ?>"></td>
                                                        </tr>
                                                        
                                                    <tr>
                                                            <td>7</td>
                                                            <td width="50%" name="canyo">Canyoning</td>
                                                            <td >700</td>
                                                            <td width="5%"><input class="form-control" id="Count" name="count" type="text" value="<?php if(isset($_POST['7'])) echo $_POST['7']; ?>"></td>
                                                        </tr>
                                                        
                                                    <tr>
                                                            <td>8</td>
                                                            <td width="50%" name="banana">Banana boat ride</td>
                                                            <td >1500/group</td>
                                                            <td width="5%"><input class="form-control" id="Count" name="count" type="text" value="<?php if(isset($_POST['8'])) echo $_POST['8']; ?>"></td>
                                                        </tr>
                                                </tbody>
                                                </table>
                                </div>
                                <div class="controls pull-right" style="padding-right:15px;">
                                   <input type="button" name="next" value="Next" class="btn btn-primary btn btn-info"><a href="https://killeradventures.000webhostapp.com/ind.php">Next</a>
                                    
                                </div>
                                </form>      
                            </div>
                         
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>