<?php
    session_start();
    include_once('../../conexao/conexao.php');

    if (isset($_GET['cd'])) {
        if (isset($_COOKIE['voto_cont'])) {
            $_SESSION['msg'] = "Você já votou!";
            header("Location: eleitor.php");
        } else {
            setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time() +60*60*24*30);
            $res = "UPDATE tb_candidato SET nr_voto=nr_voto + 1
            WHERE cd_candidato='".$_GET['cd']."'";

            $result = mysqli_query($mysqli, $res);

            if (mysqli_affected_rows($mysqli)) {
                $_SESSION['msg'] = "Voto ok";
                header("Location: eleitor.php");
            } else {
                $_SESSION['msg'] = "Erro!";
                header("Location: eleitor.php");
            }
        } 
    }
?>
