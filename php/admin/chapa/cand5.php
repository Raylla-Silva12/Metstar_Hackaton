<?php
include_once('../../../conexao/conexao.php');

extract($_POST);

if (isset($_POST['nomeChapaGremioSend']) && isset($_POST['rmChapaSend5']) && 
isset($_POST['nomeChapaSend5']) && isset($_POST['turmaChapaSend5']) && 
isset($_POST['cargoChapaSend5']) && isset($_POST['propostaChapaSend5'])) {

    $sql = "INSERT INTO tb_gremio (nm_chapa, cd_rm_candidato, nm_candidato_chapa, nm_turma, ds_cargo_gremio, ds_proposta)
    VALUES 
    ('$nomeChapaGremioSend','$rmChapaSend5', '$nomeChapaSend5', '$turmaChapaSend5', '$cargoChapaSend5', '$propostaChapaSend5')";

    $res = mysqli_query($mysqli, $sql);
}

?>