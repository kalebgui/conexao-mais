<?php
include './controllerArquivo.php'; //Para cadastrar no diretorio
require_once '../DAO/Tb_projetoDAO.php';
require_once '../DTO/Tb_projetoDTO.php';
$arquivo = $nome_final; //Pra cadasatrar bo BD
$idstatus = $_POST["idstatus"];
$idprefeitura = $_POST["idprefeitura"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$idtipo_projeto = $_POST["idtipo_projeto"];
$tb_tipo_regiao = $_POST["tb_tipo_regiao"];

//var_dump($_POST);die;

$Tb_projetoDTO = new Tb_projetoDTO();
$Tb_projetoDTO->setTitulo($titulo);
$Tb_projetoDTO->setArquivo($arquivo);
$Tb_projetoDTO->setDescricao($descricao);
$Tb_projetoDTO->setIdtipo_projeto($idtipo_projeto);
$Tb_projetoDTO->setIdtipo_regiao($tb_tipo_regiao);
$Tb_projetoDTO->setIdstatus($idstatus);
$Tb_projetoDTO->setIdprefeitura($idprefeitura);


$Tb_projetoDAO = new Tb_projetoDAO();
$resultado = $Tb_projetoDAO->Gravar($Tb_projetoDTO);

if ($resultado){
    echo "<script>";
    echo "alert('Projeto cadastrado com sucesso!');";
    echo "window.location.href = '../view/formProject.php';";
    echo "</script> ";
 }
?>