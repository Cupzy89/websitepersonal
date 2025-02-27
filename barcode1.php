<?php
$koneksi = mysqli_connect("localhost","root","","db_inventory") or die();
$subtance = addslashes(trim($_POST['input_scanner']));
$id_roll = addslashes(trim($_POST['nama_barang']));
$mill_roll_stand = addslashes(trim($_POST['harga']));
$quantity = addslashes(trim($_POST['quantity']));
$input = mysqli_query($koneksi,"insert into tbl_barang(kode_barcode,nama_barang,harga,quantity) values('$kode_barcode','$nama_barang','$harga','$quantity')");
if($input){
   echo "Data berhasil disimpan";
   echo"165.225.112.38:443".$ip;?>
}else{
   echo "Data gagal disimpan";
}
?>