<?php
include('../dbcon.php');
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['pcno'];
		$std=$_POST['std'];
		$id=$_POST['sid'];
		
		$img=$_FILES['img']['name'];
		$tempname = $_FILES['img']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$img");
		
		$qry="UPDATE `student_details` SET `rollno`=$rollno,`name`='$name',`city`='$city',`parents contact`='$pcon',`standard`='$std',`image`='$img' WHERE `id`=$id";
		$run=mysqli_query($con,$qry);
		if($run==true)
		{
			?>
			<script>
				alert('Data Updated Successfully');
				window.open('updatestudent.php','_self');
			</script>
			<?php
			
		}
	

?>
