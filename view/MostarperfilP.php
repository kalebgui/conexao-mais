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
    $idusuario = $_SESSION["idusuario"];

    $Tb_usuarioDTO = new Tb_usuarioDTO();
    $Tb_usuarioDTO->setIdusuario($idusuario);
    $Tb_usuarioDAO = new Tb_usuarioDAO();
    $prtocolo = $Tb_usuarioDAO->pesquisarprotocoloID($Tb_usuarioDTO);
    
    $nome = $prtocolo["nome_protocolo"];
    $tel = $prtocolo["tel_protocolo"];
    $login = $prtocolo["login"];

   
    ?>
<div class="container">

  <h2>Informações do Usuário</h2>
  
  <p><strong>Nome:</strong> <?=$nome ?></p>
  <p><strong>E-mail:</strong> <?=$login ?></p>
  <p><strong>Telefone:</strong> <?=$tel ?></p>
  
</div>

    
</body>
</html>