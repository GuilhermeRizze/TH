<?php
    $db = mysqli_connect('db4free.net','thaynan','ITESI2022','escobarcria')
        or die("Falha ao conctar");

    $sql = "SELECT * FROM nome";

    $recordSet = mysqli_query($db, $sql);

    $retorno = mysqli_fetch_all($recordSet);

    var_dump($retorno);
?>