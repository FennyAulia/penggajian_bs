<?php
require '../../config/config.php';
require '../../config/koneksi.php'; 

if(isset ($_POST['simpan'])) {
    $ID = $_POST['ID'];
    $KARYAWAN_NIK = $_POST['KARYAWAN_NIK'];
    $TAHUN = $_POST['TAHUN'];
    $BULAN = $_POST['BULAN'];
    $GAJI_BAYAR = $_POST['GAJI_BAYAR'];
   

    $submit = $koneksi->query("INSERT INTO penggajian VALUES(
        '$ID',
        '$KARYAWAN_NIK',
        '$TAHUN',
        '$BULAN',
        '$GAJI_BAYAR'
        )");

        if($submit){
            echo '<script>alert("Data Berhasil Disimpan");</script>';
            echo '<script>window.location.href = "../penggajian"</script>';
        }else{
            echo '<script>alert("Data Gagal Disimpan");</script>';
            echo '<script>window.location.href = "../penggajian"</script>';
        }
}else if(isset ($_POST['edit'])) {
    $ID = $_POST['ID'];
    $KARYAWAN_NIK = $_POST['KARYAWAN_NIK'];
    $TAHUN = $_POST['TAHUN'];
    $BULAN = $_POST['BULAN'];
    $GAJI_BAYAR = $_POST['GAJI_BAYAR'];

    $submit = $koneksi->query("UPDATE penggajian SET
        ID ='$ID',
        KARYAWAN_NIK ='$KARYAWAN_NIK',
        TAHUN ='$TAHUN',
        BULAN ='$BULAN',
        GAJI_BAYAR ='$GAJI_BAYAR'
        WHERE
        ID ='$ID'
     ");

        if($submit){
            echo '<script>alert("Data Berhasil Diubah");</script>';
            echo '<script>window.location.href = "../penggajian"</script>';
        }else{
            echo '<script>alert("Data Gagal Diubah");</script>';
            echo '<script>window.location.href = "../penggajian"</script>';
        }
}else if(isset ($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM penggajian WHERE ID = '$_GET[id]'");
    if($delete){
        echo '<script>alert("Data Berhasil Dihapus");</script>';
        echo '<script>window.location.href = "../penggajian"</script>';
    }else{
        echo '<script>alert("Data Gagal Dihapus");</script>';
        echo '<script>window.location.href = "../penggajian"</script>';
    }

}
