<div class="form group">
  <form action="" method="post">
  <div class="form group w-50">
    <label for="">Nama User</label>
    <input type="text" name="user" required placehorder="isi user" class="form-control" >
  </div>

  <div>

    <div class="form group w-50">
      <label for="">Email</label>
      <input type="email" name="user" required placehorder="email" class="form-control" >
    </div>

    <div class="form group w-50">
      <label for="">Password</label>
      <input type="password" name="password" required placehorder="password" class="form-control" >
    </div>

    <div class="form group w-50">
      <label for="">Konfirmasi Password</label>
      <input type="password" name="konfirmasi" required placehorder="password" class="form-control" >
    </div>

    <div class="form group w-50">
      <label for="">Level</label>
      <select name="level" id="">

        <option value="admin">admin</option>
        <option value="koki">koki</option>
        <option value="kasir">kasir</option>


      </select>
    </div>

    

  
    <div>
        <input type="submit" name="simpan" value="simpan" class="btn btn primary">;

    </div>

  </form>

</div>

<?php

if ($isset($_POST['simpan'])){
  $user = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $konfirmasi = $_POST['konfirmasi'];
  $level = $_POST['level'];

  


 if ($password === $konfirmasi) {
   $sql = "INSERT INTO tbluser VALUES ('','$user','$email','$password','$level',1)";
    $db->runSQL($sql);
    header ("location:?f=user&me=select");
 } else{
    echo  "<h1>PASSWORD TIDAK SAMA DENGAN KONFIRMASI</h1>";
 }


  echo $sql;


}

?>