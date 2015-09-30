<?php
if (isset($_POST['email']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = mysql_connect("localhost","root","");
    if (!$con){
        die('Could not connect: ' . mysql_error());
    }


    mysql_select_db("web_competition", $con);



    $sql = "SELECT * FROM admin WHERE email='".$email."'";
    $result = mysql_query ($sql);

    if(!$result){
        die('ERROR WHILE FETCHING DATA'.mysql_error());
    }
    else{
    $row=mysql_fetch_array($result);
    if($row['password']==$password){
        session_start();
        $_SESSION['email']=$email;
        header( 'Location: http://localhost/WebCompetition/Php/admin/admin_home.php' ) ;
    }
        else{
           echo '<html><script>alert("Wrong Email or Password !")</script></html>';
        }
    }

}
?>

<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Admin Login</title>
  <link rel="stylesheet" href="css/login_form.css">
    <script>
        function validateForm()
        {
            var email = document.forms["login"]["email"].value;
            if (email == null || email == "")
            {
                alert("Email must be filled out");
                return false;
            }
            var atpos = email.indexOf("@");
            var dotpos = email.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
            {
                alert("Not a valid e-mail address");
                return false;
            }
            var password = document.forms["login"]["password"].value;
            if (password == null || password == "")
            {
                alert("Password must be filled out");
                return false;
            }

        }
    </script>

</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Admin Login</h1>
      <form name="login" method="post" action="login_form.php">
        <p><input type="text" name="email" value="" placeholder="Username or Email"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login" onclick="validateForm()"></p>
      </form>
    </div>

    <!--<div class="login-help">
      <p>Forgot your password? <a href="index.html">Click here to reset it</a>.</p>
    </div>-->
  </section>

  
</body>
</html>
