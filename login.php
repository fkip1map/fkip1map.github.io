<?php

require 'functions.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $pw = "password";

    $result = mysqli_query($koneksi, "SELECT * FROM data_admin WHERE username = '$username' AND $pw = '$password'");

    if( mysqli_num_rows($result) === 1 ) {

            header("Location: admin/indexAdmin.php?");
            exit;
        }
    

    $error = true;

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>ULMAP</title>
    <link rel="stylesheet" type="text/css" href="css/ubahData.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
</head>
<body>
    <div class="header">
        <div class="inner_header">
            <a href="index.php"><div class="logo_container">
                <h1><</h1><h1>FKIP</h1><h1><span>1MAP</span></h1><h1>></h1>
            </div></a>
                
            
            <ul class="navigation">
                <a href="login.php"><li>LOGIN</li></a>
            </ul>
        </div>
    </div>
	<br><br>
	<div class="ubahDataContainer">
		<div class="ubahData">LOGIN</div>
	</div>
    <br>
    <form class="formContainer"action="" method="post">
		<ul>
			<li>
                <label class="styleLabel" for="username">Username</label>
                <label class="titikDua">:</label>
				<input class="styleInput" type="text" name="username" id="username" required>
			</li>
            <br><br><br><br>
			<li>
                <label class="styleLabel" for="password">Password</label>
                <label class="titikDua">:</label>
				<input class="styleInput" type="password" name="password" id="password" required>
			</li>
            <br><br><br><br>
			
			<button class="buttonSubmit" type="submit" name="login">✓</button>
		</ul>


    </form>
    <br>

    <?php if(isset($error)): ?>
        <p style="color:red; font-style:italic;">Username / Password anda Salah!</p>
    <?php endif; ?>
 
</body>
</html>