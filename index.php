<?php
include('admin/header.php')
?>
    <div style="background-color:#003366; height:150px;  "> <h5 align="right" style="margin-right:20px; margin-bottom:50px; "><a href="login.php" style="color:#FFFFFF ; text-decoration:none " >Admin Login</a></h5>
 <h1 align="center" style="color:#FFFFFF; margin-top:">Welcome to Student Mangement System</h1></div>
 <form action="index.php" method="post" enctype="multipart/form-data">
 
 <div style="background-color:#669900; color:#FFFFFF ; text-align:center"><h1>Student Information</h1></div>
  
  <div class="form-group" style="margin-left:20px; margin-right:20px ">
    <label for="exampleFormControlSelect1">Choose Standard</label>
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
    <label for="exampleFormControlInput1"> Enter Rollno:</label>
	<input class="form-control" type="text" name="rollno">
    
  </div>
  <div align="center"><button type="submit" class="btn btn-success" name="submit" value="Show"  >Show</button></div><br><br>
 </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
 if(isset($_POST['submit']))
 {
 	$standard=$_POST['std'];
	$rollno=$_POST['rollno'];
	
	include('dbcon.php');
	include('function.php');
	showdetails($standard,$rollno);
 }
 ?>