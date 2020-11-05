
<?php
 session_start();
  include_once('connection.php');
	// Escape user inputs for security
	$id=mysqli_real_escape_string($link, $_SESSION['id']);
	$username = mysqli_real_escape_string($link, $_SESSION['username']);
    $card_type = mysqli_real_escape_string($link,$_POST['type']);
	$m = mysqli_real_escape_string($link,$_POST['month']);
	$y = mysqli_real_escape_string($link,$_POST['year']);
	$card_no = mysqli_real_escape_string($link,$_POST['num']);
	$card_name = mysqli_real_escape_string($link,$_POST['name']);
	$cno = mysqli_real_escape_string($link,$_POST['cvv']);
	$password = mysqli_real_escape_string($link,$_POST['password']);
	$category= mysqli_real_escape_string($link,$_POST['category']);
	


	$c_no=password_hash($cno,PASSWORD_DEFAULT);
	$pass=password_hash($password,PASSWORD_DEFAULT);

    // attempt insert query execution
    $sql = "INSERT INTO payment (u_id,category,username,card_type,months,years,card_no,card_name,cvv,pass) VALUES ('$id','$category','$username','$card_type','$m','$y','$card_no','$card_name','$c_no','$pass')";

    if(mysqli_query($link, $sql)){
		header("location: usersession.php");
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>