<?php
include_once('../../../conexao/conexao.php');

extract($_POST);

if (isset($_POST['nomeChapaGremioSend']) && isset($_POST['rmChapaSend6']) && 
isset($_POST['nomeChapaSend6']) && isset($_POST['turmaChapaSend6']) && 
isset($_POST['cargoChapaSend6']) && isset($_POST['propostaChapaSend6'])) {

    $sql = "INSERT INTO tb_gremio (nm_chapa, cd_rm_candidato, nm_candidato_chapa, nm_turma, ds_cargo_gremio, ds_proposta)
    VALUES 
    ('$nomeChapaGremioSend','$rmChapaSend6', '$nomeChapaSend6', '$turmaChapaSend6', '$cargoChapaSend6', '$propostaChapaSend6')";

    $res = mysqli_query($mysqli, $sql);
}

?>