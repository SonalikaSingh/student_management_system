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

<div  style="background-color:#669900; color:#FFFFFF ; text-align:center ;">
<h3> 1.<a href="addstudent.php" style="text-decoration:none; color:#FFFFFF ">Insert Student Details</a><br></h3>
 <h3>2.<a href="updatestudent.php" style="text-decoration:none; color:#FFFFFF ">Update Student Details</a><br></h3>
<h3> 3.<a href="deletestudent.php" style="text-decoration:none; color:#FFFFFF ">Delete Student Details</a><br></h3>
</div>
