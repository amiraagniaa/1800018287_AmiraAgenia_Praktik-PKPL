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
			$ruta_6=$data->val($i, 4);
			$id_ruta=$data->val($i, 5);
			$b1_k1b=$data->val($i, 6);
			$b1_k2b=$data->val($i, 7);
			$b1_k3b=$data->val($i, 8);
			$b1_k4a=$data->val($i, 9);
			$b1_k8=$data->val($i, 15);
			$b1_k10=$data->val($i, 16);
			$b4_k2b=$data->val($i, 1);
			$b4_k3=$data->val($i, 21);
			$b4_k4=$data->val($i, 22);
			$b4_k5=$data->val($i, 23);
			$b4_k6=$data->val($i, 40);
			$b4_k7=$data->val($i, 24);
			$b4_k8=$data->val($i, 25);
			$b4_k9=$data->val($i, 26);
			$b4_k10=$data->val($i, 27);
			$b4_k11=$data->val($i, 28);
			$b4_k12=$data->val($i, 29);
			$b4_k13=$data->val($i, 30);
			$b4_k14=$data->val($i, 31);
			$b4_k15=$data->val($i, 33);
			$b4_k16=$data->val($i, 32);
			$b4_k17=$data->val($i, 35);
			$b4_k18=$data->val($i, 34);
			$b4_k19a=$data->val($i, 37);
			$b4_k19b=$data->val($i, 38);
			$b4_k20=$data->val($i, 36);
			$b4_k21=$data->val($i, 39);

			if($ruta_6!= "" &&  $id_ruta!= "" &&  $b1_k1b!= "" &&  $b1_k2b!= "" &&  $b1_k3b!= "" &&  $b1_k4a!= "" &&  $b1_k8!= "" &&  $b1_k10!= "" &&  $b4_k2b!= "" &&  $b4_k3!= "" &&  $b4_k4!= "" &&  $b4_k5!= "" &&  $b4_k6!= "" &&  $b4_k7!= "" &&  $b4_k8!= "" &&  $b4_k9!= "" &&  $b4_k10!= "" &&  $b4_k11!= "" &&  $b4_k12!= "" &&  $b4_k13!= "" &&  $b4_k14!= "" && $b4_k15!= "" && $b4_k16!= "" && $b4_k17!= "" && $b4_k18!= "" && $b4_k19a!= "" && $b4_k19b!= "" && $b4_k20!= "" && $b4_k21!= ""){
				mysqli_query($kon2,"INSERT INTO bdt_art (ruta_6, id_ruta, b1_k1b, b1_k2b, b1_k3b, b1_k4a, b1_k8, b1_k10, b4_k2b, b4_k3, b4_k4, b4_k5, b4_k6, b4_k7, b4_k8, b4_k9, b4_k10, b4_k11, b4_k12, b4_k13, b4_k14, b4_k15, b4_k16, b4_k17, b4_k18, b4_k19a, b4_k19b, b4_k20, b4_k21) VALUES ('$ruta_6', '$id_ruta', '$b1_k1b', '$b1_k2b', '$b1_k3b', '$b1_k4a', '$b1_k8', '$b1_k10', '$b4_k2b', '$b4_k3', '$b4_k4', '$b4_k5', '$b4_k6', '$b4_k7', '$b4_k8', '$b4_k9', '$b4_k10', '$b4_k11', '$b4_k12', '$b4_k13', '$b4_k14', '$b4_k15', '$b4_k16', '$b4_k17', '$b4_k18', '$b4_k19a', '$b4_k19b', '$b4_k20', '$b4_k21')");
				$berhasil++;
			}
		}

		unlink($_FILES['file']['name']);
		if ($berhasil>0) {
		    echo "<script>alert('Berhasil Import')</script>";
		    echo "<meta http-equiv='refresh' content='1 url=art.php'>";
		} else {
		    echo "<script>alert('Gagal Import')</script>";			
		    echo "<meta http-equiv='refresh' content='1 url=art.php'>";
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
			$ruta_6=$data->val($i, 4);
			$id_ruta=$data->val($i, 5);
			$b1_k1b=$data->val($i, 6);
			$b1_k2b=$data->val($i, 7);
			$b1_k3b=$data->val($i, 8);
			$b1_k4a=$data->val($i, 9);
			$b1_k8=$data->val($i, 15);
			$b1_k10=$data->val($i, 16);
			$b4_k2b=$data->val($i, 1);
			$b4_k3=$data->val($i, 21);
			$b4_k4=$data->val($i, 22);
			$b4_k5=$data->val($i, 23);
			$b4_k6=$data->val($i, 40);
			$b4_k7=$data->val($i, 24);
			$b4_k8=$data->val($i, 25);
			$b4_k9=$data->val($i, 26);
			$b4_k10=$data->val($i, 27);
			$b4_k11=$data->val($i, 28);
			$b4_k12=$data->val($i, 29);
			$b4_k13=$data->val($i, 30);
			$b4_k14=$data->val($i, 31);
			$b4_k15=$data->val($i, 33);
			$b4_k16=$data->val($i, 32);
			$b4_k17=$data->val($i, 35);
			$b4_k18=$data->val($i, 34);
			$b4_k19a=$data->val($i, 37);
			$b4_k19b=$data->val($i, 38);
			$b4_k20=$data->val($i, 36);
			$b4_k21=$data->val($i, 39);

			if($ruta_6!= "" &&  $id_ruta!= "" &&  $b1_k1b!= "" &&  $b1_k2b!= "" &&  $b1_k3b!= "" &&  $b1_k4a!= "" &&  $b1_k8!= "" &&  $b1_k10!= "" &&  $b4_k2b!= "" &&  $b4_k3!= "" &&  $b4_k4!= "" &&  $b4_k5!= "" &&  $b4_k6!= "" &&  $b4_k7!= "" &&  $b4_k8!= "" &&  $b4_k9!= "" &&  $b4_k10!= "" &&  $b4_k11!= "" &&  $b4_k12!= "" &&  $b4_k13!= "" &&  $b4_k14!= "" && $b4_k15!= "" && $b4_k16!= "" && $b4_k17!= "" && $b4_k18!= "" && $b4_k19a!= "" && $b4_k19b!= "" && $b4_k20!= "" && $b4_k21!= ""){
				mysqli_query($kon2,"INSERT INTO bdt_art (ruta_6, id_ruta, b1_k1b, b1_k2b, b1_k3b, b1_k4a, b1_k8, b1_k10, b4_k2b, b4_k3, b4_k4, b4_k5, b4_k6, b4_k7, b4_k8, b4_k9, b4_k10, b4_k11, b4_k12, b4_k13, b4_k14, b4_k15, b4_k16, b4_k17, b4_k18, b4_k19a, b4_k19b, b4_k20, b4_k21) VALUES ('$ruta_6', '$id_ruta', '$b1_k1b', '$b1_k2b', '$b1_k3b', '$b1_k4a', '$b1_k8', '$b1_k10', '$b4_k2b', '$b4_k3', '$b4_k4', '$b4_k5', '$b4_k6', '$b4_k7', '$b4_k8', '$b4_k9', '$b4_k10', '$b4_k11', '$b4_k12', '$b4_k13', '$b4_k14', '$b4_k15', '$b4_k16', '$b4_k17', '$b4_k18', '$b4_k19a', '$b4_k19b', '$b4_k20', '$b4_k21')");
				$berhasil++;
			}
		}

		unlink($_FILES['file']['name']);

		if ($berhasil>0) {
		    echo "<script>alert('Berhasil Import')</script>";
		    echo "<meta http-equiv='refresh' content='1 url=art.php'>";
		} else {
		    echo "<script>alert('Gagal Import')</script>";			
		    echo "<meta http-equiv='refresh' content='1 url=art.php'>";
		}
	}
?>