
<?php
include("loginserv.php");
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class = "login">
    <form action="" method="post">
      <p>
        <label>Username : </label>
        <input type="text" id="user" placeholder="Username" name="user"/>
      </p>
      <p>
        <label>Password : </label>
        <input type="password"placeholder="Password" id="pass" name="pass"/>
      </p>
      <p>
        <input type="submit" name="submit" value="Login"/>
      </p>
    </form>
  </div>
   <div><?php echo $error; ?></div>
</body>
</html>
