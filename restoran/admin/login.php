<?php  
  session_start();
  require_once "../dbcontroller.php";
  $db = new DB;
 
  if (isset($_SESSION['user'])) {
    header("location:login.php");
  }
  if (isset($_GET['log'])) {
    session_destroy();
    header("location:index.php");
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Restoran</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">\
        <div class="row">

        <div class="col -4 mx-auto mt-4">
            <div>

              <h3>LOGIN RESTORAN</h3>

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
  
      <input type="submit" name="login" value="LOGIN" class="btn btn primary">;

  </div>

  </form>


</div>


           </div>


          </div>



    </div>
</body>
</html>





<?php

   if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql= "SELECT * FROM tbluser WHERE email='$email' AND password= '$password' ";
    $count = $db->rowCOUNT($sql);    $count = $db->rowCOUNT($sql);

    if ($count == 0) {
        echo "<h3>Email atau Password Salah</h3>";

    }else {
        $sql= "SELECT * FROM tbluser WHERE email='$email' AND password='$password' ";
        $row=$db->getITEM($sql);

        $_SESSION['user']=$row['email'];
        $_SESSION['level']=$row['level'];
        $_SESSION['iduser']=$row['iduser'];

        header("location:index.php")
    }
   }
    
   

    echo $count;
    
 



?>

