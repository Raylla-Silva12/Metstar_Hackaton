<?php
    session_start();
    include_once('../../conexao/conexao.php');

    if (isset($_GET['cd_chapa'])) {
        if (isset($_COOKIE['voto_cont_chapa'])) {
            $_SESSION['msg'] = "Você já votou!";
            header("Location: eleitor.php");
        } else {
            setcookie('voto_cont_chapa', $_SERVER['REMOTE_ADDR'], time() +60*60*24*30);
            $res = "UPDATE tb_gremio SET nr_voto=nr_voto + 1
            WHERE cd_gremio='".$_GET['cd_chapa']."'";

            $result = mysqli_query($mysqli, $res);

        } 
    }
?>
