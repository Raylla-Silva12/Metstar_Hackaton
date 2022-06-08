<?php
include_once('../../conexao/conexao.php');

extract($_POST);

if (isset($_POST['rmSend']) && isset($_POST['nomeSend']) && isset($_POST['turmaSend']) && isset($_POST['representSalaSend']) && isset($_POST['propostaSend'])) {
    $sql = "INSERT INTO tb_candidato (cd_rm, nm_candidato, nm_turma, ds_representante_sala, ds_proposta)
    VALUES ('$rmSend', '$nomeSend', '$turmaSend', '$representSalaSend', '$propostaSend')";

    $res = mysqli_query($mysqli, $sql);
}

?>