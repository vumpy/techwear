<?php
include("session.php");
include("dbconnection.php");
include("admin_pane.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Techwear | Shop
	</title>

	<style type="text/css">

	.main {
        width: 1360px;
        height: 800px;
        margin: auto;
        background-color: black;
	}
    .type {
		width: 300px;
		height: 100%;
		border-right: 1px solid white; 
    }

    .type > ul > li {
    	list-style-type: none;
    	color: white;
    	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    	margin-bottom: 7px;
        
    }

    .type > ul {
    	margin: 0px;
        padding-left: 79px;
        width: 70px;
    }

    .type > h3 {
    	color: white;
    	margin: 0px;
    	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    	font-size: 50px;
    	padding-top: 27px;
        padding-left: 50px;
    }

    .type:hover {
  border-color: red;
  animation-name: flash_border;
  animation-duration: 2s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-name: flash_border;
  -webkit-animation-duration: 2s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-name: flash_border;
  -moz-animation-duration: 2s;
  -moz-animation-timing-function: linear;
  -moz-animation-iteration-count: infinite;
}

@keyframes flash_border {
  0% {
    border-color: white;
  }
  50% {
    border-color: black;
  }
  100% {
    border-color: white;
  }
}

@-webkit-keyframes flash_border {
  0% {
    border-color: white;
  }
  50% {
    border-color: black;
  }
  100% {
    border-color: white;
  }
}

@-moz-keyframes flash_border {
  0% {
    border-color: white;
  }
  50% {
    border-color: black;
  }
  100% {
    border-color: white;
  }
}

.type > ul > li > a {
    text-decoration: none;
    color: white;
    border-bottom: 1px solid #fff6;
}

.type > form {
	margin-top: 100px;

}


</style>

</head>
<body>
<div class = "main">
    <div class = "">
    
    </div>
	<div class = "type">
		<h3>
			TYPE
		</h3>

		<ul>
		<?php
		$sql = "SELECT * FROM cloth_type";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
	        while($row = $result->fetch_assoc()) {
	            ?>
                <li>
                	<a href="">
                		<?php
                        echo $row["name"];
                		?>
                	</a>
                </li>

	            <?php
	        }
	    }

		?>
		</ul>

        <?php
        if ($result->num_rows > 0) {
            ?> 

            <form action="uploadimg.php" method="POST" enctype="multipart/form-data">
            	<input type="text" name="name" value="<?php echo $name; ?>">
            	<input type="text" name="size" value="<?php echo $size; ?>">
            	<input type="text" name="price" value="<?php echo $price; ?>">
                <input type="file" name="image">
                <button type="submit" name="sub">submit</button>
            </form>

        <?php  
        }
        ?> 


	</div>

	<div class = "items">
		
	</div>
</div>
</body>
</html>