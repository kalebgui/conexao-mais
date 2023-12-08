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
    $status = $projeto["tipo_status"];

    ?>

    <h2>Informações do Projeto</h2>
    <div class="profile-picture">
        <img src="<?=$arquivo ?>" alt="Profile Picture">
    </div>
    <p><h4><strong>Criador:</strong><?= $nome ?></h4></p>
    <p><h4><strong>Telefone do criador:</strong><?= $tel ?></h4></p>
    <p><h4><strong>Titulo:</strong><?= $titulo ?></h4></p>
    <p><h4><strong>Descição:</strong><?= $descicao ?></h4></p>
    <p><h4><strong>Status:</strong><?= $status ?></h4></p>

    <a href="../view/alterarProjetoL.php?id=<?= $idprojeto ?>" target="centro"><button class="edit-profile-button">Alterar Perfil</button></a>
    <a href="../view/confirmacaoprojeto.php?id=<?php echo $idprojeto ?>"><button class="delete-profile-button">Excluir Projeto</button></a>
    </div>

</body>

</html>