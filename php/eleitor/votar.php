<?php
    session_start();
    include_once('../../conexao/conexao.php');


	$sql = "SELECT * FROM tb_usuario";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['nm_turma'] == "2DS") {
             
        }
    }
 
    

?>