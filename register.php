<?php include('server.php');
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Techwear | Register</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
  <style type="text/css">
    .main {
      width: 1360px;
      background-color: black;
      margin: auto;
      height: 800px;
    }

    .space {
      width: 1360px;
      height: 20px;
    }

    .header{
      margin: auto;
    }

    form {
      height: 400px;
    }

    .header > h1{
      color: white;
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
      text-align: center;
    }

    label {
      width: 100px;
      margin-top: 60px;
      color: white;
      float: left;
      margin-left: 500px;
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    input {
      box-sizing:border-box;
      margin-left: 180px;
      margin-top: 60px;
      border: 1px solid transparent; 
      border-left: 1px solid white;
      border-right: 1px solid white;
      border-bottom: 1px solid white;
      background-color: transparent;
    }

    input:hover {
      border: 1px solid white;
    }

    input:focus {
      color: white;
    }

    input:active {
    background-color: white;
    }

    .button {
      width: 99px;
      height: 40px;
      margin: auto;
      margin-top: auto;
      float: none;
      margin-top: 50px;
    }

    .button > button {
      border: 0px solid white;
      border-left: 1px solid white;
      border-right: 1px solid white;
      background-color: black;
      color: white;
      width: 100px;
      height: 20px;
    }

    .button>button:hover{
      border: 1px solid white;
    }

    p {
      color: white;
      text-align: center;
      font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    }

    p > a {
      color: white; 
    }
  </style>
</head>
<body>
<div class = "main">
  <div class = "space">
    
  </div>
  <div class="header">
    <h1>Register</h1>
  </div>
  
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="button">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</div>

</body>
</html>