<?php
//membuat query untuk hapus data
$id = $_GET ['id'];
$sql="DELETE FROM putpen WHERE id_putpen ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error"); 
if($query){
    echo"<script> window.location.assign('?page=putpen&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=putpen&actions=tampil');</scripr>";
}
?>
