<?php

	include 'connect.php';

	if(isset($_POST['submit']))
	{
		  
		$usn=$_POST['usn'];
		$fname=$_POST['name'];
		$lname=$_POST['name1'];
		$dobdate = date("Y-m-d",strtotime($_POST['dob']));
		$gender = $_POST['gender'];
		$contact= $_POST['num'];
		$qualification = $_POST['quali'];
		$city = $_POST['city'];
		$email1 = $_POST['email'];
		$year1 =$_POST['yoj'];
		$address = $_POST['add1'];
		$sem = $_POST['sem'];

		$query= "insert into st_info values('$usn','$fname','$lname','$dobdate','$gender','$contact','$qualification','$sem','$address','$city','$email1','$year1')";

		$result = mysqli_query($link_id,$query);
		if(mysqli_error($link_id) != null)
		{
			die(mysqli_error($link_id));
		}
		else
		{?>
			<script type="text/javascript">
				window.alert('Registerd Succesfully');
	    		window.location.href='http://localhost/my/index.php';
    		</script>

		<?php }
  	}
  	
  	else
		{
			echo '<script language="javascript">';
			echo 'alert("Error")';
			echo '</script>';
			header("location:javascript://history.go(-1)");
		}

?>
