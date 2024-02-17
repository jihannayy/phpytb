<?php

require_once "../function.php";
$sql = "SELECT * FROM tblkategori";
$result = mysqli_query($koneksi, $sql);

// var_dump($result);

$jumlah = mysqli_num_rows($result);
// echo '<br>';
// echo $jumlah;

echo'

<table border="ipx">
<tr>
    <th>No</th>
    <th>Kategori</th>
</tr>

';
$no=1;

if ($jumlah > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['idkategori'].'</td>';
        echo '<td>'.$row['kategori'].'</td>';
        echo '</tr>';

    }
}
echo '</table>';
?>


<tr>
    <td>1</td>
    <td>Kategori</td>
</tr>
<tr>
    <td>2</td>
    <td>Kategori</td>
</tr>
<tr>
    <td>3</td>
    <td>Kategori</td>
</tr>


</table>