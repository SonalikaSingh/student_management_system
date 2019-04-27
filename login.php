<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>
<?php
include('admin/header.php')
?>
<div style="background-color:#003366; height:150px;  "> <h5 align="right" style="margin-right:20px;  ">
<h5><a href="index.php" style="float:left;margin-right:50px; color:#CCCCCC">Back to Home</a></h5>

 <h1 align="center" style="color:#FFFFFF; margin-top:">Welcome to Student Mangement System</h1></div>
 
<form action="login.php" method="post" >
 
 <div style="background-color:#669900; color:#FFFFFF ; text-align:center"><h1>Admin Login</h1></div>
  
 
  <div class="form-group" style="margin-left:20px; margin-right:20px ">
    <label for="exampleFormControlInput1">Username</label>
	<input class="form-control" type="text"  name="uname">
  </div>
  <div class="form-group" style="margin-left:20px; margin-right:20px ">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="upass">
  </div>
  <div align="center"><button type="submit" class="btn btn-success" name="login"   >Login</button></div><br><br>
 </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

include('dbcon.php');
if(isset($_POST['login']))
{
	$username=$_POST['uname'];
	$password=$_POST['upass'];
	
	$qry="SELECT * FROM `admin` WHERE `User_name`='$username' and `Password`='$password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	
	if($row <1)
	{
	?>
	   <script>
	   		alert('Username or Password not match !!')
			window.open('login.php')
	   </script>
	   
	  <?php
	}
	else
	{
		$data=mysqli_fetch_assoc($run); 
		$id = $data['id'];
		
		session_start();
		
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}
}

?>
