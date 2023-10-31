<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>
        
<?php
include '../../templates/navbar.php';
?>

<!-- End Navbar -->

<body>
    <h2 style="margin-top:20px; margin-bottom:20px; text-align: center;">Tambah Data Karyawan</h2>


    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
        <div class="card">
       <div class="card-body" style="background-color: plum;">
            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">NIK</label>
                    <div class="col-7">
                        <input name="NIK" class="form-control" type="text" placeholder="Isikan NIK.">
                    </div>
                </div>
            </div>

            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">Nama</label>
                    <div class="col-7">
                        <input name="NAMA" class="form-control" type="text" placeholder="Isikan Nama.">
                    </div>
                 </div>
             </div>

            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">Tanggal Mulai</label>
                    <div class="col-7">
                        <input name="TANGGAL_MULAI" class="form-control" type="date" placeholder="Isikan Tanggal Mulai.">
                    </div>
                </div>
             </div>
        <!---end input-->
            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">Gaji Pokok</label>
                    <div class="col-7">
                        <input name="GAJI_POKOK" class="form-control" type="number" placeholder="Isikan Gaji Pokok.">
                    </div>
                </div>
            </div>
        <!---end input-->
            <div class="form group row">
                <div class="row mb-3">
                <label class="col-2" style="color: black;">Status Karyawan</label>
                    <div class="col-7">
                        <select class="form-control" name="STATUS_KARYAWAN" id="">
                            <option value="">--PILIH--</option>
                            <option value="TETAP">TETAP</option>
                            <option value="KONTRAK">KONTRAK</option>
                            <option value="MAGANG">MAGANG</option>
                        </select>
                    </div>
                 </div>
            </div>
        <!---end input-->
            <!---end input-->
            <div class="form group row">
                <div class="row mb-3">
                <label class="col-2" style="color: black;">Bagian</label>
                    <div class="col-7">
                        <select class="form-control" name="BAGIAN_ID" id="">
                            <option value="">--PILIH--</option>
                            <?php 
                            $bagian = $koneksi->query("SELECT * FROM bagian");
                            foreach($bagian as $row){
                            ?>
                            <option value="<?= $row['ID'] ?>"><?= $row['NAMA'] ?></option>
                            <?php }?>
                        </select>
                    </div>
                 </div>
            </div>
        <!---end input-->

        </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="simpan" class="btn btn-success">simpan</button>
        </div>
</from>
    </section>

</body>
</html>

<script>
    new DataTable('#example');
    </script>