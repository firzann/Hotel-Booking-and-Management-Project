<!DOCTYPE html>

<?php
include 'db.php';
?>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a id = 'myBtn'><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
				</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">               
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Title*</label>
                                            <select name="title" class="form-control" required >
												<option value selected ></option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>                                           
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>                                            
                               </div>							   
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" required>
                                            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								<div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control" required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Simple Room">SIMPLE ROOM</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Bedding Type</label>
                                            <select name="bed" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
												<option value="None">None</option>
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" class="form-control" required>
												<option value selected ></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option> 
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" min = '<?php echo date("Y-m-d")?>' class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" min = '<?php echo date("Y-m-d")?>' class="form-control">        
                               </div>
                               <div class="panel-heading">
                            CARD PAYMENT ONLY 
                        </div>
                               <div class="form-group">
                                            <label>Payment</label>
                                            <select name="pay" class="form-control" required>
												<option value selected ></option>
                                                <option value="Card">Card</option>
                                            </select>       
                               </div>
                               <div class="form-group">
                                            <label>Name on Card</label>
                                            <input name="namecard" class="form-control" required>
                               </div>
                               <div class="form-group">
                                            <label>Card Number</label>
                                            <input name="cardnumber" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>MM/YY</label>
                                            <input name="mmyy" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>CVV</label>
                                            <input name="cvv" class="form-control" required>
                                            
                               </div>
                       </div>
                        
                    </div>
                </div>

                <!-- <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PAYMENT BY CARD ONLY
                        </div>

                               <div class="form-group">
                                            <label>Name on Card</label>
                                            <input name="namecard" class="form-control" required>
                               </div>
                               <div class="form-group">
                                            <label>Card Number</label>
                                            <input name="cardnumber" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>MM/YY</label>
                                            <input name="mmyy" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>CVV</label>
                                            <input name="cvv" class="form-control" required>
                                            
                               </div>
                       </div>
                        
                    </div>
                </div> -->
				
                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4>HUMAN VERIFICATION</h4>
                        <p>Type Below this code <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
						<p>Enter the random code<br /></p>
							<input  type="text" name="code1" title="random code" />
							<input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
						<input type="submit" name="submit" class="btn btn-primary">
						<?php
							if(isset($_POST['submit']))
							{
							$code1=$_POST['code1'];
							$code=$_POST['code']; 
							if($code1!="$code")
							{
							$msg="Invalide code"; 
							}
							else
							{							
									$con=mysqli_connect("localhost","root","","hotel");
									// $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
									// $rs = mysqli_query($con);
									// $data = mysqli_fetch_array(MYSQLI_NUM);
									if ("") {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";										
									}
									else
									{
										$new ="Not Confirm"; //ini tadi diubah
										$newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`, `Email`, `Phone`, `TRoom`, `Bed`, `NRoom`, `cin`, `cout`,`pay`,`namecard`,`cardnumber`,`mmyy`,`cvv`,`stat`,`nodays`) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[troom]','$_POST[bed]','$_POST[nroom]','$_POST[cin]','$_POST[cout]','$_POST[pay]','$_POST[namecard]','$_POST[cardnumber]','$_POST[mmyy]','$_POST[cvv]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Thank you for booking our room at Hotel California. You will receive the invoice and receipt of your booking through your email and phone number. See you soon!')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
									}
							$msg="Your code is correct";
							}
							}
							?>
						</form>
							
                    </div>
                </div>
            </div>
                </div>

					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
    
</body>
<script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = 'http://localhost/Hotel2/homeafterlogin.php'
    });
  </script>
</html>
