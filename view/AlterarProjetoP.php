<!DOCTYPE html>
<html>

<head>
    <title>Projeto</title>
    <link rel="stylesheet" href="../css/perfil.css">
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

    $nome = $projeto["nome_prefeito"];
    $tel = $projeto["tel_prefeito"];
    $arquivo = "../img/upload/" . $projeto["arquivo"];
    $titulo = $projeto["titulo"];
    $descicao = $projeto["descricao"];
    $idtipo_projeto = $projeto["idtipo_projeto"];
    $idtipo_regiao= $projeto["idtipo_regiao"];
    $status = $projeto["tipo_status"];
    
    ?>
<div class="container">
    <h2>Informações do Projeto</h2>
    <div class="profile-picture">
        <img src="<?= $arquivo ?>" alt="Profile Picture">
    </div>
    <p>
        <h4><strong>Criador:</strong><?= $nome ?></h4>
    </p>
    <p>
        <h4><strong>Telefone do criador:</strong><?= $tel ?></h4>
    </p>
    <p>
        <h4><strong>Titulo:</strong><?= $titulo ?></h4>
    </p>
    <p>
        <h4><strong>Descição:</strong><?= $descicao ?></h4>
        <form name="alterarProjetoP" method="post" action="../controller/alterarProjetoPcontroller.php">
        </p> 
        <input type="hidden" name="idprojeto" value="<?=$idprojeto?>">

        <p>
            <h4><strong>Status:</strong><select name="idstatus">
            <?php
                if ($projeto["idstatus"] == "1") {
                    echo "<option value='1'selected>pendente</option>";
                    echo "<option value='2'>Em análise</option>";
                    echo "<option value='3'>Deferido</option>";
                    echo "<option value='4'>Não deferido</option>";
                } else if ($projeto["idstatus"] == "2") {
                    echo "<option value='1'>pendente</option>";
                    echo "<option value='2'selected>Em análise</option>";
                    echo "<option value='3'>Deferido</option>";
                    echo "<option value='4'>Não deferido</option>";
                } else if ($projeto["idstatus"] == "3") {
                    echo "<option value='1'>pendente</option>";
                    echo "<option value='2'>Em análise</option>";
                    echo "<option value='3'selected>Deferido</option>";
                    echo "<option value='4'>Não deferido</option>";
                } else {
                    echo "<option value='1'>pendente</option>";
                    echo "<option value='2'>Em análise</option>";
                    echo "<option value='3'>Deferido</option>";
                    echo "<option value='4'selected>Não deferido</option>";
                }
                ?>
                </select>
                </h4>
        </p>
        
        <input type="submit" value="Alterar Status" class="edit-profile-button">
    </form>
    </div>
</body>

</html>