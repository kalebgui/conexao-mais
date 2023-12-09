<!DOCTYPE html>
<html>
<head>
  <title>Confirmação de Exclusão</title>
  <style>
    body {
      background-image: url(../img/WhatsApp-Image-2021-03-27-at-10.47.21.jpeg);
    background-size: cover;
    background-position: center;
    color: #fff;
    font-family: Arial, sans-serif;
    font-size: 16px;
    margin: 0 20px;
    padding: 0;
    height: 100vh;
    }
    .alert {
      width: 400px;
      margin: 0 auto;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }
    .alert h2 {
      margin-top: 0;
      font-size: 24px;
      color: #333;
    }
    .alert p {
      font-size: 16px;
      color: #666;
      margin-bottom: 20px;
    }
    .alert button {
      background-color: #333;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
    .alert button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <?php
  $usuario = $_GET["usuario"];
  $idprefeitura = $_GET["id"];
  ?>
  <div class="alert">
    <h2>Exclusão de Dados</h2>
    <p>Tem certeza que deseja excluir esses dados permanentemente?</p>
    <form method="post" action="../controller/desativarcontroller.php?id=<?php echo $idprefeitura?>">
    <input name="usuario" value="<?=$usuario?>" type="hidden">
    <input name="idperfil" value="4" type="hidden">
    <input name="idstatus" value="5" type="hidden">
      <button type="submit" name="confirm">Sim, excluir</button>
      <button type="button" onclick="window.location.href='../view/perfillider.php'">Cancelar</button>
    </form>
  </div>
</body>
</html>
