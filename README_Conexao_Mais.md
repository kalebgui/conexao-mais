# Conexão Mais

> Projeto acadêmico desenvolvido como Trabalho de Conclusão de Curso (TCC) durante o curso Técnico em Informática.

## Sobre o projeto

O Conexão Mais foi desenvolvido por cinco integrantes — Kaleb, Ana, Davi, Johnatan e João Victor — como projeto de Trabalho de Conclusão de Curso (TCC).

A plataforma tem como objetivo aproximar os prefeitos comunitários das administrações regionais de Brasília, facilitando a comunicação e o encaminhamento de sugestões de melhorias para suas comunidades.

Por meio do sistema, os prefeitos comunitários, que atuam como representantes dos moradores de suas regiões, podem cadastrar e enviar propostas de melhorias ao órgão administrativo responsável. Essas propostas podem ser analisadas para avaliar sua viabilidade, aprovação e possível destinação de recursos públicos.

Divisão de responsabilidades
Kaleb: desenvolvimento do back-end e auxiliar no banco de dados.
João: desenvolvimento do front-end.
Ana e Jonathan: elaboração da parte escrita do TCC.
Davi: desenvolvimento do banco de dados.

O projeto busca contribuir para uma comunicação mais organizada e acessível entre os representantes comunitários e os órgãos responsáveis pela administração regional.

O **Conexão Mais** é um sistema web desenvolvido para fins acadêmicos. O projeto apresenta funcionalidades de autenticação, gerenciamento de usuários e cadastro, consulta e atualização de projetos comunitários.

### Observação sobre o repositório

O repositório disponibilizado neste GitHub é **uma cópia do projeto original**, criada exclusivamente para fins de portfólio e apresentação técnica.

O repositório original possui aproximadamente **190 commits** e não está sendo disponibilizado publicamente, pois contém o histórico de desenvolvimento e informações relacionadas aos demais participantes do projeto, sendo considerado uma versão protegida .

Dessa forma, este repositório não representa o histórico completo de criação e desenvolvimento do **Conexão Mais**, mas apresenta uma versão do sistema para fins educacionais e profissionais.

> **Importante:** este repositório representa uma versão acadêmica do sistema e não deve ser considerado uma aplicação pronta para produção.

## Funcionalidades

- Autenticação de usuários;
- Controle de acesso por perfil;
- Gerenciamento de usuários;
- Cadastro e gerenciamento de prefeitos comunitários;
- Cadastro e gerenciamento de protocolos;
- Cadastro, consulta, alteração e exclusão de projetos;
- Atualização do status dos projetos;
- Upload e associação de imagens aos projetos;
- Consulta de regiões e tipos de projeto;
- Interface web com páginas HTML/PHP e arquivos CSS.

## Perfis de acesso

O sistema possui perfis de acesso definidos no banco de dados:

- **Protocolo**
- **Prefeito comunitário**
- **Suporte**
- **Desativado**

As permissões e páginas disponíveis dependem do perfil associado ao usuário.

## Tecnologias utilizadas

- **PHP**
- **MySQL**
- **HTML5**
- **CSS3**
- **PDO** para comunicação com o banco de dados
- **Git/GitHub** para versionamento
- **XAMPP** para execução local
- **Visual Studio Code / NetBeans** durante o desenvolvimento

## Organização do projeto

```text
.
├── DAO/             # Classes responsáveis pelo acesso aos dados
├── DTO/             # Classes utilizadas para transportar dados
├── SQL/             # Estrutura e dados de demonstração do banco
├── controller/      # Processamento das requisições e regras da aplicação
├── css/             # Folhas de estilo
├── img/             # Imagens utilizadas pelo sistema
└── view/            # Páginas e interfaces da aplicação
```

## Como executar localmente

### 1. Pré-requisitos

Instale:

- XAMPP;
- PHP compatível com o projeto;
- MySQL/MariaDB;
- Um navegador;
- Git (opcional).

### 2. Copie o projeto

Coloque a pasta do projeto dentro do diretório `htdocs` do XAMPP:

```text
C:\xampp\htdocs\
```

Exemplo:

```text
C:\xampp\htdocs\conexao-mais\
```

### 3. Inicie os serviços

No painel do XAMPP, inicie:

- Apache;
- MySQL.

### 4. Crie o banco de dados

Abra o phpMyAdmin e execute o arquivo:

```text
SQL/SQL.sql
```

Esse script cria o banco de dados `conexaomais` e suas tabelas.

Depois, execute o arquivo de dados de demonstração:

```text
SQL/inserts.sql
```

> Os dados devem ser fictícios e utilizados somente para testes locais.

### 5. Confira a conexão

A conexão com o banco está configurada em:

```text
DAO/conexao/Conexao.php
```

Revise o host, nome do banco, usuário e senha de acordo com a configuração do seu ambiente local.

### 6. Abra o sistema

No navegador, acesse o endereço correspondente à pasta do projeto. Por exemplo:

```text
http://localhost/conexao-mais/view/index.php
```

## Banco de dados

O projeto utiliza um banco de dados relacional com tabelas para:

- Usuários;
- Perfis;
- Prefeitos comunitários;
- Protocolos;
- Projetos;
- Status;
- Tipos de projeto;
- Regiões.

Os relacionamentos entre as tabelas são definidos no arquivo `SQL/SQL.sql`.

## Limitações conhecidas e melhorias futuras

Este projeto foi desenvolvido durante minha formação técnica e representa meu nível de conhecimento naquele período. Algumas partes podem ser aprimoradas em uma futura refatoração.

Possíveis melhorias:

- Substituir o uso de MD5 por `password_hash()` e `password_verify()`;
- Validar e tratar melhor os dados recebidos por formulários;
- Adicionar mensagens de erro mais claras;
- Melhorar o controle de autorização em todas as páginas e ações;
- Separar melhor as configurações do ambiente;
- Utilizar variáveis de ambiente para credenciais;
- Implementar proteção contra CSRF;
- Melhorar a validação e restrição de arquivos enviados;
- Padronizar nomes de classes, métodos e arquivos;
- Adicionar testes automatizados;
- Melhorar a responsividade e a acessibilidade da interface.

## Contexto acadêmico

Esse projeto foi minha primeira interação com qualquer tipo de linguagem de programação e foi feito sem auxilio de Inteligencia artifical. O código foi preservado em sua estrutura original para representar o processo de aprendizagem e desenvolvimento realizado durante o período do curso (2023).

## Licença

Consulte o arquivo `LICENSE` para obter informações sobre a licença do projeto.

## Autor

**Kaleb Guimares Silva, Ana, Davi, Johnatan e João Victor**
