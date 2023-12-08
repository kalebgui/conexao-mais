<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="formulario-projeto">
        <form action="../controller/projetocontroller.php" method="post" enctype="multipart/form-data" name="projeto">
        <?php
    session_start();
    require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
    require_once '../DTO/Tb_prefeito_comunitarioDTO.php';
    $idusuario = $_SESSION["idusuario"];

    $Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
    $Tb_prefeito_comunitarioDTO->setIdusuario($idusuario);
    $Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
    $prefeito = $Tb_prefeito_comunitarioDAO->pesquisarumregistro($Tb_prefeito_comunitarioDTO);
    $idprefeitura = $prefeito["idprefeitura"];
//    var_dump($idprefeitura);
   
    ?>
            <input type="hidden" name="idstatus" value="1">
            <input type="hidden" name="idprefeitura" value="<?= $idprefeitura?>">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required placeholder="Coloque seu titulo aqui"><br><br>
            <label for="arquivos">Imagem do Projeto:</label>
            <input type="file" id="arquivo" name="arquivo" multiple><br><br>

            <label for="descricao">Descrição:</label><br>
            <textarea id="descricao" name="descricao" rows="4" cols="50" required placeholder="Coloque a descrição do projeto" maxlength="255"></textarea><br><br>

            <label for="projetos">Tipo do Projeto:</label>
            <select id="projetos" name="idtipo_projeto" required>
            <option value="" disabled selected>Escolha</option>
                <option value="1">Diretoria de Obras</option>
                <option value="2">Gerência de Administração Geral</option>
                <option value="3">Gerência de Políticas Sociais</option>
                <option value="4">Gerência de Gestão de Território – Feiras</option>
                <option value="5">Gerência de Esporte e Lazer</option>
                <option value="6">Gerência de Apoio a Área Rural</option>
                <option value="7">Gerência de Cultura</option>
            </select><br><br>

            <label for="projetos">região da Ceilândia:</label>
            <select id="regiao" name="tb_tipo_regiao" required>
            <option value="" disabled selected>Escolha</option>
                <option value="1">Ceilândia Sul</option>
                <option value="2">Ceilândia Norte</option>
                <option value="3">P Sul</option>
                <option value="4">P Norte</option>
                <option value="5">Setor O</option>
                <option value="6">Expansão do Setor O</option>
                <option value="7">QNQ</option>
                <option value="8">QNR</option>
                <option value="9">Setores de Indústria e de Materiais de Construção</option>
                <option value="10">Setor Privê</option>
            </select><br><br>
        
            <input type="submit" value="Cadastrar Projeto">
        </form>
    </div>
</body>
</html>