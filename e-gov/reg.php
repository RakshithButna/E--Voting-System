<?php include('server.php') ?>
<html>
    <head>
       
        <link rel="shortcut icon" href="vote1.png" type="image/x-icon" />
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styleR.css">
    <script type="text/javascript">
    function validate() {
        if(dob()){
            if(pn()){
                if(mail()){
                    if(an())
                    { if(myFunction())
                    if(mch()){
                        pwd();
                    }
                     }
                   }
                }
            }
            mch();
            pwd();
        
    }
        function pn() {
            p=document.getElementById("pni").value;
            

            if(p.toString().length!=10){
                alert("Enter valid Phone Number");
                return false;
               
            }
            else{
                return true;
            }
        }
            function an() {
               aa=document.getElementById("aadhar").value;
            if(aa.toString().length!=12){
                alert("Invalid aadhar number");
                return false;
               
            }
            return true;
            }
 
        function mail(){
            em=document.getElementById("gm").value;
            atp=em.indexOf("@");
            dotp=em.lastIndexOf(".");
            if (atp<1 || dotp<atp+2 || dotp+2>=em.length){
                alert("Enter a valid E-mail ID");
                return false;
               
            }
            else{
                return true;
            }
        }
        function pwd(){
    pw1=document.getElementById("p1").value;
    pw2=document.getElementById("p2").value;
    if(pw1.match(pw2)){
        return true;

    }
    else{
        alert("enter same password");
    }
}
        function dob() {

            da=new Date();
            ob=new Date(document.getElementById("dob").value);
            d=da.getTime();
            d1=ob.getTime();
            age=(d-d1)/(1000*60*60*24*365);
            if(age<18){
                alert("You are not authorized to vote");
                return false;
               
            }
            else{
                return true;
            }}
            function myFunction() {
                
              var x = document.getElementById("snackbar");
              x.className = "show";
              
              setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                   
                }
                function mch(){
    p=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
    pwds=document.getElementById("p1").value;
    if(pwds.match(p)){
    return true;
    }
    else{
        alert("pattern")
    }
}
        
    </script>
    </head>
    <body>
        <div class="header">
        <img src="evl.jpeg" height="150" width="350">
            <h1>Online Voting Site</h1>
            <p>A <b>responsive</b> site to vote from your homes..!!</p>
          </div>
        <div id="b">
        <ul>
            <li><a href="voting.php"><input type="button" name="nav" value="Home" ></a> </li>
            <li><a href="login.php"><input type="button" name="nav" value="Login"></a></li>
            <li><a href="contact.php"><input type="button" name="nav" value="Contact us"></a></li>
        </ul>
        </div>
        <div id="m">
            <marquee direction="right" srolldelay="5" >Welcome to Online Voting Site </marquee>
        </div><br><br><br><br><br><br>
        <form name="Register" method="POST" action="reg.php" >

        <table align="center"  class="cl" cellspacing="10">
           <tr>
               <th>First_name</th>
               <td><input type="text" name="F_name"  class="round" required></td>
           </tr>
           <tr>
            <th>Last_name</th>
            <td><input type="text" name="L_name"  class="round" required></td>
        </tr>
            <tr>
                <th>
                    User_name
                </th>
                <td><input type="text" name="username"  class="round" required></td>
            </tr>
            <tr>
                <th>
                    Aadhar_number
                </th>
                <td><input type="number" name="aadhar"  class="round" id="aadhar"></td>
            </tr>
            <tr>
                <th>Voter_id</th>
                <td><input type="text" name="voterid"  class="round" required></td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td><input type="text" name="email" id="gm" required></td>
            </tr>
            <tr>
                <th>DOB</th>
                <td><input type="date" name="date" id="dob" class="round" required></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="password" class="round" id="p1" required></td>
            </tr>
            <tr>
                <th>Confirm_Password</th>
                <td><input type="password" name="c_password"required  id="p2" class="round" required ></td>
            </tr>
        </tr>
        <tr>
            <th>
                Phone_number
            </th>
            <td><input type="number" name="p_n"  class="round" maxlength="10" id="pni"></td>
        </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="reg_user"  id="s" onclick="validate();"></td>
            </tr>
        </table>
        </form>
        <div id="snackbar">Your Details are recorded..</div>
        <div class="footer"><p>“Bad officials are elected by good citizens who don’t vote.”</p><br><h3>Every vote counts..</h3></div>
    </body>
</html>