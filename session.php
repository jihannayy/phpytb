<nav>

<ul>
    <l1><a herf="?menu=isi">isi</a></l1>
    <l1><a herf="?menu=hapus">hapus</a></l1>
    <l1><a herf="?menu=destroy">destroy</a></l1>
</ul>
</nav>






<?php

session_start();

var_dump($_SESSION);


if (isset($_GET['menu'])){
    $menu = $_GET['menu'];

    echo $menu;

    switch ($menu){
        case 'isi';
            isisession();
             break;

        case 'hapus';
            unset($_SESSION['user']);
            break; 
        case 'destroyr';
            session_destroy();
            break;     
        default:
            break;

    }

}

echo '<br>';


function isisession(){
$_SESSION['user'] = 'joni';

$_SESSION['nama'] = 'joni rambo';

$_SESSION['alamat'] = 'sidoarjo';

}


?>