<?php
include('../../conexao/conexao.php');

if (isset($_POST['updateid'])) {
    $cand_id = $_POST['updateid'];

    $sql = "SELECT * FROM tb_candidato WHERE cd_candidato=$cand_id";
    $result = mysqli_query($mysqli, $sql);
    $response = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status']=200;
    $response['messege']="Inválido";
}

// Editar query
if (isset($_POST['hiddendata'])) {
    $uniqueid = $_POST['hiddendata'];
    $rm = $_POST['updaterm'];
    $nome = $_POST['updatenome'];
    $dtnasc = $_POST['updatedtnasc'];
    $turma = $_POST['updateturma'];
    $representSala = $_POST['updaterepresentSala'];
    $proposta = $_POST['updateproposta'];

    $sql = "UPDATE tb_candidato SET cd_rm='$rm', nm_candidato='$nome', dt_nasc='$dtnasc', nm_turma='$turma', ds_representante_sala='$representSala', ds_proposta='$proposta' WHERE cd_candidato=$uniqueid";
    $result = mysqli_query($mysqli, $sql);
}