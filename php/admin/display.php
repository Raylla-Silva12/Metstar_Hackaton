<?php
include_once('../../conexao/conexao.php');

if (isset($_POST['displaySend'])) {
    $container='<div class="div-table mb-5">';

    $sql = "SELECT * FROM tb_candidato";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $cd_candidato = $row['cd_candidato'];
        $rm = $row['cd_rm'];
        $nome = $row['nm_candidato'];
        $turma = $row['nm_turma'];
        $representSala = $row['ds_representante_sala'];
        $cargoGremio = $row['ds_cargo_gremio'];
        $proposta = $row['ds_proposta'];
        $voto = $row['nr_voto'];
        $container .= '
        
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body text-info">
                <h5 class="card-title">Representante de Classe</h5>
                <p class="card-text">'.$rm.'</p>
                <p class="card-text">'.$nome.'</p>
                <p class="card-text">'.$turma.'</p>
                <p class="card-text">'.$representSala.'</p>
                <p class="card-text">'.$cargoGremio.'</p>
                <p class="card-text">'.$proposta.'</p>
                <p class="card-text">'.$voto.'</p>
                <button class="btn btn-dark" onclick="GetDetails('.$cd_candidato.')">Editar</button>
                <button class="btn btn-danger button" onclick="DeleteUma('.$cd_candidato.')">Deletar</button>
              </div>
            </div>
          </div>
        </div><br>';
    }

    
    $container .= '</div>';

    echo $container;
}

if (isset($_POST['displaySend'])) {
  $container='<div class="div-table mb-5">';

  $sql_gremio = "SELECT * FROM tb_gremio";
  $result_gremio = mysqli_query($mysqli, $sql_gremio);


  while ($row = mysqli_fetch_assoc($result_gremio)) {
    $cd_gremio = $row['cd_gremio'];
    $nm_chapa = $row['nm_chapa'];
    $cd_rm_candidato = $row['cd_rm_candidato'];
    $nm_candidato_chapa = $row['nm_candidato_chapa'];
    $nm_turma = $row['nm_turma'];
    $ds_cargo_gremio = $row['ds_cargo_gremio'];
    $ds_proposta = $row['ds_proposta'];
    $voto = $row['nr_voto'];
    $container .= '
    
    <div class="row row-cols-1 row-cols-md-2">
      <div class="col-4">
        <div class="card">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body text-info">
            <h5 class="card-title">Chapa: '.$nm_chapa.'</h5>
            <p class="card-text">'.$cd_gremio.'</p>
            <p class="card-text">'.$nm_chapa.'</p>
            <p class="card-text">'.$cd_rm_candidato.'</p>
            <p class="card-text">'.$nm_turma.'</p>
            <p class="card-text">'.$ds_cargo_gremio.'</p>
            <p class="card-text">'.$ds_proposta.'</p>
            <p class="card-text">'.$voto.'</p>
            <button class="btn btn-dark" onclick="GetDetails('.$cd_candidato.')">Editar</button>
            <button class="btn btn-danger button" onclick="DeleteUma('.$cd_candidato.')">Deletar</button>
          </div>
        </div>
      </div>
    </div><br>';
}
  $container .= '</div>';

  echo $container;
}

?>

