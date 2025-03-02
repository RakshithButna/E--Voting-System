<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="vote1.png" type="image/x-icon" />
    <title>Login</title>
    <link rel="stylesheet" href="styleL.css">

</head>
<body>
    <div class="header">
    <img src="evl.jpeg" height="150" width="350">
        <h1>Online Voting Site</h1>
        <p>A <b>responsive</b> site to vote from your homes..!!</p>
      </div>
    <ul>
        <li><a href="voting.php"><input type="button" name="nav" value="Home"> </a></li>
        <li><a href="reg.php"><input type="button" name="nav" value="Register"></a> </li>
        <li><a href="contact.php"><input type="button" name="nav" value="Contact us"></a></li>
    </ul><br><br>
    <div id="m">
    <marquee direction="right" srolldelay="5" >Welcome to Online Voting Site </marquee>
</div><br><br><br><br><br><br>
<form name="Login" method="POST" action="login.php" >

    <table align="center"  class="cl" cellspacing="10">
        <tr>
            <th>
                User_name
            </th>
            <td><input type="text" name="username"  class="round"></td>
        </tr>
        <tr>
            <th>Voter_id</th>
            <td><input type="text" name="voterid" class="round"></td>
        </tr>
        <tr>
            <th>DOB</th>
            <td><input type="date" name="Date"  class="round"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" class="round"></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="login"  class="round" id="s"><br><br> <a href="fpassword.php">Forgot Password..?</a> </td>
        </tr>
    </table>
    </form>
    

    
    <div class="footer"><p>“The ballot is stronger than the bullet.”</p><br><h3>Every vote counts..</h3></div>
</body>
</html>