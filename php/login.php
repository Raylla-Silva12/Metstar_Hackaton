<?php
	session_start();
	include('../conexao/conexao.php');

	if (isset($_POST['rm'])) {

	    $rm = $_POST['rm'];
	    $senha = $_POST['senha'];

	    $sql = "SELECT * FROM tb_usuario WHERE cd_rm = '".$rm."' AND ds_senha = '".$senha."'";

	    if ($res = $mysqli->query($sql)) {
	    
	        if ($res->num_rows == 1) {
	    
	            while ($linha = $res->fetch_object()) {
	    
	                $_SESSION['rm'] = $linha->cd_rm;
	                $_SESSION['senha'] = $linha->ds_senha;
	                $_SESSION['cargo'] = $linha->ds_cargo;
	    
	                if ($linha->ds_cargo == "Aluno") { 
	                    ?> <script> window.location.href = "eleitor/eleitor.php"; </script> <?php

	                } elseif ($linha->ds_cargo == "Coordenador") {
	                	?> <script> window.location.href = "admin/admin.php"; </script> <?php

	                } else {
	                	echo $result->error;

	                }
	            }
	        }
	    }
	}

?>