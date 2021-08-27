<?php
include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>	
<div class="container">
<h4 style="text-align:right;"><a href="index.php">Form</a></h4>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">DOB</th>
      <th scope="col">Phone</th>
      <th scope="col">Designation</th>
      <th scope="col">Gender</th>
      <th scope="col">Hobbies</th>
    </tr>
  </thead>
  <?php
		$pdo_statement=$conn->prepare("SELECT * FROM `user_info` ORDER BY id ASC");
			$pdo_statement->execute();
			$result=$pdo_statement->FetchAll();
			if(count($result)){
				foreach($result as $data){
  ?>
  <tbody>
    <tr>
      <td><?=$data['id'];?></td>
      <td><?=$data['fname'];?> <?=$data['lname'];?></td>
      <td><?=$data['email'];?></td>
      <td><?=$data['dob'];?></td>
	  <td><?=$data['phone'];?></td>
      <td><?=$data['designation'];?></td>
      <td><?=$data['gender'];?></td>
      <td><?=$data['hobbies'];?></td>
     
    </tr>
    
  </tbody>
  <?php
			}}
			?>
</table>
</div>




	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>