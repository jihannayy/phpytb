<div style="margin:auto; width:900px;">

<h1><a herf ="http://localhost/phpytb/restoran/kategori/insert.php">TAMBAH DATA</a></h1>

<?php

require_once "../function.php";

$sql = "SELECT idkategori FROM tblkategori";
$result = mysqli_query($koneksi, $sql);

$jumlahdata = mysqli_num_rowrs($result);





$banyak =3;
$halaman= ceil($jumlahsdata / $banyak);

for ($i=1; $i <= $halaman ; $i++){
    echo '<a herf="?p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp &nbsp';
}

?> 