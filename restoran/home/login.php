<div class="row">

        <div class="col -4 mx-auto mt-4">
            <div>

              <h3>LOGIN PELANGGAN</h3>

            </div>
            <div class="col-md-9">
                <div class="float-right mt-4"><a href="?l=logout">logout</a></div>
                <div class="float-right mt-4">User</div>
            </div>
           <div class="form group">
                 <form action="" method="post">
                <div class="form group w-50">
                 <label for="">Email</label>
                 <input type="email" name="email" required class="form-control" >
            </div>
            
            <div class="form group">
                 <form action="" method="post">
                <div class="form group w-50">
                 <label for="">PASSWORD</label>
                 <input type="password" name="password" required class="form-control" >
            </div>
       
       
       
       
       
        <div>

        <?php

   if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql= "SELECT * FROM tblpelanggan WHERE email='$email' AND password= '$password' AND aktif=1 ";
    $count = $db->rowCOUNT($sql);    $count = $db->rowCOUNT($sql);

    if ($count == 0) {
        echo "<h3>Email atau Password Salah</h3>";

    }else {
        $sql= "SELECT * FROM tblpelanggan WHERE email='$email' AND password= '$password' AND aktif=1 ";
        $row=$db->getITEM($sql);

        $_SESSION['pelanggan']=$row['email'];
        $_SESSION['idpelanggan']=$row['idpelanggan'];

        header("location:index.php")
    }
   }
    
   

    echo $count;
    
 



?>

