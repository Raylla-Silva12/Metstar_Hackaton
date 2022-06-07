<?php
include '../../conexao/conexao.php';

if (isset($_POST['deletesend'])) {
    $unique = $_POST['deletesend'];

    $sql = "DELETE FROM tb_candidato WHERE cd_candidato=$unique";
    $result = mysqli_query($mysqli, $sql);
}

?>