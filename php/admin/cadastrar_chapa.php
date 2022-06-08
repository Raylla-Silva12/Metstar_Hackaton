<?php
include_once('../../conexao/conexao.php');

    extract($_POST);

    if (isset($_POST['nomeChapaGremioSend']) && isset($_POST['rmChapaSend1']) && 
    isset($_POST['nomeChapaSend1']) && isset($_POST['turmaChapaSend1']) && 
    isset($_POST['cargoChapaSend1']) && isset($_POST['propostaChapaSend1'])

    && isset($_POST['rmChapaSend2']) && 
    isset($_POST['nomeChapaSend2']) && isset($_POST['turmaChapaSend2']) && 
    isset($_POST['cargoChapaSend2']) && isset($_POST['propostaChapaSend2'])

    && isset($_POST['rmChapaSend3']) && 
    isset($_POST['nomeChapaSend3']) && isset($_POST['turmaChapaSend3']) && 
    isset($_POST['cargoChapaSend3']) && isset($_POST['propostaChapaSend3'])

    && isset($_POST['rmChapaSend4']) && 
    isset($_POST['nomeChapaSend4']) && isset($_POST['turmaChapaSend4']) && 
    isset($_POST['cargoChapaSend4']) && isset($_POST['propostaChapaSend4'])

    && isset($_POST['rmChapaSend5']) && 
    isset($_POST['nomeChapaSend5']) && isset($_POST['turmaChapaSend5']) && 
    isset($_POST['cargoChapaSend5']) && isset($_POST['propostaChapaSend5'])

    && isset($_POST['rmChapaSend6']) && 
    isset($_POST['nomeChapaSend6']) && isset($_POST['turmaChapaSend6']) && 
    isset($_POST['cargoChapaSend6']) && isset($_POST['propostaChapaSend6'])

    ) {

        $sql = "INSERT INTO tb_gremio (nm_chapa, cd_rm_candidato1, nm_candidato_chapa1, nm_turma1, ds_cargo_gremio1, ds_proposta1, 
        cd_rm_candidato2, nm_candidato_chapa2, nm_turma2, ds_cargo_gremio2, ds_proposta2, 
        cd_rm_candidato3, nm_candidato_chapa3, nm_turma3, ds_cargo_gremio3, ds_proposta3, 
        cd_rm_candidato4, nm_candidato_chapa4, nm_turma4, ds_cargo_gremio4, ds_proposta4, 
        cd_rm_candidato5, nm_candidato_chapa5, nm_turma5, ds_cargo_gremio5, ds_proposta5, 
        cd_rm_candidato6, nm_candidato_chapa6, nm_turma6, ds_cargo_gremio6, ds_proposta6)

        VALUES ('$nomeChapaGremioSend',
        '$rmChapaSend1', '$nomeChapaSend1', '$turmaChapaSend1', '$cargoChapaSend1', '$propostaChapaSend1',
        '$rmChapaSend2', '$nomeChapaSend2', '$turmaChapaSend2', '$cargoChapaSend2', '$propostaChapaSend2',
        '$rmChapaSend3', '$nomeChapaSend3', '$turmaChapaSend3', '$cargoChapaSend3', '$propostaChapaSend3',
        '$rmChapaSend4', '$nomeChapaSend4', '$turmaChapaSend4', '$cargoChapaSend4', '$propostaChapaSend4',
        '$rmChapaSend5', '$nomeChapaSend5', '$turmaChapaSend5', '$cargoChapaSend5', '$propostaChapaSend5',
        '$rmChapaSend6', '$nomeChapaSend6', '$turmaChapaSend6', '$cargoChapaSend6', '$propostaChapaSend6'  
        )";

        $res = mysqli_query($mysqli, $sql);
    }

?>