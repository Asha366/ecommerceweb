<?php
include("include/settings1.php");//including the file which we have made
$msg="";
if(isset($_POST["btnLogin"]))//"btnLogin" is login button's name and post function fetches the info return 1 and isset checks that login button is set
{
  if(trim($_POST["email"])!=null&&trim($_POST["pass"]!=null))
{




$sql=$mysqli->prepare("select * from login where email = ?");
$sql->bind_param("s",$_POST["email"]);
$sql->execute();
$sql->bind_result($user_id,$email,$pass);
if($sql->fetch()>0 && $_POST["pass"]==$pass)
{
  $_SESSION["userId"]=$user_id;
  $_SESSION["userEmail"]=$email;

    header("location:".baseurl()."a.php");


}
else{
  $msg="Invalid email and password";
}
}
else{
  $msg="Enter email and password";
}
}
?>
<!----------------------------------->
<!doctype html>
<html>
  <head>
    <title>log in Page</title>
   

    <!-- Bootstrap CSS -->


    <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script></script>
     <link rel="stylesheet" href="main.css">
  
  </head>
  
  
  
  <body>
  <div class="login">

    <form action="" method="POST">
       <center><b><h3>Login</h3></b></center>
  
  <!------------------------------------------------------Email-------------------------------------------------------------------->
<div class="col-sm-12">
<div class="form-group">
Email</div>
<input type="email" name="email" placeholder="Email"  class="form-control" required/>
</div>
<!------------------------------------------------------Password-------------------------------------------------------------------->
<div class="col-sm-12">
<div class="form-group">
Password</div>
<input type="password" name="pass" placeholder="Password"  class="form-control" required/>
</div><strong></strong>

         &nbsp;&nbsp; &nbsp;<a href="" name="forgetpswrd" >Forget Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <span> <a href="sign.php" name="forgetpswrd" >Create new Account</a></span>





<!-------------------------------------------------------------------------------------------------------------------------->
<div class="row">
<div class="col-sm-6">
<div class="form-group"></div>
<input type="submit"  name="btnLogin" value="Login"  class="btn btn-info form-control"/>
</div>
<div class="col-sm-6">
<div class="form-group"></div>
<input type="reset" value="Reset"  class="btn btn-warning form-control"/>
</div>
</div>
</div>
</div>

</form>

  
  </body>
</html>