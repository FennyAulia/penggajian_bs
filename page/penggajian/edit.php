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
<?php
  $ID =$_GET['id'];
  $data = $koneksi->query("SELECT * FROM penggajian WHERE ID = '$ID'")->fetch_array();
?>

<body>
    <h2 style="margin-top:20px; margin-bottom:20px; text-align: center;">Edit Data Karyawan</h2>


    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
        <div class="card">
       <div class="card-body" style="background-color: plum;">
            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">ID</label>
                    <div class="col-7">
                        <input name="ID" class="form-control" type="text" placeholder="Isikan ID" value="<?= $data['ID'] ?>"readonly>
                    </div>
                </div>
            </div>

            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">Karyawan NIK</label>
                    <div class="col-7">
                        <input name="KARYAWAN_NIK" class="form-control" type="text" placeholder="Isikan Karyawan NIK">
                    </div>
                 </div>
             </div>

            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">Tahun</label>
                    <div class="col-7">
                        <input name="TAHUN" class="form-control" type="number" placeholder="Isi Tahun">
                    </div>
                </div>
             </div>
        <!---end input-->
            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">Bulan</label>
                    <div class="col-7">
                        <input name="BULAN" class="form-control" type="number" placeholder="Isi Bulan.">
                    </div>
                </div>
            </div>
            <div class="form group row">
                <div class="row mb-3">
                    <label class="col-2" style="color: black;">Gaji Bayar</label>
                    <div class="col-7">
                        <input name="BULAN" class="form-control" type="number" placeholder="Isi Gaji Bayar">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="edit" class="btn btn-success">edit</button>
        </div>
</from>
    </section>

</body>
</html>

<script>
    new DataTable('#example');
    </script>