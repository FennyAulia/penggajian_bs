s<?php
require '../../config/config.php';
require '../../config/koneksi.php'; 

if(isset ($_POST['simpan'])) {
    $NIK = $_POST['NIK'];
    $NAMA = $_POST['NAMA'];
    $TANGGAL_MULAI = $_POST['TANGGAL_MULAI'];
    $GAJI_POKOK = $_POST['GAJI_POKOK'];
    $STATUS_KARYAWAN = $_POST['STATUS_KARYAWAN'];
    $BAGIAN_ID = $_POST['BAGIAN_ID'];

    $submit = $koneksi->query("INSERT INTO karyawan VALUES(
        '$NIK',
        '$NAMA',
        '$TANGGAL_MULAI',
        '$GAJI_POKOK',
        '$STATUS_KARYAWAN',
        '$BAGIAN_ID'
        )");

        if($submit){
            echo '<script>alert("Data Berhasil Disimpan");</script>';
            echo '<script>window.location.href = "../karyawan"</script>';
        }else{
            echo '<script>alert("Data Gagal Disimpan");</script>';
            echo '<script>window.location.href = "../karyawan"</script>';
        }
}else if(isset ($_POST['edit'])) {
    $NIK = $_POST['NIK'];
    $NAMA = $_POST['NAMA'];
    $TANGGAL_MULAI = $_POST['TANGGAL_MULAI'];
    $GAJI_POKOK = $_POST['GAJI_POKOK'];
    $STATUS_KARYAWAN = $_POST['STATUS_KARYAWAN'];
    $BAGIAN_ID = $_POST['BAGIAN_ID'];

    $submit = $koneksi->query("UPDATE karyawan SET
        NIK ='$NIK',
        NAMA ='$NAMA',
        TANGGAL_MULAI ='$TANGGAL_MULAI',
        GAJI_POKOK ='$GAJI_POKOK',
        STATUS_KARYAWAN ='$STATUS_KARYAWAN',
        BAGIAN_ID ='$BAGIAN_ID'
        WHERE
        NIK = '$NIK'
     ");

        if($submit){
            echo '<script>alert("Data Berhasil Diubah");</script>';
            echo '<script>window.location.href = "../karyawan"</script>';
        }else{
            echo '<script>alert("Data Gagal Diubah");</script>';
            echo '<script>window.location.href = "../karyawan"</script>';
        }
}else if(isset ($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM karyawan WHERE NIK = '$_GET[id]'");
    if($delete){
        echo '<script>alert("Data Berhasil Dihapus");</script>';
        echo '<script>window.location.href = "../karyawan"</script>';
    }else{
        echo '<script>alert("Data Gagal Dihapus");</script>';
        echo '<script>window.location.href = "../karyawan"</script>';
    }

}
