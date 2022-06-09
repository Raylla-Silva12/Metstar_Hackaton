<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	 <!-- BOOTSTRAP AND CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
    
    <!-- CSS -->
    <link rel="stylesheet" href="../../css/style.css">
    
</head>
<body>


<?php
include_once('../../conexao/conexao.php');

echo "<h1 class='mt-2'>Eleições de Representantes</h1><br>";

if (isset($_POST['displaySend'])) {
    $container='<div class="row row-cols-1 row-cols-md-2">';

    $sql = "SELECT * FROM tb_candidato";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $cd_candidato = $row['cd_candidato'];
        $rm = $row['cd_rm'];
        $nome = $row['nm_candidato'];
        $turma = $row['nm_turma'];
        $representSala = $row['ds_representante_sala'];
        $proposta = $row['ds_proposta'];
        $voto = $row['nr_voto'];
        $container .= '

        <div class="col mb-4">
          <div class="card">
            <div class="card-header">'.$turma.'</div>
            <div class="card-body">
              <h5 class="card-title">Representante de Classe</h5>
                  <p class="card-text"><b>RM:</b> '.$rm.'</p>
                  <p class="card-text"><b>Nome:</b> '.$nome.'</p>
                  <p class="card-text"><b>Turma:</b> '.$turma.'</p>
                  <p class="card-text"><b>Cargo Desejado:</b> '.$representSala.'</p>
                  <p class="card-text"><b>Proposta:</b> '.$proposta.'</p>
                  <p class="card-text"><b>Quantidade de Votos: '.$voto.'</b></p>
                  <button class="btn btn-dark" onclick="GetDetails('.$cd_candidato.')">Editar</button>
                  <button class="btn btn-danger button" onclick="DeleteUma('.$cd_candidato.')">Deletar</button>
              </div>
            </div>
          </div>

        ';
    }

    
    $container .= '</div>';

    echo $container;
}

echo "<h1 class='mt-5'>Eleições do Grêmio</h1><br>";

if (isset($_POST['displaySend'])) {
  $container='<div class="div-table mb-5">';

  $sql_gremio = "SELECT * FROM tb_gremio";
  $result_gremio = mysqli_query($mysqli, $sql_gremio);


  while ($row = mysqli_fetch_assoc($result_gremio)) {
    $cd_gremio = $row['cd_gremio'];
    $nm_chapa = $row['nm_chapa'];

    $cd_rm_candidato1 = $row['cd_rm_candidato1'];
    $nm_candidato_chapa1 = $row['nm_candidato_chapa1'];
    $nm_turma1 = $row['nm_turma1'];
    $ds_cargo_gremio1 = $row['ds_cargo_gremio1'];
    $ds_proposta1 = $row['ds_proposta1'];

    $cd_rm_candidato2 = $row['cd_rm_candidato2'];
    $nm_candidato_chapa2 = $row['nm_candidato_chapa2'];
    $nm_turma2 = $row['nm_turma2'];
    $ds_cargo_gremio2 = $row['ds_cargo_gremio2'];
    $ds_proposta2 = $row['ds_proposta2'];

    $cd_rm_candidato3 = $row['cd_rm_candidato3'];
    $nm_candidato_chapa3 = $row['nm_candidato_chapa3'];
    $nm_turma3 = $row['nm_turma3'];
    $ds_cargo_gremio3 = $row['ds_cargo_gremio3'];
    $ds_proposta3 = $row['ds_proposta3'];

    $cd_rm_candidato4 = $row['cd_rm_candidato4'];
    $nm_candidato_chapa4 = $row['nm_candidato_chapa4'];
    $nm_turma4 = $row['nm_turma4'];
    $ds_cargo_gremio4 = $row['ds_cargo_gremio4'];
    $ds_proposta4 = $row['ds_proposta4'];

    $cd_rm_candidato5 = $row['cd_rm_candidato5'];
    $nm_candidato_chapa5 = $row['nm_candidato_chapa5'];
    $nm_turma5 = $row['nm_turma5'];
    $ds_cargo_gremio5 = $row['ds_cargo_gremio5'];
    $ds_proposta5 = $row['ds_proposta5'];

    $cd_rm_candidato6 = $row['cd_rm_candidato6'];
    $nm_candidato_chapa6 = $row['nm_candidato_chapa6'];
    $nm_turma6 = $row['nm_turma6'];
    $ds_cargo_gremio6 = $row['ds_cargo_gremio6'];
    $ds_proposta6 = $row['ds_proposta6'];

    $voto = $row['nr_voto'];
    $container .= '
    
    <div class="row row-cols-1 row-cols-md-12">
      <div class="col-12">
        <div class="card">
          <div class="card-header">Chapa '.$nm_chapa.'</div>
          <div class="card-body">
            <h5 class="card-title">'.$nm_chapa.'</h5>
            
            <div class="row">
              <div class="col">
                <p class="card-text"><b>RM:</b> '.$cd_rm_candidato1.'</p>
                <p class="card-text"><b>Nome:</b> '.$nm_candidato_chapa1.'</p>
                <p class="card-text"><b>Turma:</b> '.$nm_turma1.'</p>
                <p class="card-text"><b>Cargo desejado:</b> '.$ds_cargo_gremio1.'</p>
                <p class="card-text"><b>Proposta:</b> '.$ds_proposta1.'</p>
                <hr>
    
                <p class="card-text"><b>RM:</b> '.$cd_rm_candidato2.'</p>
                <p class="card-text"><b>Nome:</b> '.$nm_candidato_chapa2.'</p>
                <p class="card-text"><b>Turma:</b> '.$nm_turma2.'</p>
                <p class="card-text"><b>Cargo desejado:</b> '.$ds_cargo_gremio2.'</p>
                <p class="card-text"><b>Proposta:</b> '.$ds_proposta2.'</p>
                <hr>

                <p class="card-text"><b>RM:</b> '.$cd_rm_candidato3.'</p>
                <p class="card-text"><b>Nome:</b> '.$nm_candidato_chapa3.'</p>
                <p class="card-text"><b>Turma:</b> '.$nm_turma3.'</p>
                <p class="card-text"><b>Cargo desejado:</b> '.$ds_cargo_gremio3.'</p>
                <p class="card-text"><b>Proposta:</b> '.$ds_proposta3.'</p>
              </div>

              <div class="col">
                <p class="card-text"><b>RM:</b> '.$cd_rm_candidato4.'</p>
                <p class="card-text"><b>Nome:</b> '.$nm_candidato_chapa4.'</p>
                <p class="card-text"><b>Turma:</b> '.$nm_turma4.'</p>
                <p class="card-text"><b>Cargo desejado:</b> '.$ds_cargo_gremio4.'</p>
                <p class="card-text"><b>Proposta:</b> '.$ds_proposta4.'</p>
                <hr>
    
                <p class="card-text"><b>RM:</b> '.$cd_rm_candidato5.'</p>
                <p class="card-text"><b>Nome:</b> '.$nm_candidato_chapa5.'</p>
                <p class="card-text"><b>Turma:</b> '.$nm_turma5.'</p>
                <p class="card-text"><b>Cargo desejado:</b> '.$ds_cargo_gremio5.'</p>
                <p class="card-text"><b>Proposta:</b> '.$ds_proposta5.'</p>
                <hr>

                <p class="card-text"><b>RM:</b> '.$cd_rm_candidato6.'</p>
                <p class="card-text"><b>Nome:</b> '.$nm_candidato_chapa6.'</p>
                <p class="card-text"><b>Turma:</b> '.$nm_turma6.'</p>
                <p class="card-text"><b>Cargo desejado:</b> '.$ds_cargo_gremio6.'</p>
                <p class="card-text"><b>Proposta:</b> '.$ds_proposta6.'</p>
                
              </div>  
            </div>

              <p class="card-text mt-2"><b>Quantidade de votos: '.$voto.'</b></p>
            <button class="btn btn-danger button" onclick="DeleteChapa('.$cd_gremio.')">Deletar</button>
          </div>
        </div>
      </div>
    </div><br>';
}
  $container .= '</div>';

  echo $container;
}

?>

</body>
</html>