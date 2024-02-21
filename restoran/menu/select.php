<div class="float-left mr-4">
    <a class="btn btn-primary" href="?f=kategori&m=insert" role="button">TAMBAH DATA</a>
</div>


<h1> Menu</h1>

<?php

   if (isset($_POST['opsi'])) {
    $opsi = $_POST['opsi'];

    $where ="WHERE idkmenu= $opsi";
    
    

    
    
   } else {
    $opsi=0;
    $where="";
   }

?>



<div class="mt-4 mb-4">

  <?php

      
      $row = $db->getALL("SELECT * FROM tblmenu ORDER BY menu ASC");

  ?>

  <form action=""method="post">

  
    <select name="opsi" id="" onechange="this.form.submit()">
     <?php foreach($row as $r): ?>
     <option <?php is($r['menu']==$opsi) echo "selected"  ?>value="<?php echo $r ['menu']?>"><?php echo $r['menu']?>
     <?php echo $r ['menu']?>
     </option>
     <?php endforeach ?>



      


    </select>



  </form>


</div>






<?php
  $jumlahdata = $db->rowCOUNT("SELECT idmenu FROM tblmenu $where");
  $banyak = 3;

  $halaman = ceil ($jumlahdata / $banyak);

  if (isset($_GET['p'])){
    $p=$_GET['p'];
    $mulai = ($p * $banyak) - $banyak;
  }else{
    $mulai=0;
  }



$sql = "SELECT * FROM tblmenu $where ORDER BY menu ASC LIMIT $mulai, $banyak";
 $row = $db->getALL($sql);

 $no=1+$mulai;
 
?>



<table class="table table-bordered w-50">
    <thead>
        <tr>
            <th>No</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Delete</th>
            <th>Update</th>
       </tr>
    </thead>
    <tbody>

      <?php if(!empty($row)){?>

      <?php foreach($row as $r):?>
      
      <tr>
       <td><?php echo $no++ ?></td>
       <td><?php echo $r['menu']?></td>
       <td><?php echo $r['harga']?></td>
       <td><img style="width:40px;" src="../upload/pink.jpg" alt=""><?php echo $r['gambar'] ?></td>
       <td><a href ="?f=menui&m=update&id=<?php echo $r['idkategori']?>">update</a></td>
       <td><a href ="?f=menu&m=update&id=<?php echo $r['idkategori']?>">update</a></td>
      </tr>
      <?php endforeach ?>
      <?php } ?>
    </tbody>

      

</table>

<?php

for ($i=1, $i <= $halaman ; $i++){
    echo '<a herf="?f=menu&m=select&p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp &nbsp';
}

?>

<img src="../upload/pinks.jpg" alt="">