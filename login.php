<?php include('server.php');
include('session.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Techwear | Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
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
    background-color: white;
    }

    input:active {
    color: white;
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
  <div class="header">
  	<h1>Login</h1>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="button">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
</body>
</html>