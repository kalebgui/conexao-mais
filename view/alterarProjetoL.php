<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body> 
    <?php
    session_start();
    require_once '../DAO/Tb_projetoDAO.php';
    require_once '../DTO/Tb_projetoDTO.php';
    
    $idprojeto = $_GET["id"];
    
    $Tb_projetoDTO = new Tb_projetoDTO();
    $Tb_projetoDTO->setIdprojeto($idprojeto);
    $Tb_projetoDAO = new Tb_projetoDAO();
    $projeto = $Tb_projetoDAO->pesquisarumregistro($Tb_projetoDTO);
    ?>

<div class="formulario-projeto">
        <form action="../controller/alterarProjetoLController.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idprojeto" value="<?=$idprojeto?>"/>
            <input type="hidden" name="idstatus" value="<?php echo $projeto["idstatus"]?>"/>
            
            <label for="arquivos">Imagem do Projeto:</label>
                    <img src="../img/upload/<?= $projeto["arquivo"] ?>" style="  width: 150px; height: 150px; border-radius: 50%; object-fit: cover;" class="profile-picture">
                    <br>
                    Deseja alterar a imagem?
                    Sim<input type="radio" name="opc" value="1">
                    Não<input type="radio" name="opc" value="2" checked>
                    <br>
                    <input type="file" value="<?php echo $projeto["arquivo"] ?>" name="arquivo" size="50" multiple/>
              
                    <label for="titulo">Título:</label>
                    <input type="text" value="<?php echo $projeto["titulo"] ?>" name="titulo" size="50"/>
                    <label for="descricao">Descrição:</label><br>
                    <textarea  name="descricao" rows="4" cols="50"  maxlength="255" ><?php echo $projeto["descricao"]?></textarea>                                           
                    <label for="projetos">Tipo do Projeto:</label>
                        <select name="idtipo_projeto">
                    <?php
                        if ($projeto["idtipo_projeto"] == "1"){
                            echo "<option value='1'selected>Diretoria de Obras</option>";
                            echo "<option value='2'>Gerência de Administração Geral</option>";
                            echo "<option value='3'>Gerência de Políticas Sociais</option>";
                            echo "<option value='4'>Gerência de Gestão de Território – Feiras</option>";
                            echo "<option value='5'>Gerência de Esporte e Lazer</option>";
                            echo "<option value='6'>Gerência de Apoio a Área Rural</option>";
                            echo "<option value='7'>Gerência de Cultura</option>";
                        }else if ($projeto["idtipo_projeto"] == "2") {
                            echo "<option value='1'>Diretoria de Obras</option>";
                            echo "<option value='2' selected>Gerência de Administração Geral</option>";
                            echo "<option value='3'>Gerência de Políticas Sociais</option>";
                            echo "<option value='4'>Gerência de Gestão de Território – Feiras</option>";
                            echo "<option value='5'>Gerência de Esporte e Lazer</option>";
                            echo "<option value='6'>Gerência de Apoio a Área Rural</option>";
                            echo "<option value='7'>Gerência de Cultura</option>";
                        }else if ($projeto["idtipo_projeto"] == "3") {
                            echo "<option value='1'>Diretoria de Obras</option>";
                            echo "<option value='2'>Gerência de Administração Geral</option>";
                            echo "<option value='3' selected>Gerência de Políticas Sociais</option>";
                            echo "<option value='4'>Gerência de Gestão de Território – Feiras</option>";
                            echo "<option value='5'>Gerência de Esporte e Lazer</option>";
                            echo "<option value='6'>Gerência de Apoio a Área Rural</option>";
                            echo "<option value='7'>Gerência de Cultura</option>";
                        }else if ($projeto["idtipo_projeto"] == "4") {
                            echo "<option value='1'>Diretoria de Obras</option>";
                            echo "<option value='2'>Gerência de Administração Geral</option>";
                            echo "<option value='3'>Gerência de Políticas Sociais</option>";
                            echo "<option value='4' selected >Gerência de Gestão de Território – Feiras</option>";
                            echo "<option value='5'>Gerência de Esporte e Lazer</option>";
                            echo "<option value='6'>Gerência de Apoio a Área Rural</option>";
                            echo "<option value='7'>Gerência de Cultura</option>";
                        }else if ($projeto["idtipo_projeto"] == "5") {
                            echo "<option value='1'>Diretoria de Obras</option>";
                            echo "<option value='2'>Gerência de Administração Geral</option>";
                            echo "<option value='3'>Gerência de Políticas Sociais</option>";
                            echo "<option value='4'>Gerência de Gestão de Território – Feiras</option>";
                            echo "<option value='5' selected >Gerência de Esporte e Lazer</option>";
                            echo "<option value='6'>Gerência de Apoio a Área Rural</option>";
                            echo "<option value='7'>Gerência de Cultura</option>";
                        }else if ($projeto["idtipo_projeto"] == "6") {
                            echo "<option value='1'>Diretoria de Obras</option>";
                            echo "<option value='2'>Gerência de Administração Geral</option>";
                            echo "<option value='3'>Gerência de Políticas Sociais</option>";
                            echo "<option value='4'>Gerência de Gestão de Território – Feiras</option>";
                            echo "<option value='5'>Gerência de Esporte e Lazer</option>";
                            echo "<option value='6'selected >Gerência de Apoio a Área Rural</option>";
                            echo "<option value='7'>Gerência de Cultura</option>";
                        }else{
                            echo "<option value='1'>Diretoria de Obras</option>";
                            echo "<option value='2'>Gerência de Administração Geral</option>";
                            echo "<option value='3'>Gerência de Políticas Sociais</option>";
                            echo "<option value='4'>Gerência de Gestão de Território – Feiras</option>";
                            echo "<option value='5'>Gerência de Esporte e Lazer</option>";
                            echo "<option value='6'>Gerência de Apoio a Área Rural</option>";
                            echo "<option value='7'selected>Gerência de Cultura</option>";
                        }
                        ?>
                        </select>
                  <label for="projetos">região da Ceilândia:</label>
                    
                        <select name="idtipo_regiao">
                    <?php
                        if ($projeto["idtipo_regiao"] == "1"){
                            echo "<option value='1'selected>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else if ($projeto["idtipo_regiao"] == "2") {
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'selected>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else if ($projeto["idtipo_regiao"] == "3") {
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'selected>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else if ($projeto["idtipo_regiao"] == "4") {
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'selected>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else if ($projeto["idtipo_regiao"] == "5") {
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'selected>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else if ($projeto["idtipo_regiao"] == "6") {
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'selected>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else if ($projeto["idtipo_regiao"] == "7") {
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'selected>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else if ($projeto["idtipo_regiao"] == "8") {
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'selected>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else if ($projeto["idtipo_regiao"] == "9") {
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'selected>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'>Setor Privê</option>";
                        }else{
                            echo "<option value='1'>Ceilândia Sul</option>";
                            echo "<option value='2'>Ceilândia Norte</option>";
                            echo "<option value='3'>P Sul</option>";
                            echo "<option value='4'>P Norte</option>";
                            echo "<option value='5'>Setor O</option>";
                            echo "<option value='6'>Expansão do Setor O</option>";
                            echo "<option value='7'>QNQ</option>";
                            echo "<option value='8'>QNR</option>";
                            echo "<option value='9'>Setores de Indústria e de Materiais de Construção</option>";
                            echo "<option value='10'selected>Setor Privê</option>";
                        }
                        ?>
                        </select>
                        <input type="submit" value="Salvar Alterações"/>
            </div>  
        </form>       
</body>
</html>