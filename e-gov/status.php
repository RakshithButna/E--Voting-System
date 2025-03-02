
<?php include('server.php'); ?>
<?php 

$usernam = mysqli_real_escape_string($db, $_SESSION['username']);

echo '<font color="cornsilk" size="10px"style="font-family:verdana"> User: ',$usernam,'</font>';


?>

<html>
<head>
    <title>Status | Evoting</title>
    <link rel="stylesheet" href="stylec.css">
</head>
<body>
    <div class="header">
        <h1>Online Voting Site</h1>
        <p>A <b>responsive</b> site to vote from your homes..!!</p>
      </div>
    <ul>
        <li><a href="voting.php"><input type="button" name="nav" value="Home"> </a></li>
        <li><a href="reg.php"><input type="button" name="nav" value="Register"></a> </li>
        <li><a href="login.php"><input type="button" name="nav" value="Login"></a></li>
    </ul><br><br>
    <div id="m">
    <marquee direction="right" srolldelay="5" >Welcome to Online Voting Site </marquee>
</div><br><br><br><br><br><br>


<div class="footer" ><p>Choose your vote wisely and help the nation to rise..!!</p><br><h3>Every vote counts..</h3></div>
</body>
</html>