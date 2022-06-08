<?php
include_once('../../../conexao/conexao.php');

extract($_POST);

if (isset($_POST['nomeChapaGremioSend']) && isset($_POST['rmChapaSend1']) && 
isset($_POST['nomeChapaSend1']) && isset($_POST['turmaChapaSend1']) && 
isset($_POST['cargoChapaSend1']) && isset($_POST['propostaChapaSend1'])) {

    $sql = "INSERT INTO tb_gremio (nm_chapa, cd_rm_candidato, nm_candidato_chapa, nm_turma, ds_cargo_gremio, ds_proposta)
    VALUES ('$nomeChapaGremioSend','$rmChapaSend1', '$nomeChapaSend1', '$turmaChapaSend1', '$cargoChapaSend1', '$propostaChapaSend1')";

    $res = mysqli_query($mysqli, $sql);
}

?>