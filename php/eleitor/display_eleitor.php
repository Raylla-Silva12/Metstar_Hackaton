<?php
include '../../conexao/conexao.php';

if (isset($_POST['displaySend'])) {
    $container='<div class="div-table mb-5">';

    $sql = "SELECT * FROM tb_candidato";
    $result = mysqli_query($mysqli, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $nome = $row['nm_candidato'];
        $turma = $row['nm_turma'];
        $representSala = $row['ds_representant_sala'];
        $cargoGremio = $row['ds_cargo_gremio'];
        $proposta = $row['ds_proposta'];
        $container .= '
        
        <div class="row row-cols-1 row-cols-md-2">
          <div class="col-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body text-info">
                <h5 class="card-title">Candidato</h5>
                <p class="card-text">'.$nome.'</p>
                <p class="card-text">'.$turma.'</p>
                <p class="card-text">'.$representSala.'</p>
                <p class="card-text">'.$cargoGremio.'</p>
                <p class="card-text">'.$proposta.'</p>
                <p class="card-text"></p>
                
              </div>
            </div>
          </div>
        </div><br>';
    }
    $container .= '</div>';

    echo $container;
}

?>

