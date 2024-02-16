<nav>
    <ul>
         <l1><a herf="?menu=kontak">kontak</a></l1>
         <l1><a herf="?menu=sejarah">sejarah</a></l1>
         <l1><a herf="?menu=jurusan">jurusan</a></l1>
         
    </ul>
</nav>

<?php

if (isset($_GET['menu'])) {
    
    $menu = $_GET['menu'];

    require_once $menu. '.php';


}

?>