<?php

require_once '../DAO/Tb_projetoDAO.php';
require_once '../DTO/Tb_projetoDTO.php';

$opc = $_POST["opc"];
if ($opc == 1) {
    include './controllerArquivo.php'; //Para cadastrar no diretorio
    $idprojeto = $_POST["idprojeto"];
    $titulo = $_POST["titulo"];
    $arquivo = $nome_final;
    $descricao = $_POST["descricao"];
    $idtipo_projeto = $_POST["idtipo_projeto"];
    $idtipo_regiao = $_POST["idtipo_regiao"];
    $idstatus = $_POST["idstatus"];
//var_dump($_POST);die;

    $Tb_projetoDTO = new Tb_projetoDTO();
    $Tb_projetoDTO->setIdprojeto($idprojeto);
    $Tb_projetoDTO->setTitulo($titulo);
    $Tb_projetoDTO->setArquivo($arquivo);
    $Tb_projetoDTO->setDescricao($descricao);
    $Tb_projetoDTO->setIdtipo_projeto($idtipo_projeto);
    $Tb_projetoDTO->setIdtipo_regiao($idtipo_regiao);
    $Tb_projetoDTO->setIdstatus($idstatus);

    $Tb_projetoDAO = new Tb_projetoDAO();
    $resultado = $Tb_projetoDAO->AlterarComImagem($Tb_projetoDTO);
} else {
    $idprojeto = $_POST["idprojeto"];
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $idtipo_projeto = $_POST["idtipo_projeto"];
    $idtipo_regiao = $_POST["idtipo_regiao"];
    $idstatus = $_POST["idstatus"];
//var_dump($_POST);die;

    $Tb_projetoDTO = new Tb_projetoDTO();
    $Tb_projetoDTO->setIdprojeto($idprojeto);
    $Tb_projetoDTO->setTitulo($titulo);
    $Tb_projetoDTO->setDescricao($descricao);
    $Tb_projetoDTO->setIdtipo_projeto($idtipo_projeto);
    $Tb_projetoDTO->setIdtipo_regiao($idtipo_regiao);
    $Tb_projetoDTO->setIdstatus($idstatus);

    $Tb_projetoDAO = new Tb_projetoDAO();
    $resultado = $Tb_projetoDAO->AlterarSemImagem($Tb_projetoDTO);
}


if ($resultado) {

    echo "<script>";
    echo "alert ('Alteração bem-sucedida!');";
    echo "window.location.href = '../view/centro.php';";
    echo "</script> ";
}
?>