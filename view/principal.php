<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" height=device-height, viewport-fit=cover”>
    <link rel="stylesheet" href="../css/styleHome2.css">
    <script src="js/scriptHome.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>home</title>
</head>

<body>
    <?php
    session_start();
    ?>
    <table width="100%">
        <tr>
            <td>
                <?php
                include './validaLogin.php';
                switch ($_SESSION["descricao"]) {
                    case "Prefeito comunitario":
                        ?>

                        <header>
                            <nav class="navigation">
                            <a href="centro.php" target="centro"><img src="../img/logo-sem-fundo.png" alt="" class="logo"></a>
                                <a href="../view/formProject.php" target="centro"><button class="btnlogin-popup">Registrar
                                        Projeto</button></a>
                                <a href="../view/formMostarLider.php" target="centro"
                                    style='text-decoration: none; color:black;' class="link-nav">Prefeitos</a>
                                <a href="../view/listarprojetosL.php" target="centro" style='text-decoration: none; color:black;'
                                    class="link-nav">Meus Projetos</a>
                                    <a href="../view/perfillider.php" target="centro" style='text-decoration: none; color:black;'
                                    class="link-nav">Perfil</a>
                                    <a href="centro.php" target="centro" style='text-decoration: none; color:black;'
                                    class="link-nav">Home</a>
                                <a href="../controller/logoffController.php" style='text-decoration: none; color:black;'
                                    class="link-nav">Sair</a>
                            </nav>
                        </header>
 
                        <?php
                        break;
                    case "suporte":
                        ?>
                       

                        <header>
                            <nav class="navigation">
                            <a href="centro.php" target="centro"><img src="../img/logo-sem-fundo.png" alt="" class="logo"></a>
                                <a href="../view/formcadastroprotocolo.php" target="centro"><button class="btnlogin-popup">Cadastrar protocolo</button></a>
                                <a href="../view/listarusuarios.php" target="centro"
                                    style='text-decoration: none; color:black;' class="link-nav">Usuarios</a>
                                <a href="../view/perfilsup.php" target="centro" style='text-decoration: none; color:black;'
                                class="link-nav">Perfil</a>
                                <a href="../controller/logoffController.php" style='text-decoration: none; color:black;'
                                    class="link-nav">Sair</a>
                            </nav>
                        </header>


                        <?php
                        break;
                    case "protocolo":
                        ?>
                        
                        <header>
                            <nav class="navigation">
                            <a href="centro.php" target="centro"><img src="../img/logo-sem-fundo.png" alt="" class="logo"></a>
                                <a href="../view/listarprojetosprotocolo.php" target="centro"><button
                                        class="btnlogin-popup">Pedidos</button></a>
                                <a href="../view/listarusuarios.php" target="centro" style='text-decoration: none; color:black;'
                                    class="link-nav">Usuários</a>
                                    <a href="../view/perfil.php" target="centro" style='text-decoration: none; color:black;'
                                    class="link-nav">Perfil</a>
                                    <a href="centro.php" target="centro" style='text-decoration: none; color:black;'
                                    class="link-nav">Home</a>
                                <a href="../controller/logoffController.php" style='text-decoration: none; color:black;'
                                    class="link-nav">Sair</a>
                            </nav>
                        </header>
                        <?php
                        break;
                }
                ?>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <iframe name="centro" src="../view/centro.php" style=" width: 100vw; height: 92vh;"  frameborder="0"id="centro"></iframe>
            </td>
        </tr>
    </table>
</body>

</html>