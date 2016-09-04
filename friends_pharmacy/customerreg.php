<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/css/bootstrap.min.css">
        <script src="js/js/jquery-2.0.0.js"></script>
        <script src="js/js/bootstrap.min.js"></script>
        
        <style>
            .radio-left {
                float: left;
            }
        </style>
        
        <title>customer</title>
    </head>
    <body>
        
        <div class="container" style='text-align:center;'>
            <h2 style="margin-bottom:20px;">Online Registration Form</h2>
			
			<form class="form-horizontal"  method="post" action="signup.php">
				
				<div class="form-group">
					<label for="id" class="col-sm-4 control-label">Customer ID</label>
					<div class="col-sm-3">
						<input required class="form-control" type="text" name="id">
					</div>
				</div>
				
				<div class="form-group">
					<label for="fname" class="col-sm-4 control-label">First Name</label>
					<div class="col-sm-3">
						<input required class="form-control" type="text" name="fname">
					</div>
				</div>
				
				<div class="form-group">
					 <label for="lname" class="col-sm-4 control-label">Last Name</label>
					 <div class="col-sm-3">
						<input required class="form-control" type="text" name="lname">
					 </div>
				</div>
				
				<div class="form-group">
					 <label for="dob" class="col-sm-4 control-label">Date Of Birth</label>
					 <div class="col-sm-3">
						<input class="form-control" type="date" name="dob">
					 </div>
				</div>
				
				<div class="form-group">
					<label for="gender" class="col-sm-4 control-label">Gender</label>
					<label class="radio-inline radio-left">
						<input type="radio" name="gender" id="gender" value="male"> Male
					</label>
					<label class="radio-inline radio-left">
						<input type="radio" name="gender" id="gender" value="female"> Female
					</label>
				</div>
						
				<div class="form-group">
					<label for="blood" class="col-sm-4 control-label">Blood Group</label>
					<label class="radio-inline  radio-left">
						<input class="radio-left" type="radio" name="blood" id="ap" value="a+"> A+
					</label>
					<label class="radio-inline radio-left ">
						<input class="radio-left" type="radio" name="blood" id="an" value="a-"> A-
					</label>
					<label class="radio-inline radio-left">
						<input class="radio-left" type="radio" name="blood" id="bp" value="b+"> B+
					</label>
					<label class="radio-inline radio-left">
						<input class="radio-left"  type="radio" name="blood" id="bn" value="b-"> B-
					</label>
					<label class="radio-inline radio-left">
						<input class="radio-left" type="radio" name="blood" id="op" value="o+"> O+
					</label>
					<label class="radio-inline radio-left">
						<input class="radio-left" type="radio" name="blood" id="on" value="o-"> O-
					</label>
					<label class="radio-inline radio-left">
						<input class="radio-left" type="radio" name="blood" id="abp" value="abp"> AB+
					</label>
					<label class="radio-inline radio-left">
						<input class="radio-left" type="radio" name="blood" id="abn" value="ab-"> AB-
					</label>
				</div>
				
			   
				
				<div class="form-group">
					<label for="email" class="col-sm-4 control-label">Email Address</label>
					<div class="col-sm-3">
						<input required class="form-control" type="email" name="email">
					</div>
				</div>
				
				<div class="form-group">
					<label for="mobile" class="col-sm-4 control-label">Contact Number</label>
					<div class="col-sm-3">
						<input required class="form-control" type="text" name="mobile">
					</div>
				</div>
				
				<div class="form-group">
					<label for="password" class="col-sm-4 control-label">Password</label>
					<div class="col-sm-3">
						<input required type="password" class="form-control" id="password" name="password">
					</div>
				</div>
			   
				<div class="form-group">
					<label for="password" class="col-sm-4 control-label">Re-confirm Password</label>
					<div class="col-sm-3">
						<input required type="password" class="form-control" id="repassword">
					</div>
				</div>
				
				<button type="submit" class="btn btn-default" style="margin-left:-133px;">Submit</button>
				  
			</form>
        </div>
    </body>
</html>