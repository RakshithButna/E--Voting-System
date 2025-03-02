<?php include('server.php'); ?>
<?php
if (isset($_POST['submit'])) {
$adn =  $_POST['aadhar'];
$email = $_POST['email'];
$password_1 = $_POST['password'];
$password_2 = $_POST['c_password'];
$password_3 = md5($password_1);
$password_4 = md5($password_2);
$sql2= "UPDATE register SET pwd ='$password_3',cpwd='$password_4' WHERE anumber='$adn' and email='$email'"; 
$result = mysqli_query($db, $sql2) or die(mysqli_error($db)); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="vote1.png" type="image/x-icon" />
    <title>Forgot Password</title>
    <link rel="stylesheet" href="styleL.css">

</head>
<body>
    <div class="header">
        <h1>Online Voting Site</h1>
        <p>A <b>responsive</b> site to vote from your homes..!!</p>
      </div>
    <ul>
        <li><a href="voting.php"><input type="button" name="nav" value="Home"> </a></li>
        <li><a href="login.php"><input type="button" name="nav" value="Login"></a> </li>
        <li><a href="contact.php"><input type="button" name="nav" value="Contact us"></a></li>
    </ul><br><br>
    <div id="m">
    <marquee direction="right" srolldelay="5" >Welcome to Online Voting Site </marquee>
</div><br><br><br><br><br><br>
<form name="Login" method="POST" action="fpassword.php" >

    <table align="center"  class="cl" cellspacing="10">
        <tr>
            <th>
                Aadhar number
            </th>
            <td><input type="text" name="aadhar"  class="round"></td>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><input type="text" name="email" id="gm" required></td>
        </tr>
      
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" class="round"></td>
        </tr>
        <tr>
            <th>Confirm_Password</th>
            <td><input type="password" name="c_password" required  class="round" required ></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit" class="round" id="s"></td>
        </tr>
    </table>
    </form>


    
    <div class="footer"><p>Choose your vote wisely and help the nation to rise..!!</p><br><h3>Every vote counts..</h3></div>
</body>
</html>