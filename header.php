<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="s1.css" type="text/css">
<style type="text/css">
	li {
		font-family: sans-serif;
		font-size:18px;
	}
</style>
<!--<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").show();
            };
            $(document).ready(function(){
                $("#user").click(function(){
                    $("#Logout").toggle("show");
                });
            });
        </script>-->
</head>
<body link="white" alink="white" vlink="white">
     <div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li><A HREF="index.php">Home</A></li>
            <li><A HREF="pnrstatus.php">PNR Status</A></li>
            <li><a href="booktkt.php">Book a ticket</a></li>
            <li><?php
				if(isset($_SESSION['user_info'])){
					echo $_SESSION['user_info'];
        }
				else
					echo '<A HREF="register.php">Login/Register</A>';
				?>
			</li>
			<li><?php
	if(isset($_SESSION['user_info'])){
		echo '<a href="logout.php">Logout</a>';
	}
	else
		echo '<b></b>';
	?></li>
            </ul>
          </div>
        </div>
      </div>
</body>
</html>
