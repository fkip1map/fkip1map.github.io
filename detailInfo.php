<?php 
	
	require 'functions.php';

    $hari = $_GET['hari'];
    
    $ruangan = $_GET["ruangan"];
    

	$dataHari = query("SELECT * FROM data_keseluruhan
                        WHERE hari = '$hari'")[0];

    $dataRuangan = query("SELECT * FROM data_keseluruhan
                        WHERE ruangan = '$ruangan'")[0];

	

    $data_keseluruhan = query("SELECT * FROM data_keseluruhan
                        WHERE ruangan = '$ruangan' AND hari='$hari'");



 ?>


<!DOCTYPE html>
<html>
<head>
    <title>ULMAP</title>
    <link rel="stylesheet" type="text/css" href="css/infoKelass.css">
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
        <div class="merahMuda">Ruangan <?= $dataRuangan["ruangan"];?></div>
        
    </div>
    <div class="containerMap">
        <div class="map">
            <div class="headerData">
                <div class="fakultas">Mata Kuliah</div>
                <div class="mataKuliah">Fakultas</div>
                <div class="aksi">Jam</div>
                <div class="jam">Hari</div>
            </div>
    	    
		        <?php $i = 1; ?>
                <?php foreach($data_keseluruhan as $row ) : ?>
                    
            <div class="mapData">	
                <div class="headerDataData">

                    <div class="mataKuliahData">&emsp;<?= $row["mata_kuliah"]; ?></div>
                    <div class="fakultasData"><?= $row["fakultas"]; ?></div>
                    <div class="jamData"><?= $row["jam"]; ?></div>
                    <div class="aksiaksi">
                    <?= $row["hari"]; ?>
            </div>
        </div>
            <?php $i++; ?>
            <?php endforeach; ?>
            
        
    </div>
            </div>
        </div>
    </div>
 
</body>
</html>