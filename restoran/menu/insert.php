<?php
$row = $db->getALL("SELECT * FROM tblmenu ORDER BY menu ASC");

?>
<h1> Insert Menu </h1>
<div class="form group">
 <form action="" method="post">
    <div class="form group w-50">
        
       <label for="">Kategori</label><br>
        <select name="idkategori" id="">
           <?php foreach($row as $r ):?>
           <option value="<?php echo $r['idkategori']?>"><?php echo $r['kategori']?></option>>
           <?php endforeach ?>
        </select>
   </div>
   
   
   <div class="form group">
       <form action="" method="post" enctype="multipart/fprm.data">
       <div class="form group w-50">

       <label for="">Harga</label>
       <input type="text" name="harga" number required placehorder="isi harga" class="form-control" >
    </div>
  

    <div class="form group">
  
       <form action="" method="post">
       <div class="form group w-50">

       <label for="">Gambar</label><br>
       <input type="file" name="gambar" >
    </div>
  
          
    <div>

        <input type="submit" name="simpan" value="simpan" class="btn btn primary">;
    
    </div>

 </form>

</div>

<?php

if ($isset($_POST['simpan'])){
    $idkategori = $_POST['idkategori'];
    $menu = $_POST['menu'];
    $harga =$_POST['harga'];
    $gambar = $_FILES['gambar']['name'];
    $temp = $_FILES['gambar']['temp_name'];

  if (empty$gambar) {
    echo "<h1> GAMBAR KOSONG </h1>";
  }else {
    $sql = "INSERT INTO tblmenu VALUES ('',$idkategori,'$menu', '$gambar', $harga)";
   
    move_uploaded_file($temp,'../upload/'.$gambar);
    
    $db->runSQL($sql);
    header("location:?f=menu&m=select");
  }

}

?>