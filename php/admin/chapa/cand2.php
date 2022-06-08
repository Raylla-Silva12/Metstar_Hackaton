<?php
include_once('../../../conexao/conexao.php');

extract($_POST);

if (isset($_POST['nomeChapaGremioSend']) && isset($_POST['rmChapaSend2']) && 
isset($_POST['nomeChapaSend2']) && isset($_POST['turmaChapaSend2']) && 
isset($_POST['cargoChapaSend2']) && isset($_POST['propostaChapaSend2'])) {

    $sql = "INSERT INTO tb_gremio (nm_chapa, cd_rm_candidato, nm_candidato_chapa, nm_turma, ds_cargo_gremio, ds_proposta)
    VALUES 
    ('$nomeChapaGremioSend','$rmChapaSend2', '$nomeChapaSend2', '$turmaChapaSend2', '$cargoChapaSend2', '$propostaChapaSend2')";

    $res = mysqli_query($mysqli, $sql);
}

?>