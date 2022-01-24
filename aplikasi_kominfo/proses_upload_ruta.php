<?php
	include 'koneksi.php';
	include "plugin/excel_reader2.php";

	$pilihan=$_POST['pilihan'];

	if($pilihan=="tambah"){
		$target = basename($_FILES['file']['name']) ;
		move_uploaded_file($_FILES['file']['tmp_name'], $target);
		chmod($_FILES['file']['name'],0777);
		$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'],false);
		$jumlah_baris = $data->rowcount($sheet_index=0);
		$berhasil = 0;
		for ($i=3; $i<=$jumlah_baris; $i++){

			$ruta_6=$data->val($i, 2);
			$id_ruta=$data->val($i, 1);
			$b1_k1b=$data->val($i, 4);
			$b1_k2b=$data->val($i, 5);
			$b1_k3b=$data->val($i, 7);
			$b1_k4a=$data->val($i, 6);
			$b1_k6=$data->val($i, 8);
			$b1_k8=$data->val($i, 14);
			$b1_k9=$data->val($i, 15);
			$b1_k10=$data->val($i, 16);
			$b3_k1a=$data->val($i, 17);
			$b3_k2=$data->val($i, 19);
			$b3_k3=$data->val($i, 20);
			$b3_k4a=$data->val($i, 21);
			$b3_k4b=$data->val($i, 22);
			$b3_k5a=$data->val($i, 23);
			$b3_k5b=$data->val($i, 24);
			$b3_k6=$data->val($i, 25);
			$b3_k7=$data->val($i, 26);
			$b3_k8=$data->val($i, 28);
			$b3_k9a=$data->val($i, 29);
			$b3_k9b=$data->val($i, 30);
			$b3_k10=$data->val($i, 32);
			$b3_k11a=$data->val($i, 34);
			$b3_k11b=$data->val($i, 35);
			$b3_k12=$data->val($i, 36);
			$b5_k1a=$data->val($i, 37);
			$b5_k1b=$data->val($i, 38);
			$b5_k1c=$data->val($i, 39);
			$b5_k1d=$data->val($i, 40);
			$b5_k1e=$data->val($i, 41);
			$b5_k1f=$data->val($i, 42);
			$b5_k1g=$data->val($i, 43);
			$b5_k1h=$data->val($i, 44);
			$b5_k1i=$data->val($i, 45);
			$b5_k1j=$data->val($i, 46);
			$b5_k1k=$data->val($i, 47);
			$b5_k1l=$data->val($i, 48);
			$b5_k1m=$data->val($i, 49);
			$b5_k1n=$data->val($i, 50);
			$b5_k1o=$data->val($i, 51);
			$b5_k3b=$data->val($i, 54);
			$b5_k4a=$data->val($i, 55);
			$b5_k4b=$data->val($i, 56);
			$b5_k4c=$data->val($i, 57);
			$b5_k4d=$data->val($i, 58);
			$b5_k4e=$data->val($i, 59);
			$b5_k5a=$data->val($i, 60);
			$b5_k6a=$data->val($i, 61);
			$b5_k6b=$data->val($i, 62);
			$b5_k6c=$data->val($i, 63);
			$b5_k6d=$data->val($i, 64);
			$b5_k6e=$data->val($i, 65);
			$b5_k6f=$data->val($i, 66);
			$b5_k6g=$data->val($i, 67);
			$b5_k6h=$data->val($i, 68);
			$b5_k6i=$data->val($i, 69);
			$b5_k9=$data->val($i, 70);
			$percentile=$data->val($i, 71);

			if($ruta_6!= "" && $id_ruta!= "" && $b1_k1b!= "" && $b1_k2b!= "" && $b1_k3b!= "" && $b1_k4a!= "" && $b1_k6!= "" && $b1_k8!= "" && $b1_k9!= "" && $b1_k10!= "" && $b3_k1a!= "" && $b3_k2!= "" && $b3_k3!= "" && $b3_k4a!= "" && $b3_k4b!= "" && $b3_k5a!= "" && $b3_k5b!= "" && $b3_k6!= "" && $b3_k7!= "" && $b3_k8!= "" && $b3_k9a!= "" && $b3_k9b!= "" && $b3_k10!= "" && $b3_k11a!= "" && $b3_k11b!= "" && $b3_k12!= "" && $b5_k1a!= "" && $b5_k1b!= "" && $b5_k1c!= "" && $b5_k1d!= "" && $b5_k1e!= "" && $b5_k1f!= "" && $b5_k1g!= "" && $b5_k1h!= "" && $b5_k1i!= "" && $b5_k1j!= "" && $b5_k1k!= "" && $b5_k1l!= "" && $b5_k1m!= "" && $b5_k1n!= "" && $b5_k1o!= "" && $b5_k3b!= "" && $b5_k4a!= "" && $b5_k4b!= "" && $b5_k4c!= "" && $b5_k4d!= "" && $b5_k4e!= "" && $b5_k5a!= "" && $b5_k6a!= "" && $b5_k6b!= "" && $b5_k6c!= "" && $b5_k6d!= "" && $b5_k6e!= "" && $b5_k6f!= "" && $b5_k6g!= "" && $b5_k6h!= "" && $b5_k6i!= "" && $b5_k9!= "" && $percentile!= ""){
				mysqli_query($kon2,"INSERT INTO bdt_ruta (ruta_6, id_ruta, b1_k1b, b1_k2b, b1_k3b, b1_k4a, b1_k6, b1_k8, b1_k9, b1_k10, b3_k1a, b3_k2, b3_k3, b3_k4a, b3_k4b, b3_k5a, b3_k5b, b3_k6, b3_k7, b3_k8, b3_k9a, b3_k9b, b3_k10, b3_k11a, b3_k11b, b3_k12, b5_k1a, b5_k1b, b5_k1c, b5_k1d, b5_k1e, b5_k1f, b5_k1g, b5_k1h, b5_k1i, b5_k1j, b5_k1k, b5_k1l, b5_k1m, b5_k1n, b5_k1o, b5_k3b, b5_k4a, b5_k4b, b5_k4c, b5_k4d, b5_k4e, b5_k5a, b5_k6a, b5_k6b, b5_k6c, b5_k6d, b5_k6e, b5_k6f, b5_k6g, b5_k6h, b5_k6i, b5_k9, percentile) VALUES ('$ruta_6', '$id_ruta', '$b1_k1b', '$b1_k2b', '$b1_k3b', '$b1_k4a', '$b1_k6', '$b1_k8', '$b1_k9', '$b1_k10', '$b3_k1a', '$b3_k2', '$b3_k3', '$b3_k4a', '$b3_k4b', '$b3_k5a', '$b3_k5b', '$b3_k6', '$b3_k7', '$b3_k8', '$b3_k9a', '$b3_k9b', '$b3_k10', '$b3_k11a', '$b3_k11b', '$b3_k12', '$b5_k1a', '$b5_k1b', '$b5_k1c', '$b5_k1d', '$b5_k1e', '$b5_k1f', '$b5_k1g', '$b5_k1h', '$b5_k1i', '$b5_k1j', '$b5_k1k', '$b5_k1l', '$b5_k1m', '$b5_k1n', '$b5_k1o', '$b5_k3b', '$b5_k4a', '$b5_k4b', '$b5_k4c', '$b5_k4d', '$b5_k4e', '$b5_k5a', '$b5_k6a', '$b5_k6b', '$b5_k6c', '$b5_k6d', '$b5_k6e', '$b5_k6f', '$b5_k6g', '$b5_k6h', '$b5_k6i', '$b5_k9', '$percentile')");
				$berhasil++;
			}
		}

		unlink($_FILES['file']['name']);
		if ($berhasil>0) {
		    echo "<script>alert('Berhasil Import')</script>";
		    echo "<meta http-equiv='refresh' content='1 url=ruta.php'>";
		} else {
		    echo "<script>alert('Gagal Import')</script>";			
		    echo "<meta http-equiv='refresh' content='1 url=ruta.php'>";
		}

	} else {

		mysqli_query($kon2,"Delete from bdt_art");

		$target = basename($_FILES['file']['name']) ;
		move_uploaded_file($_FILES['file']['tmp_name'], $target);
		chmod($_FILES['file']['name'],0777);
		$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'],false);
		$jumlah_baris = $data->rowcount($sheet_index=0);
		$berhasil = 0;
		for ($i=3; $i<=$jumlah_baris; $i++){

			$ruta_6=$data->val($i, 2);
			$id_ruta=$data->val($i, 1);
			$b1_k1b=$data->val($i, 4);
			$b1_k2b=$data->val($i, 5);
			$b1_k3b=$data->val($i, 7);
			$b1_k4a=$data->val($i, 6);
			$b1_k6=$data->val($i, 8);
			$b1_k8=$data->val($i, 14);
			$b1_k9=$data->val($i, 15);
			$b1_k10=$data->val($i, 16);
			$b3_k1a=$data->val($i, 17);
			$b3_k2=$data->val($i, 19);
			$b3_k3=$data->val($i, 20);
			$b3_k4a=$data->val($i, 21);
			$b3_k4b=$data->val($i, 22);
			$b3_k5a=$data->val($i, 23);
			$b3_k5b=$data->val($i, 24);
			$b3_k6=$data->val($i, 25);
			$b3_k7=$data->val($i, 26);
			$b3_k8=$data->val($i, 28);
			$b3_k9a=$data->val($i, 29);
			$b3_k9b=$data->val($i, 30);
			$b3_k10=$data->val($i, 32);
			$b3_k11a=$data->val($i, 34);
			$b3_k11b=$data->val($i, 35);
			$b3_k12=$data->val($i, 36);
			$b5_k1a=$data->val($i, 37);
			$b5_k1b=$data->val($i, 38);
			$b5_k1c=$data->val($i, 39);
			$b5_k1d=$data->val($i, 40);
			$b5_k1e=$data->val($i, 41);
			$b5_k1f=$data->val($i, 42);
			$b5_k1g=$data->val($i, 43);
			$b5_k1h=$data->val($i, 44);
			$b5_k1i=$data->val($i, 45);
			$b5_k1j=$data->val($i, 46);
			$b5_k1k=$data->val($i, 47);
			$b5_k1l=$data->val($i, 48);
			$b5_k1m=$data->val($i, 49);
			$b5_k1n=$data->val($i, 50);
			$b5_k1o=$data->val($i, 51);
			$b5_k3b=$data->val($i, 54);
			$b5_k4a=$data->val($i, 55);
			$b5_k4b=$data->val($i, 56);
			$b5_k4c=$data->val($i, 57);
			$b5_k4d=$data->val($i, 58);
			$b5_k4e=$data->val($i, 59);
			$b5_k5a=$data->val($i, 60);
			$b5_k6a=$data->val($i, 61);
			$b5_k6b=$data->val($i, 62);
			$b5_k6c=$data->val($i, 63);
			$b5_k6d=$data->val($i, 64);
			$b5_k6e=$data->val($i, 65);
			$b5_k6f=$data->val($i, 66);
			$b5_k6g=$data->val($i, 67);
			$b5_k6h=$data->val($i, 68);
			$b5_k6i=$data->val($i, 69);
			$b5_k9=$data->val($i, 70);
			$percentile=$data->val($i, 71);

			if($ruta_6!= "" && $id_ruta!= "" && $b1_k1b!= "" && $b1_k2b!= "" && $b1_k3b!= "" && $b1_k4a!= "" && $b1_k6!= "" && $b1_k8!= "" && $b1_k9!= "" && $b1_k10!= "" && $b3_k1a!= "" && $b3_k2!= "" && $b3_k3!= "" && $b3_k4a!= "" && $b3_k4b!= "" && $b3_k5a!= "" && $b3_k5b!= "" && $b3_k6!= "" && $b3_k7!= "" && $b3_k8!= "" && $b3_k9a!= "" && $b3_k9b!= "" && $b3_k10!= "" && $b3_k11a!= "" && $b3_k11b!= "" && $b3_k12!= "" && $b5_k1a!= "" && $b5_k1b!= "" && $b5_k1c!= "" && $b5_k1d!= "" && $b5_k1e!= "" && $b5_k1f!= "" && $b5_k1g!= "" && $b5_k1h!= "" && $b5_k1i!= "" && $b5_k1j!= "" && $b5_k1k!= "" && $b5_k1l!= "" && $b5_k1m!= "" && $b5_k1n!= "" && $b5_k1o!= "" && $b5_k3b!= "" && $b5_k4a!= "" && $b5_k4b!= "" && $b5_k4c!= "" && $b5_k4d!= "" && $b5_k4e!= "" && $b5_k5a!= "" && $b5_k6a!= "" && $b5_k6b!= "" && $b5_k6c!= "" && $b5_k6d!= "" && $b5_k6e!= "" && $b5_k6f!= "" && $b5_k6g!= "" && $b5_k6h!= "" && $b5_k6i!= "" && $b5_k9!= "" && $percentile!= ""){
				mysqli_query($kon2,"INSERT INTO bdt_ruta (ruta_6, id_ruta, b1_k1b, b1_k2b, b1_k3b, b1_k4a, b1_k6, b1_k8, b1_k9, b1_k10, b3_k1a, b3_k2, b3_k3, b3_k4a, b3_k4b, b3_k5a, b3_k5b, b3_k6, b3_k7, b3_k8, b3_k9a, b3_k9b, b3_k10, b3_k11a, b3_k11b, b3_k12, b5_k1a, b5_k1b, b5_k1c, b5_k1d, b5_k1e, b5_k1f, b5_k1g, b5_k1h, b5_k1i, b5_k1j, b5_k1k, b5_k1l, b5_k1m, b5_k1n, b5_k1o, b5_k3b, b5_k4a, b5_k4b, b5_k4c, b5_k4d, b5_k4e, b5_k5a, b5_k6a, b5_k6b, b5_k6c, b5_k6d, b5_k6e, b5_k6f, b5_k6g, b5_k6h, b5_k6i, b5_k9, percentile) VALUES ('$ruta_6', '$id_ruta', '$b1_k1b', '$b1_k2b', '$b1_k3b', '$b1_k4a', '$b1_k6', '$b1_k8', '$b1_k9', '$b1_k10', '$b3_k1a', '$b3_k2', '$b3_k3', '$b3_k4a', '$b3_k4b', '$b3_k5a', '$b3_k5b', '$b3_k6', '$b3_k7', '$b3_k8', '$b3_k9a', '$b3_k9b', '$b3_k10', '$b3_k11a', '$b3_k11b', '$b3_k12', '$b5_k1a', '$b5_k1b', '$b5_k1c', '$b5_k1d', '$b5_k1e', '$b5_k1f', '$b5_k1g', '$b5_k1h', '$b5_k1i', '$b5_k1j', '$b5_k1k', '$b5_k1l', '$b5_k1m', '$b5_k1n', '$b5_k1o', '$b5_k3b', '$b5_k4a', '$b5_k4b', '$b5_k4c', '$b5_k4d', '$b5_k4e', '$b5_k5a', '$b5_k6a', '$b5_k6b', '$b5_k6c', '$b5_k6d', '$b5_k6e', '$b5_k6f', '$b5_k6g', '$b5_k6h', '$b5_k6i', '$b5_k9', '$percentile')");
				$berhasil++;
			}
		}

		unlink($_FILES['file']['name']);
		if ($berhasil>0) {
		    echo "<script>alert('Berhasil Import')</script>";
		    echo "<meta http-equiv='refresh' content='1 url=ruta.php'>";
		} else {
		    echo "<script>alert('Gagal Import')</script>";			
		    echo "<meta http-equiv='refresh' content='1 url=ruta.php'>";
		}
	}
?>