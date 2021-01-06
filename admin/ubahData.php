<?php 
	require 'functions.php';

	$id = $_GET["id"];
	$ruangan = "ruangan";
	$hari = "hari";

	$semua_data = query("SELECT * FROM data_keseluruhan
						WHERE id = $id")[0];


	


	


	if (isset ($_POST["submit"])) {

		if (ubah ($_POST) > 0) {
			echo "
				<script>

					alert('Data Berhasil Diubah!');
					document.location.href = 'detailInfo.php?hari=$semua_data[$hari]&ruangan=$semua_data[$ruangan]';

				</script>
			";
		}else {
			echo "<script>

					alert('Data Gagal Diubah!');
					document.location.href = 'detailInfo.php?hari=$semua_data[$hari]&ruangan=$semua_data[$ruangan]';

				</script>
				";
		}


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
            <a href="indexAdmin.php"><div class="logo_container">
			<h1><</h1><h1>FKIP</h1><h1><span>1MAP</span></h1><h1>></h1>
            </div></a>
                
            
            <ul class="navigation">
				<a href="tambahData.php"><li>Tambah Data</li></a>
                <a href="../index.php"><li>Logout</li></a>
            </ul>
        </div>
    </div>
	<br><br>
	<div class="ubahDataContainer">
		<div class="ubahData">UBAH DATA</div>
	</div>
    <br>
    <form class="formContainer" action="" method="post">
		<input type="hidden" name="id" value="<?= $semua_data["id"];?>">
		<ul>
			
				
			
			<li>
				<label class="styleLabel" for="fakultas">Fakultas</label>
				<label class="titikDua">:</label>
				<input class="styleInput" type="text" name="fakultas" id="fakultas" required value="<?= $semua_data["fakultas"];?>">
			</li>
			<br><br><br><br>
			<li>
				<label class="styleLabel" for="ruangan">Ruangan</label>
				<label class="titikDua">:</label>
				<input class="styleInput" type="text" name="ruangan" id="ruangan" required value="<?= $semua_data["ruangan"];?>">
			</li>
			<br><br><br><br>
			<li>
				<label class="styleLabel" for="hari">Hari</label>
				<label class="titikDua">:</label>
				<input class="styleInput" type="text" name="hari" id="hari" required value="<?= $semua_data["hari"];?>">
			</li>
			<br><br><br><br>
			<li>
				<label class="styleLabel" for="mata_kuliah">Mata Kuliah</label>
				<label class="titikDua">:</label>
				<input class="styleInput" type="text" name="mata_kuliah" id="mata_kuliah" required value="<?= $semua_data["mata_kuliah"];?>">
			</li>
			<br><br><br><br>
			<li>
				<label class="styleLabel" for="jam">Jam</label>
				<label class="titikDua">:</label>
				<input class="styleInput" type="text" name="jam" id="jam" required value="<?= $semua_data["jam"];?>">
			</li>
			<br><br><br>
			<button class="buttonSubmit" type="submit" name="submit">✓</button>
		</ul>


	</form>
 
</body>
</html>