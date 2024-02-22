<h1>registrasi pelanggan</h1>
<div class="form group">
  <form action="" method="post">
  <div class="form group w-50">
    <label for="">Pelanggan</label>
    <input type="text" name="pelanggan" required placehorder="isi pelanggan" class="form-control" >
  </div>

  <div>
    <div class="form group w-50">
      <label for="">Alamat</label>
      <input type="text" name="alamat" required placehorder="isi alamat" class="form-control" >
    </div>


    <div class="form group w-50">
       <label for="">Telp</label>
       <input type="text" name="telp" required placehorder="isi telp" class="form-control" >
    </div>

    <div class="form group w-50">
      <label for="">Email</label>
      <input type="email" name="email" required placehorder="email" class="form-control" >
    </div>

    <div class="form group w-50">
      <label for="">Password</label>
      <input type="password" name="password" required placehorder="password" class="form-control" >
    </div>

    <div class="form group w-50">
      <label for="">Konfirmasi Password</label>
      <input type="password" name="konfirmasi" required placehorder="password" class="form-control" >
    </div>

    

    

  
    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn primary">;

    </div>

  </form>

</div>

<?php

if ($isset($_POST['simpan'])){
  $pelanggan= $_POST['pelanggan'];
  $alamat= $_POST['alamat'];
  $telp= $_POST['telp'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $konfirmasi = $_POST['konfirmasi'];
  

  


 if ($password === $konfirmasi) {
   $sql = "INSERT INTO tblpelanggan VALUES ('','$pelanggan','$alamat','$telp',$email','$password',1)";
//    echo $sql;
    $db->runSQL($sql);
    header ("location:?f=home&m=info");
 } else{
    echo  "<h1>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h1>";
 }


  echo $sql;


}

?>