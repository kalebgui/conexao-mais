<!DOCTYPE html>
<html>
<head>
  <title>Perfil</title>
<link rel="stylesheet" href="../css/perfil.css">
</head>
<body>
    <?php
    session_start();
    require_once '../DAO/Tb_usuarioDAO.php';
    require_once '../DTO/Tb_usuarioDTO.php';
    $idusuario = $_GET["id"];

    $Tb_usuarioDTO = new Tb_usuarioDTO();
    $Tb_usuarioDTO->setIdusuario($idusuario);
    $Tb_usuarioDAO = new Tb_usuarioDAO();
    $prefeito = $Tb_usuarioDAO->pesquisarprefeitoID($Tb_usuarioDTO);

    $idprefeitura = $prefeito["idprefeitura"];
    $nome = $prefeito["nome_prefeito"];
    $tel = $prefeito["tel_prefeito"];
    $login = $prefeito["login"];

   
    ?>
<div class="container">
        <h2>Informações do Usuário</h2>

        <p><strong>Nome:</strong> <?=$nome ?></p>
        <p><strong>E-mail:</strong> <?=$login ?></p>
        <p><strong>Telefone:</strong> <?=$tel ?></p>
    
      </div>
    
</body>
</html>