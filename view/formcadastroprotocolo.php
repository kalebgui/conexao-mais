<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/registroprotocolo.css">
</head>

<body>
    <h1 style="position: absolute; left:40%; color: rgb(255, 242, 0);">Cadastro Protocolo</h1>
    <form name="cadastroprotocolo" method="post" action="../controller/cadastroprotocolocontroller.php">
        <div class="divisoria-form">
            <input type="hidden"  name="idperfil" value="1">
            <label for="nome">Nome:</label>
            <input type="text"  name="nome_protocolo" required>
            <label for="Email">E-mail:</label>
            <input type="email" id="nome" name="login" required>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" required>
            <label for="dt_nasc">Data de Nascimento:</label>
            <input type="date" name="dt_nasc" required>
            <label for="genero">Gênero:</label>
            <select name="genero" required class='genero'>
                <option value="" disabled selected>Escolha:</option>
                <option value="1">Masculino</option>
                <option value="2">Feminino</option>
                <option value="3">Outro</option>
            </select>
        </div>
        <div class="divisoria-form">
            <label for="tel_protocolo">Telefone:</label>
            <input type="text" name="tel_protocolo" required>
            <label for="endereco_protocolo">Endereço:</label>
            <input type="text" name="endereco_protocolo" required>
            <label for="SIAPE_protocolo">SIAPE:</label>
            <input type="text" name="SIAPE_protocolo" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            <input type="submit" value="Salvar Usuário">
        </div>
    </form>
</body>

</html>