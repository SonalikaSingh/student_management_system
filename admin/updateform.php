<?php
session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
	  	header('location:../login.php');
	}
?>

<?php
	include('header.php');
	include('title.php');
	include('../dbcon.php');
	
	$sid=$_GET['sid'];
	$qry="SELECT * FROM `student_details` WHERE `id`=$sid";
	$run=mysqli_query($con,$qry);
	
	$data=mysqli_fetch_assoc($run);
?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">

	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
		<label for="exampleFormControlInput1">Roll NO</label>
		<input class="form-control" type="text"  name="rollno" value="<?php echo $data['rollno']; ?>">
   </div>
	
	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
		<label for="exampleFormControlInput1">Full Name</label>
		<input class="form-control" type="text"  name="name" value="<?php echo $data['name']; ?>">
   </div>
	
	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
		<label for="exampleFormControlInput1">City</label>
		<input class="form-control" type="text"  name="city" value="<?php echo $data['city']; ?>">
   </div>
	
	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
		<label for="exampleFormControlInput1">Parents Contact no</label>
		<input class="form-control" type="text"  name="pcno" value="<?php echo $data['parents contact']; ?>">
   </div>
   
   <div class="form-group" style="margin-left:20px; margin-right:20px ">
    <label for="exampleFormControlSelect1">Standard</label>
    <select class="form-control" id="exampleFormControlSelect1" name="std">
     	<option  value="<?php echo $data['standard']; ?>"> <?php echo $data['standard']; ?></option>
	    <option value="1">1st</option>
		<option value="2">2nd</option>
		<option value="3">3rd</option>
		<option value="4">4th</option>
		<option value="5">5th</option>
		<option value="6">6th</option>
	 
    </select>
  </div>
	
	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
    <label for="exampleFormControlFile1">Image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" value="<?php echo $data['image']; ?>">
  </div>
  
  <input type="hidden" name="sid" value="<?php echo $data['id']; ?>"/>
	
	<div align="center"><button type="submit" class="btn btn-success" name="submit"   >Submit</button></div><br><br>

</div>
</form>