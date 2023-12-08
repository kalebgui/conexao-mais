<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
        // Listar Todos os  USUÁRIOS 
        require_once '../DAO/Tb_usuarioDAO.php'; 
        $Tb_usuarioDAO = new Tb_usuarioDAO();
        $Tb_usuarioDAO = $Tb_usuarioDAO->pesquisarprefeito();
        ?>
 <main>
 <div class="card bg-dark text-white font-weight-bold text-center">
                <div class="card-body">Lista de Usuários</div>
            </div>
        <table>
            <tr>
                <th>Função</th>
                <th>Nome</th>
                <th>Quadra</th>
            </tr>
            <?php
                    foreach ($Tb_usuarioDAO as $c ) {
                        $nome_prefeito = $c["nome_prefeito"];
                        $endereco_prefeito = $c["endereco_prefeito"];
                        $descricao = $c["descricao"]
                        ?>
                        <tr>
                            <td><?php echo $descricao; ?></td>
                            <td><?php echo $nome_prefeito; ?></td>
                            <td ><?php echo $endereco_prefeito; ?></td>
                            
                        </tr>
                    <?php }
                    ?>
            <!-- Adicione mais linhas para mais usuários, ou gere dinamicamente a partir de um banco de dados -->
        </table>
    </main>
</body>
</html>