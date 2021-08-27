<?php
include('conn.php');
if(isset($_POST['submit'])){

	if(empty($_POST['fname'])){
		echo'<span style="color:red;">ERROR First Name is Required </span>';
}
else if(empty($_POST['lname'])){
	echo'<span style="color:red;">ERROR Last Name is Required </span>';
}
else if(empty($_POST['email'])){
echo'<span style="color:red;">ERROR Email is Required </span>';
}
else if(empty($_POST['dob'])){
	echo'<span style="color:red;">ERROR Date of Birth is Required </span>';
}
else if(empty($_POST['phone'])){
	echo'<span style="color:red;">ERROR Phone Number is Required </span>';
}
else if(empty($_POST['designation'])){
	echo'<span style="color:red;">ERROR Designation is Required </span>';
}
else if(empty($_POST['gender'])){
	echo'<span style="color:red;">ERROR Gender is Required </span>';
}
else if(empty($_POST['hobbies'])){
	echo'<span style="color:red;">ERROR Hobbies is Required </span>';
}
else{



	$sql="INSERT into `user_info` (fname, lname, email, dob, phone, designation, gender, hobbies) values (:fname, :lname, :email, :dob, :phone, :designation, :gender, :hobbies) ";
	$pdo_statement= $conn->prepare($sql);

	$show= $pdo_statement->execute(

		array(

			':fname'=>$_POST['fname'],
			':lname'=>$_POST['lname'],
			':email'=>$_POST['email'],
			':dob'=>$_POST['dob'],
			':phone'=>$_POST['phone'],
			':designation'=>$_POST['designation'],
			':gender'=>$_POST['gender'],
			':hobbies'=>implode(',',$_POST['hobbies']),

		)
	);
		if(!empty($show) ){

			echo 'Form Data Saved Successfully';
		}
	else{
		echo'ERROR';
	}

  }
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">
	<h4 style="text-align:right;"><a href="view.php">View Data</a></h4>
				<h1>Contact Form</h1>
<form method="POST" enctype="multipart-form/data" action="">
	
	<div class="form-group row">
    <label for="inputEmail3"   class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="fname" id="inputName3" placeholder="First Name">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="lname" id="inputName3" placeholder="Last Name">
    </div>
  </div>

 <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" name="email" id="inputName3" placeholder="Email">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Date of Birth</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" name="dob" id="inputName3" placeholder="Date of Birth">
    </div>
  </div>
  <div class="form-group row">
  	<label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-4">
      <input type="phone" class="form-control" name="phone" id="inputName3" placeholder="Phone">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" id="inputName3" name="designation" placeholder="Designation">
    </div>
    
  </div>
  
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="Male" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="Female">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-2">Hobbies</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" name="hobbies[]" value="Study" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Study
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="hobbies[]" value="Sports" type="checkbox" id="gridCheck2">
        <label class="form-check-label" for="gridCheck1">
          Sports
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="hobbies[]" value="Music" type="checkbox" id="gridCheck3">
        <label class="form-check-label" for="gridCheck1">
          Music
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" name="hobbies[]" value="Travelling" type="checkbox" id="gridCheck4">
        <label class="form-check-label" for="gridCheck1">
          Travelling
        </label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
		
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>