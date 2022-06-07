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

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../../css/style.css">

    <title>Coordenador - Metstars</title>
    
</head>

<body>

    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand navbar-light bg-dark">
        <a class="navbar-brand" href="#">
            <img src="#" width="62" height="48" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand text-white" href="#">Metstars</a>
            </ul>   
        </div>
        <a href="../encerrar_sessao.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SAIR</button></a>
    </nav>
    <!-- FIM NAVIGATION -->

    <div class="container my-3">
        <h1 class="text-center h1-crud mt-5">Eleições Ativas</h1>
        <button type="button" class="btn btn-dark my-3" data-toggle="modal" data-target="#completeModal">
            Adicionar
        </button>
        <div id="displayAdmin"></div>
    </div>

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
                    <div class="form-group">
                    <label for="dtnasc">Data de nascimento</label>
                    <input type="date" class="form-control" id="dtnasc" placeholder="Data de nascimento">
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
                    <div class="form-group">
                        <label for="updatedtnasc">Data de nascimento</label>
                        <input type="text" class="form-control" id="updatedtnasc" placeholder="Ano de fabricação">
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



    <!-- SCRIPTS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> -->
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
                    });
                });
            }
          });
        }

        // Deleção
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
                $('#updatedtnasc').val(candid.dt_nasc);
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
            var updatedtnasc = $('#updatedtnasc').val();
            var updateturma = $('#updateturma').val();
            var updaterepresentSala = $('#updaterepresentSala').val();
            var updateproposta = $('#updateproposta').val();
            var hiddendata = $('#hiddendata').val();

            $.post('update.php',{
                updaterm: updaterm,
                updatenome: updatenome,
                updatedtnasc: updatedtnasc,
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