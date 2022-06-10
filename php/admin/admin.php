<?php
session_start();
include_once('../../conexao/conexao.php');
if ((!isset($_SESSION['rm']) == true) and (!isset($_SESSION['senha']) == true)) {
	unset($_SESSION['rm']);
	unset($_SESSION['senha']);
	header('Location: ../../index.php');
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="../../assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicon-16x16.png">
    <link rel="manifest" href="assets/site.webmanifest">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../../css/style.css">

    <title>Área do Coordenador - Metstars</title>
    
</head>

<body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand navbar-light">
        <a class="navbar-brand" href="#">
            <img src="../../assets/logo-sem-nome.png" width="60px" height="48px" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand text-white" href="#">Metstars</a>
            </ul>   
        </div>
        <a href="../encerrar_sessao.php"><img src="../../assets/sair.png" width="55" height="45" alt="sair"></a>
    </nav>
    <!-- FIM NAVIGATION -->

    <div class="container my-3">
        <h1 class="text-center h1-crud mt-5">Eleições Ativas</h1>
        <button type="button" class="btn btn btn-add-chapa my-3 mt-5 text-white" data-toggle="modal" data-target="#completeModalChapa">
            Adicionar Chapa
        </button>
        <button type="button" class="btn btn btn-add-candidato my-3 mt-5 text-white" data-toggle="modal" data-target="#completeModal">
            Adicionar Candidato
        </button>
        <div id="displayAdmin"></div>
    </div>



    
    <!-- Modal de Cadastro Gremio -->
    <div class="modal fade" id="completeModalChapa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Chapa do Grêmio</h5>
                    <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nomeChapaGremio">Nome da Chapa</label>
                        <input type="text" class="form-control" id="nomeChapaGremio" placeholder="Nome da chapa">
                    </div>
                    <hr>

                    <div class="form-group">
                        <label for="rmChapa1">RM</label>
                        <input type="number" class="form-control" id="rmChapa1" placeholder="RM do candidato">
                    </div>
                    <div class="form-group">
                        <label for="nomeChapa1">Nome</label>
                        <input type="text" class="form-control" id="nomeChapa1" placeholder="Nome do candidato">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="turmaChapa1">Turma</label>
                        </div>
                        <select class="custom-select" id="turmaChapa1">
                            <option selected></option>
                            <option>1ds</option>
                            <option>1adm</option>
                            <option>1min</option>
                            <option>1mad</option>
                            <option>1mam</option>
                            <option>2ds</option>
                            <option>2adm</option>
                            <option>2min</option>
                            <option>2mad</option>
                            <option>2mam</option>
                            <option>3ds</option>
                            <option>3adm</option>
                            <option>3min</option>
                            <option>3mad</option>
                            <option>3mam</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <label for="cargoChapa1">Cargo</label>
                        <input type="text" class="form-control" id="cargoChapa1" value="Presidente" readonly>
                    </div>
                    <div class="form-group">
                        <label for="propostaChapa1">Propostas</label>
                        <textarea class="form-control" rows="3" id="propostaChapa1"></textarea>
                    </div>
                    <hr>
                    
                    <div class="form-group">
                        <label for="rmChapa2">RM</label>
                        <input type="number" class="form-control" id="rmChapa2" placeholder="RM do candidato">
                    </div>
                    <div class="form-group">
                        <label for="nomeChapa2">Nome</label>
                        <input type="text" class="form-control" id="nomeChapa2" placeholder="Nome do candidato">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="turmaChapa2">Turma</label>
                        </div>
                        <select class="custom-select" id="turmaChapa2">
                            <option selected></option>
                            <option>1ds</option>
                            <option>1adm</option>
                            <option>1min</option>
                            <option>1mad</option>
                            <option>1mam</option>
                            <option>2ds</option>
                            <option>2adm</option>
                            <option>2min</option>
                            <option>2mad</option>
                            <option>2mam</option>
                            <option>3ds</option>
                            <option>3adm</option>
                            <option>3min</option>
                            <option>3mad</option>
                            <option>3mam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cargoChapa2">Cargo</label>
                        <input type="text" class="form-control" id="cargoChapa2" value="Vice-presidente" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="propostaChapa2">Propostas</label>
                        <textarea class="form-control" rows="3" id="propostaChapa2"></textarea>
                    </div>
                    <hr>
                    
                    <div class="form-group">
                        <label for="rmChapa3">RM</label>
                        <input type="number" class="form-control" id="rmChapa3" placeholder="RM do candidato">
                    </div>
                    <div class="form-group">
                        <label for="nomeChapa3">Nome</label>
                        <input type="text" class="form-control" id="nomeChapa3" placeholder="Nome do candidato">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="turmaChapa3">Turma</label>
                        </div>
                        <select class="custom-select" id="turmaChapa3">
                            <option selected></option>
                            <option>1ds</option>
                            <option>1adm</option>
                            <option>1min</option>
                            <option>1mad</option>
                            <option>1mam</option>
                            <option>2ds</option>
                            <option>2adm</option>
                            <option>2min</option>
                            <option>2mad</option>
                            <option>2mam</option>
                            <option>3ds</option>
                            <option>3adm</option>
                            <option>3min</option>
                            <option>3mad</option>
                            <option>3mam</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <label for="cargoChapa3">Cargo</label>
                        <input type="text" class="form-control" id="cargoChapa3" value="Tesoureiro" readonly>
                    </div>
                    <div class="form-group">
                        <label for="propostaChapa3">Propostas</label>
                        <textarea class="form-control" rows="3" id="propostaChapa3"></textarea>
                    </div>
                    <hr>
                    
                    <div class="form-group">
                        <label for="rmChapa4">RM</label>
                        <input type="number" class="form-control" id="rmChapa4" placeholder="RM do candidato">
                    </div>
                    <div class="form-group">
                        <label for="nomeChapa4">Nome</label>
                        <input type="text" class="form-control" id="nomeChapa4" placeholder="Nome do candidato">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="turmaChapa4">Turma</label>
                        </div>
                        <select class="custom-select" id="turmaChapa4">
                            <option selected></option>
                            <option>1ds</option>
                            <option>1adm</option>
                            <option>1min</option>
                            <option>1mad</option>
                            <option>1mam</option>
                            <option>2ds</option>
                            <option>2adm</option>
                            <option>2min</option>
                            <option>2mad</option>
                            <option>2mam</option>
                            <option>3ds</option>
                            <option>3adm</option>
                            <option>3min</option>
                            <option>3mad</option>
                            <option>3mam</option>
                        </select>
                    </div> 
                    <div class="form-group">
                        <label for="cargoChapa4">Cargo</label>
                        <input type="text" class="form-control" id="cargoChapa4" value="Diretor de cultura" readonly>
                    </div> 
                    <div class="form-group">
                        <label for="propostaChapa4">Propostas</label>
                        <textarea class="form-control" rows="3" id="propostaChapa4"></textarea>
                    </div>
                    <hr>
                    
                    <div class="form-group">
                        <label for="rmChapa5">RM</label>
                        <input type="number" class="form-control" id="rmChapa5" placeholder="RM do candidato">
                    </div>
                    <div class="form-group">
                        <label for="nomeChapa5">Nome</label>
                        <input type="text" class="form-control" id="nomeChapa5" placeholder="Nome do candidato">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="turmaChapa5">Turma</label>
                        </div>
                        <select class="custom-select" id="turmaChapa5">
                            <option selected></option>
                            <option>1ds</option>
                            <option>1adm</option>
                            <option>1min</option>
                            <option>1mad</option>
                            <option>1mam</option>
                            <option>2ds</option>
                            <option>2adm</option>
                            <option>2min</option>
                            <option>2mad</option>
                            <option>2mam</option>
                            <option>3ds</option>
                            <option>3adm</option>
                            <option>3min</option>
                            <option>3mad</option>
                            <option>3mam</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <label for="cargoChapa5">Cargo</label>
                        <input type="text" class="form-control" id="cargoChapa5" value="Diretor de esporte" readonly>
                    </div>
                    <div class="form-group">
                        <label for="propostaChapa5">Propostas</label>
                        <textarea class="form-control" rows="3" id="propostaChapa5"></textarea>
                    </div>
                    <hr>
                    
                    <div class="form-group">
                        <label for="rmChapa6">RM</label>
                        <input type="number" class="form-control" id="rmChapa6" placeholder="RM do candidato">
                    </div>
                    <div class="form-group">
                        <label for="nomeChapa6">Nome</label>
                        <input type="text" class="form-control" id="nomeChapa6" placeholder="Nome do candidato">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="turmaChapa6">Turma</label>
                        </div>
                        <select class="custom-select" id="turmaChapa6">
                            <option selected></option>
                            <option>1ds</option>
                            <option>1adm</option>
                            <option>1min</option>
                            <option>1mad</option>
                            <option>1mam</option>
                            <option>2ds</option>
                            <option>2adm</option>
                            <option>2min</option>
                            <option>2mad</option>
                            <option>2mam</option>
                            <option>3ds</option>
                            <option>3adm</option>
                            <option>3min</option>
                            <option>3mad</option>
                            <option>3mam</option>
                        </select>
                    </div>  
                    <div class="form-group">
                        <label for="cargoChapa6">Cargo</label>
                        <input type="text" class="form-control" id="cargoChapa6" value="Diretor de imprensa" readonly>
                    </div>
                    <div class="form-group">
                        <label for="propostaChapa6">Propostas</label>
                        <textarea class="form-control" rows="3" id="propostaChapa6"></textarea>
                    </div>
                </div>
                <div class="modal-footer mx-auto mt-3">
                    <button type="button" class="btn btn-dark" onclick="addchapa()">Salvar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Modal de Cadastro Gremio -->

    <!-- Modal de Cadastro -->
    <div class="modal fade" id="completeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar Candidato</h5>
                    <button type="button" class="close button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="rm">RM</label>
                        <input type="number" class="form-control" id="rm" placeholder="RM do candidato">
                    </div>
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome do candidato">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="turma">Turma</label>
                        </div>
                        <select class="custom-select" id="turma">
                            <option selected></option>
                            <option>1ds</option>
                            <option>1adm</option>
                            <option>1min</option>
                            <option>1mad</option>
                            <option>1mam</option>
                            <option>2ds</option>
                            <option>2adm</option>
                            <option>2min</option>
                            <option>2mad</option>
                            <option>2mam</option>
                            <option>3ds</option>
                            <option>3adm</option>
                            <option>3min</option>
                            <option>3mad</option>
                            <option>3mam</option>
                        </select>
                    </div>  
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="representSala">Representante</label>
                        </div>
                        <select class="custom-select" id="representSala">
                            <option selected></option>
                            <option>representante</option>
                            <option>vice-representante</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="proposta">Propostas</label>
                        <textarea class="form-control" rows="3" id="proposta"></textarea>
                    </div>
                </div>
                <div class="modal-footer mx-auto mt-3">
                    <button type="button" class="btn btn-dark" onclick="adduma()">Salvar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Modal de Cadastro -->

    <!-- Modal de Edição -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content p-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Dados do Candidato</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="updaterm">RM</label>
                        <input type="text" class="form-control" id="updaterm" placeholder="RM do candidato">
                    </div>
                    <div class="form-group">
                        <label for="updatenome">Nome</label>
                        <input type="text" class="form-control" id="updatenome" placeholder="Chassi do veículo">
                    </div>
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="updateturma">Turma</label>
                        </div>
                        <select class="custom-select" id="updateturma">
                            <option selected></option>
                            <option>1ds</option>
                            <option>1adm</option>
                            <option>1min</option>
                            <option>1mad</option>
                            <option>1mam</option>
                            <option>2ds</option>
                            <option>2adm</option>
                            <option>2min</option>
                            <option>2mad</option>
                            <option>2mam</option>
                            <option>3ds</option>
                            <option>3adm</option>
                            <option>3min</option>
                            <option>3mad</option>
                            <option>3mam</option>
                        </select>
                    </div>  
                    <div class="input-group my-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="updaterepresentSala">Representante</label>
                        </div>
                        <select class="custom-select" id="updaterepresentSala">
                            <option selected></option>
                            <option>representante</option>
                            <option>vice-representante</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="updateproposta">Propostas</label>
                        <textarea class="form-control" rows="3" id="updateproposta"></textarea>
                    </div>
                </div>
                <div class="modal-footer mx-auto mt-3">
                    <button type="button" class="btn btn-dark" onclick="updateDetails()">Alterar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <input type="hidden" id="hiddendata">
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do Modal de Edição -->

    <footer class="text-center mt-5 bg-dark text-white">
        Metstars - 2022
    </footer>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            displayData();
        });

        function displayData() {
            var displayData="true";

            $.ajax({
                url: 'display.php',
                type: 'post',
                data:{
                    displaySend: displayData
                },
                success: function(data, status) {
                    $('#displayAdmin').html(data);
                }
            });
        }

        function addchapa() {
          var nomeChapaGremioAdd=$('#nomeChapaGremio').val();

          var rmChapaAdd1=$('#rmChapa1').val();
          var nomeChapaAdd1=$('#nomeChapa1').val();
          var turmaChapaAdd1=$('#turmaChapa1').val();
          var cargoChapaAdd1=$('#cargoChapa1').val();
          var propostaChapaAdd1=$('#propostaChapa1').val();

          var rmChapaAdd2=$('#rmChapa2').val();
          var nomeChapaAdd2=$('#nomeChapa2').val();
          var turmaChapaAdd2=$('#turmaChapa2').val();
          var cargoChapaAdd2=$('#cargoChapa2').val();
          var propostaChapaAdd2=$('#propostaChapa2').val();

          var rmChapaAdd3=$('#rmChapa3').val();
          var nomeChapaAdd3=$('#nomeChapa3').val();
          var turmaChapaAdd3=$('#turmaChapa3').val();
          var cargoChapaAdd3=$('#cargoChapa3').val();
          var propostaChapaAdd3=$('#propostaChapa3').val();

          var rmChapaAdd4=$('#rmChapa4').val();
          var nomeChapaAdd4=$('#nomeChapa4').val();
          var turmaChapaAdd4=$('#turmaChapa4').val();
          var cargoChapaAdd4=$('#cargoChapa4').val();
          var propostaChapaAdd4=$('#propostaChapa4').val();

          var rmChapaAdd5=$('#rmChapa5').val();
          var nomeChapaAdd5=$('#nomeChapa5').val();
          var turmaChapaAdd5=$('#turmaChapa5').val();
          var cargoChapaAdd5=$('#cargoChapa5').val();
          var propostaChapaAdd5=$('#propostaChapa5').val();

          var rmChapaAdd6=$('#rmChapa6').val();
          var nomeChapaAdd6=$('#nomeChapa6').val();
          var turmaChapaAdd6=$('#turmaChapa6').val();
          var cargoChapaAdd6=$('#cargoChapa6').val();
          var propostaChapaAdd6=$('#propostaChapa6').val();
         

          $.ajax({
            url: 'cadastrar_chapa.php',
            type: 'post',
            data:{
                nomeChapaGremioSend: nomeChapaGremioAdd,
        
                rmChapaSend1: rmChapaAdd1,
                nomeChapaSend1: nomeChapaAdd1,
                turmaChapaSend1: turmaChapaAdd1,
                cargoChapaSend1: cargoChapaAdd1,
                propostaChapaSend1: propostaChapaAdd1,

                rmChapaSend2: rmChapaAdd2,
                nomeChapaSend2: nomeChapaAdd2,
                turmaChapaSend2: turmaChapaAdd2,
                cargoChapaSend2: cargoChapaAdd2,
                propostaChapaSend2: propostaChapaAdd2,

                rmChapaSend3: rmChapaAdd3,
                nomeChapaSend3: nomeChapaAdd3,
                turmaChapaSend3: turmaChapaAdd3,
                cargoChapaSend3: cargoChapaAdd3,
                propostaChapaSend3: propostaChapaAdd3,

                rmChapaSend4: rmChapaAdd4,
                nomeChapaSend4: nomeChapaAdd4,
                turmaChapaSend4: turmaChapaAdd4,
                cargoChapaSend4: cargoChapaAdd4,
                propostaChapaSend4: propostaChapaAdd4,

                rmChapaSend5: rmChapaAdd5,
                nomeChapaSend5: nomeChapaAdd5,
                turmaChapaSend5: turmaChapaAdd5,
                cargoChapaSend5: cargoChapaAdd5,
                propostaChapaSend5: propostaChapaAdd5,

                rmChapaSend6: rmChapaAdd6,
                nomeChapaSend6: nomeChapaAdd6,
                turmaChapaSend6: turmaChapaAdd6,
                cargoChapaSend6: cargoChapaAdd6,
                propostaChapaSend6: propostaChapaAdd6,

            },
            success: function (data,status) {
                //console.log(status);
                $('#completeModalChapa').modal('hide');
                displayData();

                $(document).ready(function() {
                    $('.modal').on('hidden.bs.modal', function() {
                        $(this).find('input').val('');
                        $(this).find('select').val(''); 
                        $(this).find('textarea').val('');
                 });
                });
            }
          });
        }

        function adduma() {
          var rmAdd=$('#rm').val();
          var nomeAdd=$('#nome').val();
          var dtnascAdd=$('#dtnasc').val();
          var turmaAdd=$('#turma').val();
          var representSalaAdd=$('#representSala').val();
          var propostaAdd=$('#proposta').val();

          $.ajax({
            url: 'cadastrar.php',
            type: 'post',
            data:{
                rmSend: rmAdd,
                nomeSend: nomeAdd,
                dtnascSend: dtnascAdd,
                turmaSend: turmaAdd,
                representSalaSend: representSalaAdd,
                propostaSend: propostaAdd,
            },
            success: function (data,status) {
                //console.log(status);
                $('#completeModal').modal('hide');
                displayData();

                $(document).ready(function() {
                    $('.modal').on('hidden.bs.modal', function() {
                        $(this).find('input').val('');
                        $(this).find('select').val(''); 
                        $(this).find('textarea').val('');
                 });
                });
            }
          });
        }

        // Deleção Chapa
        function DeleteChapa(deleteid) {
            $.ajax({
                url: 'delete_chapa.php',
                type: 'post',
                data:{
                    deletesend: deleteid
                },
                success: function(data, status) {
                    displayData();
                }
            });
        }

        // Deleção Candidato
        function DeleteUma(deleteid) {
            $.ajax({
                url: 'delete.php',
                type: 'post',
                data:{
                    deletesend: deleteid
                },
                success: function(data, status) {
                    displayData();
                }
            });
        }

        // Alteração 
        function GetDetails(updateid) {
            $('#hiddendata').val(updateid);
            $.post('update.php',{updateid:updateid},function(data, status){
                var candid = JSON.parse(data);
                $('#updaterm').val(candid.cd_rm);
                $('#updatenome').val(candid.nm_candidato);
                $('#updateturma').val(candid.nm_turma);
                $('#updaterepresentSala').val(candid.ds_representante_sala);
                $('#updateproposta').val(candid.ds_proposta);
            });

            $('#updateModal').modal('show');
        }

        //Eevento onclick do EDITAR 
        function updateDetails() {
            var updaterm = $('#updaterm').val();
            var updatenome = $('#updatenome').val();
            var updateturma = $('#updateturma').val();
            var updaterepresentSala = $('#updaterepresentSala').val();
            var updateproposta = $('#updateproposta').val();
            var hiddendata = $('#hiddendata').val();

            $.post('update.php',{
                updaterm: updaterm,
                updatenome: updatenome,
                updateturma: updateturma,
                updaterepresentSala: updaterepresentSala,
                updateproposta: updateproposta,
                hiddendata: hiddendata,
            },function(data, status) {
                $('#updateModal').modal('hide');
                displayData();
            });
        }


    </script>
</body>
</html>