<?php
    session_start();
    require_once "dbcontroler.php";
    $db = new DB;
    
    $sql = "SELECT * FROM tblkategori ORDER BY kategori";
    $row = $db->getALL($sql);

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESTORAN SMENDA | Aplikasi Restoran SMK</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css ">
</head>
<body>
    <div class="container">

        <div class="row mt-4">
            <div class="col-md-3">
                <a href="index.php"><h3>Admin Page</a></h3>
            </div>

            <div class="col md-9">

                 <div class="float-right mt-4"><a href="?log=logout">Logout</a></div>
                 <div class="float-right mt-4 mr-4">User : <a href="?user&m=updateuser&id"></a></div>
                 <div class="float-right mt-4 mr-4">LEVEL : <?php echo $_SESSION['level']?></a></div>



            </div>

            <div class="col-mt-5">
               <div class="col-md-3">

                <ul class="nav flex-column">

                <?php 
                
                  $level= $_SESSION['level'];
                  switch ($level) {
                    case 'admin':
                        echo '
                        
                    <li class="nav-item"><a class="nav-link" href="?f=kategori&m=select">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=menu&m=select">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=pelanggan&m=select">Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=ordetail&m=select">OrderDetail</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=user&m=select">User</a></li>
                        
                        
                        
                        ';
                        break;

                        case 'kasir':
                             echo'
                             
                             <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                             <li class="nav-item"><a class="nav-link" href="?f=ordetail&m=select">OrderDetail</a></li>
                             
                             
                            ';
                             
                        break;

                        case 'koki':
                            echo'
                            
                            
                            <li class="nav-item"><a class="nav-link" href="?f=ordetail&m=select">OrderDetail</a></li>
                            
                            
                           ';
                            
                       break;
                   
                    
                    default:
                       echo'tidak ada menu';
                        break;
                  }
                
                ?>

                    






                </ul>








               </div>

            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <h3>Kategori</h3>
                <hr>
                <?php if(!empty($row)){?>
                <ul class="nav flex-column">
                    
                    <?php foreach($row as $r):?>
                    <li class="nav-item"><a class="nav-link"href=""><?php echo $r['kategori']?></a></li>
                    <?php endforeach?>
                </ul>
                <?php }?>
            </div>
            <div class="col-md-9">
                <?php
                
                    echo "<h1>DAFTAR MENU</h1>"
                
                ?>
            </div>
        </div>
    
</body>
</html>