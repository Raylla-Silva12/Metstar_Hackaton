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

    <title>Área do Eleitor - Metstars</title>
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
        <a href="../../conexao/encerrar_sessao.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">SAIR</button></a>
    </nav>
    <!-- FIM NAVIGATION -->

    <header>
        <h1 class="text-center mt-5 mb-3">Eleições Ativas</h1>
    </header>

    <main class="text-center mx-5">
        <div id="displayEleitor"></div>
    </main>

    <footer class="text-center mt-5 bg-dark text-white">
        footer
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
                url: 'display_eleitor.php',
                type: 'post',
                data:{
                    displaySend: displayData
                },
                success: function(data, status) {
                    $('#displayEleitor').html(data);
                }
            });
        }
    </script>

</body>
</html>