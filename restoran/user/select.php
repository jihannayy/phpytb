<?php
  $jumlahdata = $db->rowCOUNT("SELECT iduser FROM tbluser")
  $banyak = 4;

  $halaman = ceil ($jumlahdata / $banyak);

  if (isset($_GET['p'])){
    $p=$_GET['p'];
    $mulai = ($p * $banyak) - $banyak;
  }else{
    $mulai =0;
  }



 $sql = "SELECT * FROM tbluser ORDER BY user ASC LIMIT $mulai, $banyak";
 $row = $db->getALL($sql);

 $no=1+$mulai;
 
?>

<div class="float-left mr-4">
    <a class="btn btn-primary" href="?f=user&m=insert" role="button">TAMBAH DATA</a>
</div>


<h1> Kategori</h1>

<table class="table table-bordered w-50">
    <thead>
        <tr>
            <th>No</th>
            <th>User</th>
            <th>email</th>
            <th>level</th>
            <th>Delete</th>
            <th>Update</th>
            <th>Status</th>
       </tr>
    </thead>
    <tbody>

   <?php foreach($row as $r){
        "status =AKTIF";
   }else  {
        $status = "BANNED";
   }   
  
      

    ?>
      <?php foreach($row as $r):?>
      
      <tr>
       <td><?php echo $no++ ?></td>
       <td><?php echo $r['user']?></td>
       <td><?php echo $r['email']?></td>
       <td><?php echo $r['level']?></td>
       <td><a href ="?f=useri&m=update&id=<?php echo $r['iduser']?>">Delete</a></td>
       <td><a href ="?f-user&m=update&id=<?php echo $r['iddoser']?>"><?php echo $status?></a></td>
      </tr>
      <?php endforeach ?>
    </tbody>

      

</table>

<?php

for ($i=1, $i <= $halaman ; $i++){
    echo '<a herf="?f=user&m=select&p='.$i.'">'.$i.'</a>';
    echo '&nbsp &nbsp &nbsp';
}




?>