<?php

$host = "localhost";
$usuario = "lctsnhpu";
$senha = "AllyarJosias12";
$bd = "lctsnhpu_db_metstars";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->error)
    echo "Erro de Conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
?>