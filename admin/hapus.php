<?php 

require 'functions.php';

	$id = $_GET["id"];
	$ruangan = "ruangan";
	$hari = "hari";

	$semua_data = query("SELECT * FROM data_keseluruhan
						WHERE id = $id")[0];

	if (hapus ($id)){

		echo "<script>

					alert('Data Berhasil dihapus!');
					document.location.href = 'detailInfo.php?hari=$semua_data[$hari]&ruangan=$semua_data[$ruangan]';

			  </script>	
			  ";
	}else{

		echo "<script>

					alert('Data Gagal Dihapus!');
					document.location.href = 'detailInfo.php?hari=$semua_data[$hari]&ruangan=$semua_data[$ruangan]';

				</script>
				";

	}

 ?>