<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
</head>
<body style="padding-top:50px;" onload="main()">
<body>
   <form action="log.php" method="post">
     </div>
        <div class="container">
         <label><b>LOGIN</b></label>
        <div class="container">
				<strong><span class="rg-source" style="text-align: left;"><?php
       if (isset($_SESSION['login_error'])){
         echo "<span style='color:red;'>YEN DUDU MEMBERE SALAH CAK</span>";
       }
    ?></span></strong>
            <input type="text" name="username" placeholder="username">
            <div class="grup">
       <div class="form-control input-sm">
                    <input class="form-control input-sm" type="password" name="password" placeholder="Password">
                </div>
                <div class="grup">
                    <button class="form-control btn btn-info btn-sm" type="submit" type="button"><span class="glyphicon glyphicon-refresh gly-spin"></span><strong> Login</strong></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>