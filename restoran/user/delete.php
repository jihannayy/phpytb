<?php


if(isset($_GET['id'])) {
    $id=$_GET['id'];

    $sql = "SELECT  FROM tbluser WHERE iduser=$id"

    $db->runSQL($sql);

  header ("location:?f=user&m=select");

}






?>