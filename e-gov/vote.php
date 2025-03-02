<?php include('server.php') ?>


<html>
    <head>
        <title>Voting Page</title>
        <link rel="stylesheet" href="stylev.css">
        <link rel="shortcut icon" href="vote1.png" type="image/x-icon" />

        <script>
          
            function myFunction() {
                var vote = document.getElementsByName("vote");
                if (vote[0].checked == true || vote[1].checked == true || vote[2].checked == true || vote[3].checked == true || vote[4].checked == true || vote[5].checked == true) {
                   
                
              var x = document.getElementById("snackbar");
              x.className = "show";
              
              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                }
                else{
                    alert("Please select a option to vote");    
                }}
            </script>
    </head>
    <body>
        <div class="header">
            <h1>Online Voting Site</h1>
            <p>A <b>responsive</b> site to vote from your homes..!!</p>
          </div>
        <ul class="navbar">
        <form name="logout" method="POST" action="vote.php" >
            <li><a href="voting.php"><input type="button" name="nav" value="Home"></a> </li>
            <li><a href="status.php"><input type="button" name="nav" value="Status"></a></li>          
            <li><a href="logout.php"><input type="button" name="logout" value="Logout"></a></li>
        </ul><br><br>
        <div id="m">
            <marquee direction="right" srolldelay="5" >Welcome to Online Voting Site </marquee>
        </div><br><br><br><br><br><br>
        <div id="t">
            <form name="vote" method="POST" action="vote.php" >

        <table align="center"  class="cl" cellspacing="10" border="1">
            <tr>
                <th colspan="3"><b>Select Your Vote..!!</b></th>
            </tr>
            <tr>
            <td align="center">
                <img src="1.jfif" alt="" >
            </td>
            <th>Party 1---->></th>
            <td align="center"><input type="radio" name="vote" value="Party1"></td>
            </tr>
            <tr>
                <td align="center">
                    <img src="2.jpeg" alt="">
                </td>
                <th>Party 2---->></th>
                <td align="center"><input type="radio" name="vote" value="Party2"></td>
            </tr>
            <tr>
                <td align="center">
                    <img src="3.jpeg" alt="">
                </td>
                <th>Party 3---->></th>
                <td align="center"><input type="radio" name="vote" value="Party3"></td>
            </tr>
            <tr>
                <td align="center">
                    <img src="4.jfif" alt="">
                </td>
                <th>Party 4--->></th>
                <td align="center"><input type="radio" name="vote" value="Party4"></td>
            </tr>
            <tr>
                <td align="center">
                    <img src="5.jpeg" alt="">
                </td>
                <th>Nota--->></th>
                <td align="center"><input type="radio" name="vote" value="Nota"></td>
            </tr>
            <tr>
                <th colspan="3" align="center">Submit your VOTE here--->>>    <input type="submit" name="submit_vote" id="s" onclick="myFunction()"></th>
            </tr>

            <div id="snackbar">Your VOTE has been submitted, cheers..!!</div>
        </table>
        </form>
       
        <div class="footer"><p>“Someone struggled for your right to vote. Use it.”</p><br><h3>Every vote counts..</h3></div>
    </body>
</html>