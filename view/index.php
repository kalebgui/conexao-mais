<?php
    include_once'../view/conexao_web.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão+</title>
    <link rel="stylesheet" href="../css/logpage.css">
    <link rel="shortcut icon" href="../img/logo-sem-fundo.png" type="image/x-icon">
</head>

<body>
    <header id="navigation">
        <img src="../img/logo-sem-fundo.png" alt="" class="logo">
        <nav class="navigation">
            <a href="#">Central</a>
            <a href="#feature-exemple">Fácil de Usar</a>
            <a href="#feature-rodape">Contato</a>
            <a id="openModal" style="color: white;">Registro</a>
            
            <button class="btnlogin-popup">Entrar</button>
        
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Formulário de Registro</h2>
                    <div class="container">
                        <form action="../controller/CadastroController.php" name="cadastro" method="post" class="form-register">
                            <div class="pt-form1">
                                <input type="hidden" name="idperfil" value="2">
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control"  placeholder="Coloque seu nome Nome" name="usuario">
                                    <label for="email">E-mail:</label>
                                    <input type="text" class="form-control"  placeholder="Coloque seu E-mail" name="email">
                                    </div>
                                    <div class="form-group">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" class="form-control"  placeholder="Coloque seu CPF:" name="cpf">
                                    <label for="dt_nasc">Data de Nascimento:</label>
                                    <input type="date" class="form-control" placeholder="Coloque sua Data de Nascimento" name="dt_nasc">
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" class="form-control"  placeholder="Coloque seu Telefone:" name="telefone">
                                </div>
                                
                            </div>
                        
                            <div class="pt-form1">
                                <label for="genero">Gênero</label>
                                <div class="form-group">
                                    <span class="icon"></span>
                                    <select name="genero" required class='genero'>
                                        <option value="" disabled selected>Escolha:</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Feminino</option>
                                        <option value="3">Outro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço:</label>
                                    <input type="text" class="form-control"  placeholder="coloque seu Endereço" name="endereco">
                                    <label for="numero_prefeito">Número Registro:</label>
                                    <input type="text" class="form-control"  placeholder="Número de Registro:" name="numero_prefeito">
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <input type="password" class="form-control"  placeholder="senha:" name="senha">
                                </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Salvar Usuário</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    

    
    <section class="features" id="features">
    <div style="height: 100vh;">
        <div class="image-lp">
            <img src="../img/pessoa.webp" alt="">
        </div>
        <div class="feature">
            <h2>Integração Social</h2>
            <p>Se conecte com a Administração de Ceilândia.</p>
            <div class="recursos">
                <div>
                <p>O Sistema de Conexão Comunitária na Ceilândia, Conexão+ , possibilita a integração comunidade-governo por meio de cadastros de Projetos Sociais no sistema pelas Lideranças Sociais: os Prefeitos Comunitários. As solicitações serão analisadas pelos membros do Setor de Protocolo da Administração Regional de Ceilândia.</p> 
                <button id="openModal2">Registre-se</button>
            </div>
            
        </div>
    </div>
    
    <div class="feature-exemple" id="feature-exemple">
        <h2>Fácil de usar</h2>
        <p>Funcionalidades do Sistema.</p>
        <div class="exemple">
            <div class="card-use">
                <img src="../img/projeto.png" alt="" style="width: 450px; display:flex; flex-direction: column; border-radius: 20px; margin-bottom: 20px;">
                Tais projetos poderão ser deferidos e aplicados na realidade local, nas mais diferentes áreas, entre outras: Diretoria de Obras, Gerência de Esporte e Lazer, ou Gerência de Cultura, que são departamentos da Administração Regional Ceilandense.
                <div>
                    <hr>
                </div>
            </div>
            <div class="card-use">
                <img src="../img/tela-cadastro.png" alt="" style="width: 450px; display:flex; flex-direction: column; border-radius: 20px; margin-bottom: 20px;">
                Com o Conexão+, ao invés de se ir presencialmente à Administração de Ceilândia e preencher uma papelada - o que gera Gastos Governamentais com materiais básicos e arquivamento - o processo se torna menos moroso.
                <div class="hr-style">
                    <hr> <hr style="width: 10%;">
                </div>
            </div>
            </div>
        </div>
        


        <div class="feature-rodape" id="feature-rodape">
            <h2>Contato</h2>
            <p>Forneça informações de contato ou um formulário para os visitantes entrarem em contato.</p>
            <div class="container-rodape">
                <div class="card-use">
                    <div class="contact">
                        <a href="https://www.instagram.com/" target="_blank"><img src=" ../img/instagram.png" alt=""></a>
                        <a href="https://web.whatsapp.com/%F0%9F%8C%90/pt-br" target="_blank"><img src=" ../img/whatsapp.png" alt=""></a>
                        <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoicHQifQ%3D%3D%22%7D" target="_blank"><img src=" ../img/twitter.png" alt=""></a>
                        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=GTvVlcSHvbKwGtGQrQSxjHKDPfhqhFfqNhSzVfNsKZKXvTbggKSSbccnRNlpwmGSkXVHMhhBRgxvW" target="_blank"><img src=" ../img/o-email.png" alt=""></a>
                    </div>
                    <hr>
                    <div class="link">
                        <p>Sistema feito pela Equipe Conexão+</p>
                        <p>Número de contato: <a style="color: #fff; text-decoration: none;">61-99999-9999</a></p>
                        <p>Todos os Direitos Reservados</p>
                        <p>2023 &#169;</p>
                    </div> <br>
            
                </div>
            </div>
        </div>
    </section>
    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline">&times;</ion-icon>
        </span>
    
        <div class="form-box login">
            <h2>Login</h2>
            <form action="../controller/LoginController.php" method="post" name="login">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="email" id="email" required>
                    <label for="">E-mail</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="senha" id="senha" required>
                    <label for="">Senha</label>
                </div>
                <div class="remember-forgot">
                    <a href="EsqueceuSenha.php" >Esqueceu Senha ou Login?</a>
                </div>
                <button type="submit" class="btn">Entrar</button>
            </div>
        </form>
    </div>


    <script src="../view/js/script.js"></script>
</body>

</html>
