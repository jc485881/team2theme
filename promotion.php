<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
       
        
    </head>

</html>
<?php include_once('header.php');?>
<link rel="stylesheet" href="/agecare/wp-content/themes/team2theme/style.css" type="text/css" media="screen" />


	<form  action="/gaganplugin/wp-content/plugins/gagandeep_plugin/process.php" method="post">
   <div  class="container">
            <div  class="row">
               <div class="col-md-8">
                    <h1><b>Book an Appointment</h1> 
                    <p> To book the car Service/Maintaince please fill the Booking Form with all the details and we will get back to you as soon as possible </b></p>
                    
					
					
					
					
					
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="name"> Vehicle Year</label>
                                <input type="text" class="form-control" id="firstname" name="fname" maxlength="50" placeholder="YYYY" required>
                            </div>
							<div class="col-sm-4 form-group">
                                <label for="name"> Vehicle Make</label>
                                <input type="text" class="form-control" id="firstname" name="fname" maxlength="50" placeholder="TOYOTA-CAMRY" required>
                            </div>
							<div class="col-sm-4 form-group">
                                <label for="name"> Vehicle Mileage</label>
                                <input type="text" class="form-control" id="firstname" name="fname" maxlength="50" placeholder="XXXXX" required>
                            </div>
							</div>
							
							
							<div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Date:</label>
                                <input type="date" class="form-control" value="2018-07-22"
       min="2018-01-01" max="sysdate" required>
                            </div>
							 <div class="col-sm-6 form-group">
                                <label for="name"> Preffered Time:</label>
                                <input type="time" class="form-control" value="2018-07-22"
        required>
                            </div>
                        </div>
						
						
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="johnsmith@gmail.com" maxlength="50" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="number"> Phone:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="10 DIGITS"  maxlength="10" required>
                            </div>
							</div>
							
							<div class="row">
                            <div class="col-sm-12 form-group">
                               
                                <label for="choice"> Please Select The Needed Services:</label>
							</div>
							</div>
								<div class="row">
									<div class="col-sm-6 form-group">
								
										<p><label class="choice">
										<input type="radio" name="ptype
										" value="cash"> $77- Light Car Service - SPECIAL OFFER  
									</div>
									
									<div class="col-sm-6 form-group"> 		<input type="radio" name="ptype
								" value="card">$157 - Comprehensiver Car Service 
								 </div>
							</div>   <br>
							<div class="row">
									<div class="col-sm-12 form-group">
							<input type="checkbox" name="ptype
								"  value="vouchers">$99 - Aircon Treatment & Sanitize<br>
								<input type="checkbox" name="ptype
								"  value="vouchers">$157 - Full Synthetic Oil Special<br>
								<input type="checkbox" name="ptype
								"  value="vouchers">$119- Road Worthy<br>
								<input type="checkbox" name="ptype
								"  value="vouchers">$157- Exhaust Services<br>
								</label></p></div>
		
								
                            </div>
                        </div>
							
							
							
							
							
							
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                 <input type="submit" name="submit" value="submit"/>
                            </div>
                        </div>
					</div>
				<div>
			</div>
						</form>
                    
                 
