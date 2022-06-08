<?php
include('../../conexao/conexao.php');

if (isset($_POST['deletesend'])) {
    $unique = $_POST['deletesend'];

    $sql = "DELETE FROM tb_gremio WHERE cd_gremio=$unique";
    $result = mysqli_query($mysqli, $sql);
}

?>