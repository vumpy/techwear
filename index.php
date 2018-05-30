<?php
include('session.php');



?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

	<title>
		Techwear
	</title>

	<style type="text/css">
		.main {
			width: 1360px;
			height: 1000px;
			background-color: black;
			margin: auto;
		}

		.navigator > .logo > img{
            width: 110px;
            margin: 40px;
		}


.glitch {
  color: white;
  font-size: 100px;
  position: relative;
  width: 400px;
  margin-left: 390px;
}

@keyframes noise-anim {
  0% {
    clip: rect(94px, 9999px, 44px, 0);
  }
  5% {
    clip: rect(1px, 9999px, 20px, 0);
  }
  10% {
    clip: rect(68px, 9999px, 8px, 0);
  }
  15% {
    clip: rect(78px, 9999px, 32px, 0);
  }
  20% {
    clip: rect(18px, 9999px, 53px, 0);
  }
  25% {
    clip: rect(1px, 9999px, 12px, 0);
  }
  30% {
    clip: rect(3px, 9999px, 19px, 0);
  }
  35% {
    clip: rect(51px, 9999px, 46px, 0);
  }
  40% {
    clip: rect(50px, 9999px, 46px, 0);
  }
  45% {
    clip: rect(56px, 9999px, 50px, 0);
  }
  50% {
    clip: rect(42px, 9999px, 65px, 0);
  }
  55% {
    clip: rect(76px, 9999px, 33px, 0);
  }
  60% {
    clip: rect(6px, 9999px, 84px, 0);
  }
  65% {
    clip: rect(84px, 9999px, 9px, 0);
  }
  70% {
    clip: rect(61px, 9999px, 27px, 0);
  }
  75% {
    clip: rect(72px, 9999px, 60px, 0);
  }
  80% {
    clip: rect(43px, 9999px, 18px, 0);
  }
  85% {
    clip: rect(37px, 9999px, 3px, 0);
  }
  90% {
    clip: rect(57px, 9999px, 52px, 0);
  }
  95% {
    clip: rect(57px, 9999px, 17px, 0);
  }
  100% {
    clip: rect(52px, 9999px, 22px, 0);
  }
}
.glitch:after {
  content: attr(data-text);
  position: absolute;
  left: 2px;
  text-shadow: -1px 0 red;
  top: 0;
  color: white;
  background: black;
  overflow: hidden;
  clip: rect(0, 900px, 0, 0);
  animation: noise-anim 2s infinite linear alternate-reverse;
}

@keyframes noise-anim-2 {
  0% {
    clip: rect(53px, 9999px, 21px, 0);
  }
  5% {
    clip: rect(14px, 9999px, 38px, 0);
  }
  10% {
    clip: rect(70px, 9999px, 90px, 0);
  }
  15% {
    clip: rect(54px, 9999px, 74px, 0);
  }
  20% {
    clip: rect(42px, 9999px, 55px, 0);
  }
  25% {
    clip: rect(5px, 9999px, 59px, 0);
  }
  30% {
    clip: rect(18px, 9999px, 32px, 0);
  }
  35% {
    clip: rect(85px, 9999px, 82px, 0);
  }
  40% {
    clip: rect(19px, 9999px, 11px, 0);
  }
  45% {
    clip: rect(63px, 9999px, 10px, 0);
  }
  50% {
    clip: rect(76px, 9999px, 20px, 0);
  }
  55% {
    clip: rect(89px, 9999px, 87px, 0);
  }
  60% {
    clip: rect(15px, 9999px, 1px, 0);
  }
  65% {
    clip: rect(41px, 9999px, 64px, 0);
  }
  70% {
    clip: rect(57px, 9999px, 39px, 0);
  }
  75% {
    clip: rect(2px, 9999px, 86px, 0);
  }
  80% {
    clip: rect(97px, 9999px, 5px, 0);
  }
  85% {
    clip: rect(92px, 9999px, 5px, 0);
  }
  90% {
    clip: rect(48px, 9999px, 28px, 0);
  }
  95% {
    clip: rect(54px, 9999px, 55px, 0);
  }
  100% {
    clip: rect(26px, 9999px, 93px, 0);
  }
}
.glitch:before {
  content: attr(data-text);
  position: absolute;
  left: -2px;
  text-shadow: 1px 0 blue;
  top: 0;
  color: white;
  background: black;
  overflow: hidden;
  clip: rect(0, 900px, 0, 0);
  animation: noise-anim-2 3s infinite linear alternate-reverse;
}

.welcome > h1{
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
color: white;
font-size: 100px;
margin:0px;
margin-left:390px;

}

.navigator {
	height: 170px;
}

.navigator > .logo {
	float: left;
}

.navigator > .log_sign {
float: right;

}

.navigator > .log_sign > h4 > a{
text-decoration: none;
color: white;

}


.navigator > .log_sign > h4 {
color: white;
float: left;
margin-right: 30px;
font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
}

.welcome {
	height: 260px;
}


.shop {
	padding: 140px;
}
.shop > a{
color: white;
text-decoration: none;
text-align: center;
font-size: 20px;
margin-top: 100px;
}
</style>


</head>
<body>
<div class = "main">
    <div class = "navigator">
    	<div class = "logo">
    		<img src="https://pp.userapi.com/c320727/v320727532/53c8/lluPDk_THGY.jpg">
    	</div>
    	<?php
            if( isset($_SESSION['username']) ) {
        ?>
            <div class = "log_sign">
			    <h4>
			    	<?php
			    	   echo $_SESSION['username'];
			    	?>
			    </h4>
		    </div>

		    <div class = "shop">
		<a href="shop.php">
		<h1>
			Take me to the shop!
		</h1></a>
	    </div>		
		        <?php
            } else {
        ?>
	        <div class = "log_sign">
			    <h4>
			    	<a href="login.php">Log in</a>
			    </h4>

			    <h4>
			    	<a href="register.php">Sign Up</a>
			    </h4>
		    </div>
		</div>

		    <div class = "welcome">
		<h1>
			Welcome To
		</h1>

        <div class="glitch" data-text="TECHWEAR">TECHWEAR

        </div> 

	</div>
        <?php
            }
    	?>


	
	
	</div>
</div>
</body>
</html>