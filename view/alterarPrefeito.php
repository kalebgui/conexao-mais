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
    require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
    require_once '../DTO/Tb_prefeito_comunitarioDTO.php';
    require_once '../DAO/Tb_usuarioDAO.php';
    require_once '../DTO/Tb_usuarioDTO.php';

    $idusuario = $_SESSION["idusuario"];

    $Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
    $Tb_prefeito_comunitarioDTO->setIdusuario($idusuario);
    $Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
    $prefeito = $Tb_prefeito_comunitarioDAO->pesquisarumregistro($Tb_prefeito_comunitarioDTO);
    $Tb_usuarioDTO = new Tb_usuarioDTO();
    $Tb_usuarioDTO->setIdusuario($idusuario);
    $Tb_usuarioDAO = new Tb_usuarioDAO();
    $login = $Tb_usuarioDAO->pesquisarumregistro($Tb_usuarioDTO);
    ?>
    <div class="formulario-projeto">
    <form action="../controller/alterarPrefeitoController.php" method="post">
            <input type="hidden" name="idusuario" value="<?php echo $prefeito["idusuario"]?>"/>
            <input type="hidden" name="idprefeitura" value="<?php echo $prefeito["idprefeitura"]?>"/>
            <input type="hidden" name="senha" value="<?php echo $login["senha"]?>"/>
            <input type="hidden" name="idperfil" value="<?php echo $login["idperfil"]?>"/>
                   <label for="Nome">Nome:</label>
                    <input type="text" value="<?php echo $prefeito["nome_prefeito"] ?>" name="nome_prefeito" size="50"/>
                
                
                    <label for="Email">E-mail:</label>
                    <input type="text" value="<?php echo $login["login"] ?>" name="login" size="50"/>
                
                
                    <label for="CPF">CPF:</label>
                    <input type="text" value="<?php echo $prefeito["cpf_prefeito"]?>" name="cpf_prefeito"/>
                                                            
                
                    <label for="dt_nasc">Data de Nascimento:</label>
                    <input type="date" value="<?php echo $prefeito["dt_nasc_prefeito"]?>" name="dt_nasc_prefeito"/>
                 
                
                    <label for="tel">Telefone:</label>
                    <input type="text" value="<?php echo $prefeito["tel_prefeito"]?>" name="tel_prefeito"/>
                                                               
                
                    <label for="Genero">Gênero:</label>
                    <select name="genero">
                        <?php
                        if ($prefeito["genero"] == "1"){
                            echo "<option value='1'selected>Masculio</option>";
                            echo "<option value='2'>Feminino</option>";
                            echo "<option value='3'>Outro</option>";
                        }else if ($prefeito["genero"] == "2") {
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
                    <input type="text" value="<?php echo $prefeito["endereco_prefeito"]?>" size="60" name="endereco_prefeito"/>
                                                                
                    
                        <input type="submit" value="Salvar Alterações"/>
                    
        </form>       
        </div>
</body>
</html>