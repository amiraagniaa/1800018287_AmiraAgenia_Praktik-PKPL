<!doctype html>
<html lang="en">
    <?php
        include "head.php";
    ?>
    <body>
        <?php
            include "koneksi.php";
            include 'header.php';
        ?>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4"><span>Data Anggota Rumah Tangga (RUTA)</span></h1>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6 info-panel" style="margin-top: 20px">
                            <div class="container">
                                <div class="row">
                                    <form method="post" action="proses_upload_ruta.php" enctype="multipart/form-data">
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 info-panel">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>IDBDT</th>
                                    <th>RUTA6</th>
                                    <th>NoPesertaPBDT</th>
                                    <th>KDPROP</th>
                                    <th>KDKAB</th>
                                    <th>KDKEC</th>
                                    <th>KDDESA</th>
                                    <th>Alamat</th>
                                    <th>NoPesertaPKH</th>
                                    <th>NoPesertaKKS2016</th>
                                    <th>NoPesertaPBI</th>
                                    <th>PesertaKIP</th>
                                    <th>Nama_SLS</th>
                                    <th>Nama_KRT</th>
                                    <th>Jumlah_ART</th>
                                    <th>Jumlah_Keluarga</th>
                                    <th>Sta_bangunan</th>
                                    <th>Sta_lahan</th>
                                    <th>Luas_lantai</th>
                                    <th>Lantai</th>
                                    <th>Dinding</th>
                                    <th>Kondisi_dinding</th>
                                    <th>Atap</th>
                                    <th>Kondisi_atap</th>
                                    <th>Jumlah_kamar</th>
                                    <th>Sumber_airminum</th>
                                    <th>Nomor_meter_air</th>
                                    <th>cara_proleh_airminum</th>
                                    <th>Sumber_penerangan</th>
                                    <th>Daya</th>
                                    <th>Nomor_PLN</th>
                                    <th>bb_masak</th>
                                    <th>Nomor_gas</th>
                                    <th>Fasbab</th>
                                    <th>Kloset</th>
                                    <th>Buang_tinja</th>
                                    <th>Ada_tabung_gas</th>
                                    <th>Ada_lemari_es</th>
                                    <th>Ada_ac</th>
                                    <th>Ada_pemanas</th>
                                    <th>Ada_telpon</th>
                                    <th>Ada_tv</th>
                                    <th>Ada_emas</th>
                                    <th>Ada_laptop</th>
                                    <th>Ada_sepeda</th>
                                    <th>Ada_motor</th>
                                    <th>Ada_mobil</th>
                                    <th>Ada_perahu</th>
                                    <th>Ada_motor_tempel</th>
                                    <th>Ada_perahu_motor</th>
                                    <th>Ada_kapal</th>
                                    <th>Aset_tak_bergerak</th>
                                    <th>Luas_atb</th>
                                    <th>Rumah_lain</th>
                                    <th>Jumlah_sapi</th>
                                    <th>Jumah_kerbau</th>
                                    <th>Jumlah_kuda</th>
                                    <th>Jumlah_babi</th>
                                    <th>Jumlah_kambing</th>
                                    <th>Sta_art_usaha</th>
                                    <th>Sta_kks</th>
                                    <th>Sta_kip</th>
                                    <th>Sta_kis</th>
                                    <th>Sta_bpjs_mandiri</th>
                                    <th>Sta_jamsostek</th>
                                    <th>Sta_asuransi</th>
                                    <th>Sta_pkh</th>
                                    <th>Sta_rastra</th>
                                    <th>Sta_kur</th>
                                    <th>Sta_keberadaan_RT</th>
                                    <th>Percentile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $data = mysqli_query($kon2, "select * from bdt_ruta");
                                while ($d = mysqli_fetch_array($data)) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $d['id_ruta']; ?></td>
                                        <td><?= $d['ruta_6']; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= $d['b1_k1b']; ?></td>
                                        <td><?= $d['b1_k2b']; ?></td>
                                        <td><?= $d['b1_k4a']; ?></td>
                                        <td><?= $d['b1_k3b']; ?></td>
                                        <td><?= $d['b1_k6']; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= $d['b1_k8']; ?></td>
                                        <td><?= $d['b1_k9']; ?></td>
                                        <td><?= $d['b1_k10']; ?></td>
                                        <td><?= $d['b3_k1a']; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= $d['b3_k2']; ?></td>
                                        <td><?= $d['b3_k3']; ?></td>
                                        <td><?= $d['b3_k4a']; ?></td>
                                        <td><?= $d['b3_k4b']; ?></td>
                                        <td><?= $d['b3_k5a']; ?></td>
                                        <td><?= $d['b3_k5b']; ?></td>
                                        <td><?= $d['b3_k6']; ?></td>
                                        <td><?= $d['b3_k7']; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= $d['b3_k8']; ?></td>
                                        <td><?= $d['b3_k9a']; ?></td>
                                        <td><?= $d['b3_k9b']; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= $d['b3_k10']; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= $d['b3_k11a']; ?></td>
                                        <td><?= $d['b3_k11b']; ?></td>
                                        <td><?= $d['b3_k12']; ?></td>
                                        <td><?= $d['b5_k1a']; ?></td>
                                        <td><?= $d['b5_k1b']; ?></td>
                                        <td><?= $d['b5_k1c']; ?></td>
                                        <td><?= $d['b5_k1d']; ?></td>
                                        <td><?= $d['b5_k1e']; ?></td>
                                        <td><?= $d['b5_k1f']; ?></td>
                                        <td><?= $d['b5_k1g']; ?></td>
                                        <td><?= $d['b5_k1h']; ?></td>
                                        <td><?= $d['b5_k1i']; ?></td>
                                        <td><?= $d['b5_k1j']; ?></td>
                                        <td><?= $d['b5_k1k']; ?></td>
                                        <td><?= $d['b5_k1l']; ?></td>
                                        <td><?= $d['b5_k1m']; ?></td>
                                        <td><?= $d['b5_k1n']; ?></td>
                                        <td><?= $d['b5_k1o']; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= NULL; ?></td>
                                        <td><?= $d['b5_k3b']; ?></td>
                                        <td><?= $d['b5_k4a']; ?></td>
                                        <td><?= $d['b5_k4b']; ?></td>
                                        <td><?= $d['b5_k4c']; ?></td>
                                        <td><?= $d['b5_k4d']; ?></td>
                                        <td><?= $d['b5_k4e']; ?></td>
                                        <td><?= $d['b5_k5a']; ?></td>
                                        <td><?= $d['b5_k6a']; ?></td>
                                        <td><?= $d['b5_k6b']; ?></td>
                                        <td><?= $d['b5_k6c']; ?></td>
                                        <td><?= $d['b5_k6d']; ?></td>
                                        <td><?= $d['b5_k6e']; ?></td>
                                        <td><?= $d['b5_k6f']; ?></td>
                                        <td><?= $d['b5_k6g']; ?></td>
                                        <td><?= $d['b5_k6h']; ?></td>
                                        <td><?= $d['b5_k6i']; ?></td>
                                        <td><?= $d['b4_k9']; ?></td>
                                        <td><?= $d['percentile']; ?></td>
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
            include "jsscript.php";
        ?>
    </body>
</html>