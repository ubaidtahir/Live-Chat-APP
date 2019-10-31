<?php 
$con = mysqli_connect('localhost', 'root', ''); //connection Create and check          (2 && 3)
if (!$con) {
    echo "Not connected to server";
}


if (!mysqli_select_db($con, 'livechatting')) //Select DataBase           (4)
    {
    echo "DB not selected";
} 
?>
<!DOCTYPE html>
<html>
	<title>chatroom</title>
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
<style type="text/css">
	body
	{
		background-color:lightgrey;
	}
	.main
	{
		background-color: lightgrey;
		border: 1px solid black;
		
		

	}
	.message_area
	{
		
		
		 height: 500px;

	}

	
	
	
 
</style>
<body>
	<form method="POST" action="">
	<div class="container">
		<div class="row">
			<div class="col-4">
				<form method="POST" action="">
					<h2>Sabtain</h2>
					<?php  
					$qry="SELECT * FROM user where user_id='2'";
					$result = mysqli_query($con, $qry);
					while($row = mysqli_fetch_array($result))
					{

					$user_id2 = $row['user_id'];
						
					} 
					?>
					<input type="hidden" name="user_id" value="<?php echo $user_id2; ?>">
					<input type="text" name="sabtain" placeholder="sabtain typing" class="sabtain" required="required">
					<input type="submit" value="Send" name="sabtain-submit">
				</form>
			</div>
			<div class="col-4 main">
				<div class="message_area">

					<?php

						$con = mysqli_connect('localhost', 'root', ''); //connection Create and check          (2 && 3)
						if (!$con) {
						    echo "Not connected to server";
						}


						if (!mysqli_select_db($con, 'livechatting')) //Select DataBase           (4)
						    {
						    echo "DB not selected";
						}
							 
						   //Form Working Saving Form Data     5()
						$qry="SELECT * FROM messages";
			            $result = mysqli_query($con, $qry);
						while($row = mysqli_fetch_array($result))
						{

						echo $id = $row['user_id'];
						echo $user_name = $row['message'];

						}
						 
					?>
   					
   
			</div>
			</div>
			<div class="col-4"  style="float: right">
				<form method="POST" action="">
					<h2>Ubaid</h2>
						<?php  
					$qry="SELECT * FROM user where user_id='1'";
					$result = mysqli_query($con, $qry);
					while($row = mysqli_fetch_array($result))
					{

					$user_id1 = $row['user_id'];
						
					} 
					?>
					<input type="hidden" name="user_id" value="<?php echo $user_id1 ?>">
					<input type="text" name="ubaid" placeholder="ubaid typing" class="ubaid" required="required">
					<input type="submit" value="Send" name="ubaid-submit">
				</form>
			</div>
		</div>
	
</div>
</form>
	
 <?php





if (isset($_POST['sabtain-submit']))
 {
   //Form Working Saving Form Data     5()

 	$insert_user_id2 = $_POST['user_id'];
    $message   = $_POST['sabtain'];
   
    
    
   //Query         (6)
    
    $s1 = "INSERT INTO messages (message,user_id) VALUES ('$message','$insert_user_id2')";
    $run = mysqli_query($con,$s1);
    
    
    
    if (!$run === TRUE) //Query Run         (7)
        {
        echo "Sending Failed!!!";
    } else {
        echo "Done!!!";
        
    }
   
}

if (isset($_POST['ubaid-submit']))
 {
    	$insert_user_id1 = $_POST['user_id'];
    $message   = $_POST['ubaid'];
   
    
    
   //Query         (6)
  
    $s2 = "INSERT INTO messages (message,user_id) VALUES ('$message','$insert_user_id1')";
    $run = mysqli_query($con,$s2);
    
    
    
    if (!$run === TRUE) //Query Run         (7)
        {
        echo "Sending Failed!!!";
    } else {
        echo "Done!!!";
        
    }
   
}


?>

	


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</div>
</body>
</html>