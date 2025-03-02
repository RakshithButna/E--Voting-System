<?php 
	session_start();

	// variable declaration
	$fname = "";
	$lname = "";
	$username = "";
	$adn = "";
	$vid = "";
	$email    = "";
	$dob = "";
	$pnb = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'evoting');
	if($db){}else echo"failed";


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fname = $_POST['F_name'];
		$lname =  $_POST['L_name'];
		$adn =  $_POST['aadhar'];
		$vid = $_POST['voterid'];
		$username = $_POST['username'];
		$dob = $_POST['date'];
		$pnb = $_POST['p_n'];
		$email = $_POST['email'];
		$password_1 = $_POST['password'];
		$password_2 = $_POST['c_password'];
		$password_3 = md5($password_1);
		$password_4 = md5($password_2);
	
		// register user if there are no errors in the form
	
			
			$query = "INSERT INTO register (fname, lname, uname, anumber, voterid, email, dob, pwd, cpwd, pnumber) 
			VALUES ('$fname', '$lname','$username','$adn','$vid','$email','$dob','$password_3','$password_4',$pnb)";
			
			$result = mysqli_query($db, $query) or die(mysqli_error($db));
			if($result) {
				echo "Successful!";}
				else {
					print_r(mysqli_error_list($db));
					
				  }

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Details Recorded";
			header('location: login.php');
		

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$vid = mysqli_real_escape_string($db,$_POST['voterid']);
		$dob = mysqli_real_escape_string($db, $_POST['Date']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$pwd_1=md5($password);

		if (empty($username)) {
			array_push($errors, "username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			
			$query = "SELECT * FROM register WHERE uname='$username' AND pwd='$pwd_1' AND voterid = '$vid'";
			$results = mysqli_query($db, $query) or die(mysqli_error($db));

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: vote.php');
			}else {
				echo "<script>alert('Invalid username/password') </script>";
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

//voting..
?>
<?php 
if (isset($_POST['submit_vote'])) {
    if (isset($_SESSION['success'])) :
        echo $_SESSION['success'];  
        unset($_SESSION['success']); 
	endif;

$usernam = mysqli_real_escape_string($db, $_SESSION['username']);
$vote = mysqli_real_escape_string($db, $_POST['vote']);
$vot=md5($vote);

echo '<font color="cornsilk" size="5px"style="font-family:verdana"> User: ',$usernam,'</font>';
if(empty($usernam)) {
	$msg="<center><h4><font color='#FF0000'>Login to vote </h4></center></font>";
	header('location : login.php');
	echo $msg;
}
else{
$sql = mysqli_query($db, 'SELECT * FROM vote WHERE uname="'.$_SESSION['username'].'" AND status="VOTED"');
if(mysqli_num_rows($sql) > 0 ) {
    $msg="<center><h4><font color='#FF0000'>You have already been voted, No need to vote again</h4></center></font>";
    echo $msg;
		
		exit();	
}else{

$sql1="INSERT INTO vote (uname, vote, status) VALUES ('$usernam','$vot', 'VOTED')";
$result = mysqli_query($db, $sql1) or die(mysqli_error($db));}}
}

?>