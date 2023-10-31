s<?php
require '../../config/config.php';
require '../../config/koneksi.php'; 

if(isset ($_POST['simpan'])) {
    $ID = $_POST['ID'];
    $NAMA= $_POST['NAMA'];


    $submit = $koneksi->query("INSERT INTO bagian VALUES(
        '$ID',
        '$NAMA'
        )");

        if($submit){
            echo '<script>alert("Data Berhasil Disimpan");</script>';
            echo '<script>window.location.href = "../bagian"</script>';
        }else{
            echo '<script>alert("Data Gagal Disimpan");</script>';
            echo '<script>window.location.href = "../bagian"</script>';
        }
}else if(isset ($_POST['edit'])) {
    $ID = $_POST['ID'];
    $NAMA_BAGIAN = $_POST['NAMA'];

    $submit = $koneksi->query("UPDATE bagian SET
        ID ='$ID',
        NAMA='$NAMA'
        WHERE
        ID ='$ID'
     ");

        if($submit){
            echo '<script>alert("Data Berhasil Diubah");</script>';
            echo '<script>window.location.href = "../bagian"</script>';
        }else{
            echo '<script>alert("Data Gagal Diubah");</script>';
            echo '<script>window.location.href = "../bagian"</script>';
        }
}else if(isset ($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM bagian WHERE ID = '$_GET[id]'");
    if($delete){
        echo '<script>alert("Data Berhasil Dihapus");</script>';
        echo '<script>window.location.href = "../bagian"</script>';
    }else{
        echo '<script>alert("Data Gagal Dihapus");</script>';
        echo '<script>window.location.href = "../bagian"</script>';
    }

}
