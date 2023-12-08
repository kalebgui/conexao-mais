<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listar.css">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    switch ($_SESSION["descricao"]) {
        case "protocolo":
        // Listar Todos os  USUÁRIOS
        require_once '../DAO/Tb_usuarioDAO.php'; 
        require_once '../DAO/Tb_prefeito_comunitarioDAO.php'; 

        $prefeito = new Tb_usuarioDAO();
        $prefeito = $prefeito->pesquisarprefeito();
        $protocolo = new Tb_usuarioDAO();
        $protocolo = $protocolo->pesquisarprotocolo();

        ?>
 <main>
        <div class="container">
            <div class="imagem">

            </div>
            <table>
                <tr>
                    <th>Função</th>
                    <th>Nome</th>
                    <th>Dados</th>
                </tr>
                <?php
                        foreach ($protocolo as $p) {
                            $idusuario = $p["idusuario"];
                            $nome_protocolo = $p["nome_protocolo"];
                            $descricao = $p["descricao"];
                            ?>
                            <tr class="row-table">
                                <td><?php echo $descricao; ?></td>
                                <td><?php echo $nome_protocolo; ?></td>
                                <td class="text-center">
                                    <a href="MostarperfilP.php?id=<?php echo $idusuario?>">
                                    Mostar Informações
                                    </a>
                                </td>
                                
                            </tr>
                        <?php }
                        ?>
                        <?php
                        foreach ($prefeito as $pc) {
                        $idusuario = $pc["idusuario"];
                        $nome_prefeito = $pc["nome_prefeito"];
                        $descricao = $pc["descricao"];
                        ?>
                        <tr>
                            <td><?php echo $descricao; ?></td>
                            <td><?php echo $nome_prefeito; ?></td>
                            <td class="text-center">
                                <a href="MostarperfilL.php?id=<?php echo $idusuario?>">
                                Mostar Informações
                                </a>
                            </td>
                            
                        </tr>
                        <?php
                        }
                        ?>
            </table>
        </div>
    </main>
    <?php
    break;
         case "suporte":
    
    // Listar Todos os  USUÁRIOS
        require_once '../DAO/Tb_usuarioDAO.php'; 
        require_once '../DAO/Tb_prefeito_comunitarioDAO.php'; 

        $prefeito = new Tb_usuarioDAO();
        $prefeito = $prefeito->pesquisarprefeito();
        $protocolo = new Tb_usuarioDAO();
        $protocolo = $protocolo->pesquisarprotocolo();

        ?>
 <main>
        <div class="container">
            <table>
                <tr>
                    <th>Função</th>
                    <th>Nome</th>
                    <th>Dados</th>
                    <th>Excluir</th>
                </tr>
                <?php
                        foreach ($protocolo as $p) {
                            $idusuario = $p["idusuario"];
                            $nome_protocolo = $p["nome_protocolo"];
                            $descricao = $p["descricao"];
                            ?>
                            <tr class="row-table">
                                <td><?php echo $descricao; ?></td>
                                <td><?php echo $nome_protocolo; ?></td>
                                <td class="text-center">
                                    <a href="../view/alterarProtocolo.php?id=<?php echo $idusuario?>">
                                        Alterar informações
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="../view/confirmacaoprotocolo.php?id=<?php echo $idusuario?>">
                                        Excluir Usuário
                                    </a>
                                </td>
                                
                            </tr>
                            <?php
                        }
                            ?>
                            <?php
                            foreach ($prefeito as $pc) {
                            $idprefeitura = $pc["idprefeitura"];
                            $idusuario = $pc["idusuario"];
                            $nome_prefeito = $pc["nome_prefeito"];
                            $descricao = $pc["descricao"];
                            ?>
                            <tr>
                                <td><?php echo $descricao; ?></td>
                                <td><?php echo $nome_prefeito; ?></td>
                                <td class="text-center">
                                    <a href="../view/MostarperfilL.php?id=<?php echo $idusuario?>">
                                        Mostar Informações
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a href="../view/confirmacaoS.php?id=<?php echo $idprefeitura?>&usuario=<?=$idusuario?>">
                                        Excluir Usuário
                                    </a>
                                </td>
                                
                            </tr>
                            <?php
                            }
                            ?>
                <!-- Adicione mais linhas para mais usuários, ou gere dinamicamente a partir de um banco de dados -->
            </table>
        </div>
    </main>
    <?php
    break;
    }
    ?>
</body>
</html>