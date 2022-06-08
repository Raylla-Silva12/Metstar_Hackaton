<?php
include_once('../../../conexao/conexao.php');

extract($_POST);

if (isset($_POST['nomeChapaGremioSend']) && isset($_POST['rmChapaSend4']) && 
isset($_POST['nomeChapaSend4']) && isset($_POST['turmaChapaSend4']) && 
isset($_POST['cargoChapaSend4']) && isset($_POST['propostaChapaSend4'])) {

    $sql = "INSERT INTO tb_gremio (nm_chapa, cd_rm_candidato, nm_candidato_chapa, nm_turma, ds_cargo_gremio, ds_proposta)
    VALUES 
    ('$nomeChapaGremioSend','$rmChapaSend4', '$nomeChapaSend4', '$turmaChapaSend4', '$cargoChapaSend4', '$propostaChapaSend4')";

    $res = mysqli_query($mysqli, $sql);
}

?>