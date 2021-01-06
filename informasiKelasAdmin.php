
<?php 
	
	require 'functions.php';

    $ruangan = $_GET["ruangan"];
    
    $senin = "Senin";
    $selasa = "Selasa";
    $rabu = "rabu";
    $kamis = "kamis";
    $jumat = "jumat";
    $sabtu = "sabtu";
    $minggu = "minggu";

	$semua_data = query("SELECT * FROM data_keseluruhan
                        WHERE ruangan = '$ruangan'")[0];
    
   

 ?>


<!DOCTYPE html>
<html>
<head>
    <title>ULMAP</title>
    <link rel="stylesheet" type="text/css" href="css/informasiKelasAdminn.css">
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


    
    <div class="warna">
        <div class="merahMuda">Ruangan <?= $semua_data["ruangan"];?></div>
    </div>

    <div class="map">
        <a href="detailInfo.php?hari=<?= $senin; ?> &ruangan=<?= $semua_data["ruangan"]; ?>"><div class="r25">Senin</div></a>
        <a href="detailInfo.php?hari=<?= $selasa; ?> &ruangan=<?= $semua_data["ruangan"]; ?>"><div class="r25">Selasa</div></a>
        <a href="detailInfo.php?hari=<?= $rabu; ?> &ruangan=<?= $semua_data["ruangan"]; ?>"><div class="r25">Rabu</div></a>
        <a href="detailInfo.php?hari=<?= $kamis; ?> &ruangan=<?= $semua_data["ruangan"]; ?>"><div class="r25">Kamis</div></a>
        <a href="detailInfo.php?hari=<?= $jumat; ?> &ruangan=<?= $semua_data["ruangan"]; ?>"><div class="r25">Jum'at</div></a>
        <a href="detailInfo.php?hari=<?= $sabtu; ?> &ruangan=<?= $semua_data["ruangan"]; ?>"><div class="r25">Sabtu</div></a>
        <a href="detailInfo.php?hari=<?= $minggu; ?> &ruangan=<?= $semua_data["ruangan"]; ?>"><div class="r25">Minggu</div></a>
    </div>

    

 
</body>
</html>