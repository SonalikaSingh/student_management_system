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
<form action="updatestudent.php" method="post">
<div style="margin-top:10px; ">
	Enter Standard : <input type="text" name="standard">&nbsp;&nbsp;&nbsp;
	Enter Student Name : <input type="text" name="sname">&nbsp;&nbsp;&nbsp;
	<input type="submit" name="submit">
</div>
</form>

<?php
if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$standard=$_POST['standard'];
		$name=$_POST['sname'];
		
		$qry="SELECT * FROM `student_details` WHERE `standard`=$standard and `name`LIKE '%$name%'";
		$run=mysqli_query($con,$qry);
		
		if(mysqli_num_rows($run)<1)
		{
			echo "No Record Found";
		}
		else
		{
			?>
			<table width="70%" align="center">
				<tr>
					<th>No</th>
					<th>image</th>
					<th>Name</th>
					<th>RollNo</th>
					<th>edit</th>
				</tr>
			<?php
			$count=0;
			while($data=mysqli_fetch_assoc($run))
			{
				$count++;
			?>
				<tr>
					<th><?php echo $count;?></th>
					<th><img src="../dataimg/<?php echo $data['image'];?>" style="max-width:100px "></th>
					<th><?php echo $data['name'];?></th>
					<th><?php echo $data['rollno'];?></th>
					<th><a href="updateform.php?sid=<?php echo $data['id'];  ?>">edit</a></th>
				</tr>
				<?php
				
			}
			?>
			</table>
			<?php
		}
}
?>

