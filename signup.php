<?php include("connection.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="signup" >
        <div class="max-width">
        <div class="logo"><a href="index.php">HANGRY<span>PANGS</span></a></div>
        <h1 class="title">guest details </h1>
            <div class="sform">
            <form action="signup.php" method="post">
                <div class="fields">
                <div class="field fname"> 
                        <input type="name" placeholder="Full Name" name="fullname" required> 
                    </div>
                    <div class="field number"> 
                        <input type="mobile number " placeholder="Mobile Number" name="mobnumber" required> 
                    </div>
                    <div class="field email"> 
                        <input type="Email" placeholder="Email Address" name="email" required> 
                    </div>
                    <div class="field guest"> 
                        <input type="guests" placeholder="No. of GUests" name="totalguest" required> 
                    </div>
                     <div class="field date"> 
                        <input type="date" placeholder="Date" name="date" required> 
                    </div>
                    <div class="field time"> 
                        <input type="time" placeholder=" time" name=" time" required> 
                    </div>
                    
                    <div class="button-area">
                            <button type="submit" value="proceed" name="roceed" class="btn">SignUp</button>
                        </div>
                </div> 
               <h5> Already registered. <a href="login1.php"> Login </a></h5>
            </form>
</div> 
        </div>
</div>
</body>
</html>


<?php
if( isset($_POST['proceed']))
{
    header('location:message.php');
   $fullname = $_POST['name'];
   $telno = $_POST['telno'];
   $email = $_POST['email'];
   $totalguest = $_POST['totalguest'];
   $date = $_POST['date'];
   $time = $_POST['time'];
   $reachingtime = $_POST['reachingtime'];
   $additionalreq


   if($fname != "" && $lname != ""  && $password != ""  && $conpassword != ""  
   && $email != ""  && $telno != "") 
   {
$query = "INSERT INTO form values('$fname','$lname','$password',
'$conpassword','$email','$telno')";
$data = mysqli_query($connection,$query);

if($data)
{
   echo "data inserrted ";
}
else 
{
    echo "failed";
   }
}
else 
{
    echo "<script>alert('fill the form ');</script>";
}
}
?>