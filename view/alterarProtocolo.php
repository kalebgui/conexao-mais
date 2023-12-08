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
    require_once '../DAO/Tb_protocoloDAO.php';
    require_once '../DTO/Tb_protocoloDTO.php';
    require_once '../DAO/Tb_usuarioDAO.php';
    require_once '../DTO/Tb_usuarioDTO.php';

    $idusuario = $_GET["id"];

    $Tb_protocoloDTO = new Tb_protocoloDTO();
    $Tb_protocoloDTO->setIdusuario($idusuario);
    $Tb_protocoloDAO = new Tb_protocoloDAO();
    $protocolo = $Tb_protocoloDAO->pesquisarumregistro($Tb_protocoloDTO);
    $Tb_usuarioDTO = new Tb_usuarioDTO();
    $Tb_usuarioDTO->setIdusuario($idusuario);
    $Tb_usuarioDAO = new Tb_usuarioDAO();
    $login = $Tb_usuarioDAO->pesquisarumregistro($Tb_usuarioDTO);
    ?>
     <div class="formulario-projeto">
    <form action="../controller/alterarProtocoloController.php" method="post">
    <input type="hidden" name="idusuario" value="<?php echo $protocolo["idusuario"]?>"/>
            <input type="hidden" name="idprotocolo" value="<?php echo $protocolo["idprotocolo"]?>"/>
            <input type="hidden" name="senha" value="<?php echo $login["senha"]?>"/>
            <input type="hidden" name="idperfil" value="<?php echo $login["idperfil"]?>"/>
            <label for="Nome">Nome:</label>
                    <input type="text" value="<?php echo $protocolo["nome_protocolo"] ?>" name="nome_protocolo" size="50"/>
                
                
                    <label for="Email">E-mail:</label>
                    <input type="text" value="<?php echo $login["login"] ?>" name="login" size="50"/>
                
                
                    <label for="CPF">CPF:</label>
                    <input type="text" value="<?php echo $protocolo["cpf_protocolo"]?>" name="cpf_protocolo"/>
                                                            
                
                    <label for="dt_nasc">Data de Nascimento:</label>
                    <input type="date" value="<?php echo $protocolo["dt_nasc_protocolo"]?>" name="dt_nasc_protocolo"/>
                 
                
                    <label for="tel">Telefone:</label>
                    <input type="text" value="<?php echo $protocolo["tel_protocolo"]?>" name="tel_protocolo"/>
                                                               
                
                    <label for="Genero">Gênero:</label>
                    <select name="genero">
                        <?php
                        if ($protocolo["genero_protocolo"] == "1"){
                            echo "<option value='1'selected>Masculio</option>";
                            echo "<option value='2'>Feminino</option>";
                            echo "<option value='3'>Outro</option>";
                        }else if ($protocolo["genero_protocolo"] == "2") {
                            echo "<option value='1'>Masculio</option>";
                            echo "<option value='2'selected>Feminino</option>";
                            echo "<option value='3'>Outro</option>";
                        }else{
                            echo "<option value='1'>Masculio</option>";
                            echo "<option value='2'>Feminino</option>";
                            echo "<option value='3'selectedOutro</option>";
                        }
                        ?>
                    </select>
                    
                                                
                
                    <label for="Endereco">Endereço:</label>
                    <input type="text" value="<?php echo $protocolo["endereco_protocolo"]?>" size="60" name="endereco_protocolo"/>
                                                                
                    
                        <input type="submit" value="Salvar Alterações"/>
        </form>       
     </div>
</body>
</html>