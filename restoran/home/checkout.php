<?php 

if (isset($_GET['total'])) {
    $total = $_GET['total'];
    echo $total;

    echo '<br>';

    echo idorder();

    echo '<br>';

    insertOrder(idorder(),$_SESSION['idpelanggan'], '2019-12-01', $total);

}

function idorder(){
    global $db;
    $sql = "SELECT idorder FROM tblorder ORDER BY idorder DESC";
    $jumlah = $db ->rowCOUNT($sql);
    if ($jumlah == 0) {
        $idorder = 1;
    }else{
        $item = $db -> getITEM($sql);
        $id = $item['idorder']+1;
    }
    
    return $id;

}

function insertOrder($idorder, $idpelanggan, $tgl, $total){
    global $db;

    $sql="INSERT INTO tblorder VALUES($idorder, $idpelanggan, '$tgl', $total,0,0,0  )";

    $db->runSQL($sql);
}



?>