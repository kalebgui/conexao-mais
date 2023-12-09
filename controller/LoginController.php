<?php

session_start();
require_once '../DAO/Tb_usuarioDAO.php';
require_once '../DTO/Tb_usuarioDTO.php';
require_once '../DAO/Tb_perfilDAO.php';
require_once '../DTO/Tb_perfilDTO.php';
require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
require_once '../DTO/Tb_prefeito_comunitarioDTO.php';

$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$Tb_usuarioDTO = new Tb_usuarioDTO();
$Tb_usuarioDTO->setLogin($email);
$Tb_usuarioDTO->setSenha($senha);

$Tb_usuarioDAO = new Tb_usuarioDAO();
$resultado = $Tb_usuarioDAO->Login($Tb_usuarioDTO);

if ($resultado) {
    $_SESSION["login"] = $resultado["login"];
    $_SESSION["descricao"] = $resultado["descricao"];
    $_SESSION["idusuario"] = $resultado["idusuario"];
    if(($_SESSION["descricao"] == 'protocolo') or ($_SESSION["descricao"] == 'Prefeito comunitario') or ($_SESSION["descricao"] == 'suporte')){
    echo "<script>";
    echo "window.location.href='../view/principal.php';";
    echo "</script>";
}elseif($_SESSION["descricao"] == 'desativado'){
    echo "<script>";
    echo "alert ('perfil excluido! Entre em contato com o suporte');";
    echo "window.location.href='../view/index.php';";
    echo "</script>";
}
} else {
    echo "<script>";
    echo "alert ('Login ou senha incorretos!');";
    echo "window.location.href='../view/index.php';";
    echo "</script>";
}


?>
