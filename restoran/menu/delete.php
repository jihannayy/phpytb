<?php


if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql = "SELECT  FROM tblmenu WHERE idmenu=$id"

    $db->runSQL($sql);

  header ("location:?f=menu&m=select");

}






?>