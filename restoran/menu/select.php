<div class="float-left mr-4">
    <a class="btn btn-primary" href="?f=kategori&m=insert" role="button">TAMBAH DATA</a>
</div>


<h1> Menu</h1>

<?php

   if (isset($_POST['opsi'])) {
    $opsi = $_POST['opsi'];

    $where ="WHERE idkategori= $opsi";
    
    

    
    
   } else {
    $opsi=0;
    $whre="";
   }

?>



<div class="mt-4 mb-4">

  <?php

      
      $row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");

  ?>

  <form action=""method="post">

  
    <select name="opsi" id="" onechange="this.form.submit()">
     <?php foreach($row as $r): ?>
     <option <?php is($r['idkategori']==$opsi) echo "selected"  ?>value="<?php echo $r ['idkategori']?>"><?php echo $r['kategori']?>
     <?php echo $r ['kategori']?>
     </option>
     <?php endforeach ?>



      


    </select>



  </form>


</div>






<?php
  $jumlahdata = $db->rowCOUNT("SELECT idkategori FROM tblkategori")
  $banyak = 4;

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
            <th>Delete</th>
            <th>Update</th>
       </tr>
    </thead>
    <tbody>

      <?php if(!empty($row)){?>

      <?php foreach($row as $r):?>
      
      <tr>
       <td><?php echo $no++ ?></td>
       <td><?php echo $r['kategori']?></td>
       <td><a href ="?f=kategori&m=update&id=<?php echo $r['idkategori']?>">update</a></td>
       <td><a href ="?f=kategori&m=update&id=<?php echo $r['idkategori']?>">update</a></td>
      </tr>
      <?php endforeach ?>
      <?php } ?>
    </tbody>

      

</table>

<?php

for ($i=1, $i <= $halaman ; $i++){
    echo '<a herf="?f=kategori&m=select&p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp &nbsp';
}




?>