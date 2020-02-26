<form method="post" action="transactions/register.php">
<div class="container">

<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Registration Form</h4>
</header>
<article class="card-body">
<form method="POST" action="register.php" class="form">
	<div class="form-row">
		<div class="col form-group">
			<label>First Name </label>   
		  	<input type="text" name="firstname" class="form-control" placeholder="" required>
		</div> 
		<div class="col form-group">
			<label>Last Name</label>
		  	<input type="text" name="lastname" class="form-control" placeholder=" " required>
		</div>
		<div class="col form-group">
			<label>Middle Name</label>
		  	<input type="text" name="middlename" class="form-control" placeholder=" " required>
		</div> 
	</div> 
	<div class="form-group">
		<label>Address</label>
		<input type="text" name="address" class="form-control" placeholder="" required>
	</div> 
	<div class="form-group">
        <label for="BirthDate"> Date of Birth</label>
        <input type="Date" name="birthdate" id="BirthDate" class="form-control" required>
    </div>
    <div class="form-group">
		<label>Place of Birth</label>
		<input type="text" name="birthplace" class="form-control" placeholder="" required>
	</div> 
	<div class="form-group">
		<label>Gender</label>
		<div>
			<label class="form-check form-check-inline">
		  	<input class="form-check-input" type="radio" name="gender" value="Male">
		  	<span class="form-check-label"> Male </span>
			</label>
			<label class="form-check form-check-inline">
		  	<input class="form-check-input" type="radio" name="gender" value="Female">
		 	 <span class="form-check-label"> Female</span>
			</label>
		</div>
	</div>
	<div class="form-group">
		<label>Guardian</label>
		<input type="text" name="guardian" class="form-control" placeholder="" required>
	</div>
	<div class="form-group">
		<label>Contacts</label>
	<input type="text" name="contact" class="form-control" placeholder="e.g. +639057622381" required>
    </div>
    <div class="form-group">
		<label>Civil Status</label>
		<input type="text" name="status" class="form-control" placeholder="" required>
	</div>
	<div>
		<div class="form-row">
		<div class="col form-group">
			<label>Year Level</label>
			<select name="level" class="custom-select" style="max-width: 250px;">
		    <option value="1st Year">1st Year</option>
		    <option value="2nd Year">2nd Year</option>
		    <option value="3rd Year">3rd Year</option>
		    <option value="4th Year">4th Year</option>
		    <option value="5th Year">5th Year</option>
			</select>
		</div>
		<div class="col form-group">
			<label>Course</label>
			<select class="custom-select" name="course" style="max-width: 250px;" required>
		    <option value="BSIT">BSIT</option>
		    <option value="BSTCM">BSTCM</option>
		    <option value="BSCPE">BSCPE</option>
		    <option value="BSDS">BSDS</option>
			</select>
		</div>
		</div>
	</div>
	<div class="form-group">
		<label>School Year</label>
		<input type="text" name="schoolyear" class="form-control" placeholder="" required>
	</div>
	<div class="form-group">
		<label>Email address</label>
		<input type="email" name="email" class="form-control" placeholder="" required>
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> 
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Register </button>
    </div>                                              
</form>
	<div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
	<div class="card-footer shadow-lg bg-info text-center text-light b-2 small">
            Copyright &copy; 2020
    </div>
</div> 