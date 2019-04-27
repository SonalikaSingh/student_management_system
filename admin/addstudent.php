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
?>

<form method="post" action="addstudent.php" enctype="multipart/form-data">

	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
		<label for="exampleFormControlInput1">Roll NO</label>
		<input class="form-control" type="text"  name="rollno">
   </div>
	
	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
		<label for="exampleFormControlInput1">Full Name</label>
		<input class="form-control" type="text"  name="name">
   </div>
	
	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
		<label for="exampleFormControlInput1">City</label>
		<input class="form-control" type="text"  name="city">
   </div>
	
	
	<div class="form-group" style="margin-left:20px; margin-right:20px ">
		<label for="exampleFormControlInput1">Parents Contact no</label>
		<input class="form-control" type="text"  name="pcno">
   </div>
   
   <div class="form-group" style="margin-left:20px; margin-right:20px ">
    <label for="exampleFormControlSelect1">Standard</label>
    <select class="form-control" id="exampleFormControlSelect1" name="std">
     
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
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img">
  </div>
	
	<div align="center"><button type="submit" class="btn btn-success" name="submit"   >Submit</button></div><br><br>

</form>

<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['pcno'];
		$std=$_POST['std'];
		
		$img=$_FILES['img']['name'];
		$tempname = $_FILES['img']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$img");
		
		$qry="INSERT INTO `student_details`(`rollno`, `name`, `city`, `parents contact`, `standard`, `image`) VALUES ($rollno,'$name','$city','$pcon','$std','$img')";
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('Data Inserted Successfully');
			</script>
			<?php
		}
	}

?>
