<?php
include_once('../../../conexao/conexao.php');

extract($_POST);

if (isset($_POST['nomeChapaGremioSend']) && isset($_POST['rmChapaSend3']) && 
isset($_POST['nomeChapaSend3']) && isset($_POST['turmaChapaSend3']) && 
isset($_POST['cargoChapaSend3']) && isset($_POST['propostaChapaSend3'])) {

    $sql = "INSERT INTO tb_gremio (nm_chapa, cd_rm_candidato, nm_candidato_chapa, nm_turma, ds_cargo_gremio, ds_proposta)
    VALUES 
    ('$nomeChapaGremioSend','$rmChapaSend3', '$nomeChapaSend3', '$turmaChapaSend3', '$cargoChapaSend3', '$propostaChapaSend3')";

    $res = mysqli_query($mysqli, $sql);
}

?>