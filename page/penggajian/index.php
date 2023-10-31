<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>
<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php';
?>
   
<!-- End Navbar -->

<body>
    <h1 style="margin-top: 20px; bottom-top: 20px; text-align: center;">Penggajian</h1>
    

    <!--card-->
    <section class="container">
        <div class="card">
          <div class="card-header">
            <a href="tambah.php" class="btn bg-primary" style="margin-left: 10px; color:white;">Tambah</a>
          </div>
        <div class="card-body">
        <table class="table" id="example" class="table table-stripped" style="width: 100%;">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">KARYAWAN NIK</th>
      <th scope="col">TAHUN</th>
      <th scope="col">BULAN</th>
      <th scope="col">GAJI BAYAR</th>
      <th scope="col">OPSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $NO = 1;
    $penggajian = $koneksi->query("SELECT * FROM penggajian ORDER BY ID DESC");
    while ($data = $penggajian->fetch_array()){
    ?>
    <tr>
        <td><?= $data['ID']?></td>
        <td><?= $data['KARYAWAN_NIK']?></td>
        <td><?= $data['TAHUN']?></td>
        <td><?= $data['BULAN']?></td>
        <td><?= $data['GAJI_BAYAR']?></td>
        <td>
           <a href="edit?id=<?= $data['ID'] ?>" class="btn bg-success" style="color:white;">Edit</a>
           <a href="proses?id=<?= $data['ID'] ?>" class="btn bg-danger" style="color:white;">Hapus</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
</table>
        </div>
    </section>
    <!--footer-->
    <?php
include '../../templates/footer.php';
?>
        
    <!--end footer-->
    <!--End card-->
    <?php
include '../../templates/script.php';
?>
</body>


</html>

<script>
  new DataTable('#example');
</script>