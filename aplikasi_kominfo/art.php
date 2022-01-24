<!doctype html>
<html lang="en">
<?php
include "head.php";
?>

<body>
    <?php
    include "header.php";
    include "koneksi.php";
    ?>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><span>Data Anggota Rumah Tangga (ART)</span></h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 info-panel" style="margin-top: 20px">
                        <div class="container">
                            <div class="row">
                                <form method="post" action="proses_upload_art.php" enctype="multipart/form-data">
                                    <div class="col-12">
                                        <fieldset id="pilihan">
                                            <input type="radio" value="tambah" id="tambah" name="pilihan" required="required">
                                            <label for="tambah">Import Data (Tambah)</label>
                                            <input type="radio" value="import" id="import" name="pilihan" required="required">
                                            <label for="import">Hapus dan Import Data</label>
                                        </fieldset>
                                    </div>
                                    <div class="col-12">
                                        <input name="file" type="file" required="required">
                                        <button name="upload" type="submit" value="Import" class="btn btn-success btn-sm">
                                            <span class="glyphicon glyphicon-eye-open"></span>Import
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
    <div class="container">
        <!-- info panel -->
        <div class="row justify-content-center">
            <div class="col-10 info-panel">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>RUTA6</th>
                                <th>NoPesertaPBDT</th>
                                <th>KDPROP</th>
                                <th>KDKAB</th>
                                <th>KDKEC</th>
                                <th>KDDESA</th>
                                <th>Nama</th>
                                <th>JnsKel</th>
                                <th>Hub_KRT</th>
                                <th>NUK</th>
                                <th>Hubkel</th>
                                <th>Umur</th>
                                <th>Sta_kawin</th>
                                <th>Ada_akta_nikah</th>
                                <th>Ada_diKK</th>
                                <th>Ada_kartu_identitas</th>
                                <th>Ada_kks</th>
                                <th>Sta_hamil</th>
                                <th>Jenis_cacat</th>
                                <th>Penyakit_kronis</th>
                                <th>Partisipasi_sekolah</th>
                                <th>Pendidikan_tertinggi</th>
                                <th>Kelas_tertinggi</th>
                                <th>Ijazah_tertinggi</th>
                                <th>Sta_Bekerja</th>
                                <th>Jumlah_jamkerja</th>
                                <th>Lapangan_Usaha</th>
                                <th>Status_pekerjaan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($kon2, "select * from bdt_art");
                            //menggunakan perulangan
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $d['b4_k2b']; ?></td>
                                    <td><?= $d['ruta_6']; ?></td>
                                    <td><?= $d['id_ruta']; ?></td>
                                    <td><?= $d['b1_k1b']; ?></td>
                                    <td><?= $d['b1_k2b']; ?></td>
                                    <td><?= $d['b1_k3b']; ?></td>
                                    <td><?= $d['b1_k4a']; ?></td>
                                    <td><?= $d['b1_k8']; ?></td>
                                    <td><?= $d['b1_k10']; ?></td>
                                    <td><?= $d['b4_k3']; ?></td>
                                    <td><?= $d['b4_k4']; ?></td>
                                    <td><?= $d['b4_k5']; ?></td>
                                    <td><?= $d['b4_k7']; ?></td>
                                    <td><?= $d['b4_k8']; ?></td>
                                    <td><?= $d['b4_k9']; ?></td>
                                    <td><?= $d['b4_k10']; ?></td>
                                    <td><?= $d['b4_k11']; ?></td>
                                    <td><?= $d['b4_k12']; ?></td>
                                    <td><?= $d['b4_k13']; ?></td>
                                    <td><?= $d['b4_k14']; ?></td>
                                    <td><?= $d['b4_k16']; ?></td>
                                    <td><?= $d['b4_k15']; ?></td>
                                    <td><?= $d['b4_k18']; ?></td>
                                    <td><?= $d['b4_k17']; ?></td>
                                    <td><?= $d['b4_k20']; ?></td>
                                    <td><?= $d['b4_k19a']; ?></td>
                                    <td><?= $d['b4_k19b']; ?></td>
                                    <td><?= $d['b4_k21']; ?></td>
                                    <td><?= $d['b4_k6']; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'jsscript.php';
    ?>
</body>

</html>