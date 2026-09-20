-- Conexão Mais - dados de demonstração
-- Todos os dados deste arquivo são fictícios e destinados exclusivamente
-- a testes e demonstrações acadêmicas.
-- Senha dos usuários de demonstração: Demo@12345
-- Atenção: o projeto original utiliza MD5. Em uma futura refatoração,
-- recomenda-se utilizar password_hash() e password_verify().
--
INSERT INTO `tb_perfil` (`descricao`) VALUES ('protocolo');
INSERT INTO `tb_perfil` (`descricao`) VALUES ('Prefeito comunitario');
INSERT INTO `tb_perfil` (`descricao`) VALUES ('suporte');
INSERT INTO `tb_perfil` (`descricao`) VALUES ('desativado');


INSERT INTO `tb_usuario` ( `login`, `senha`, `idperfil`) VALUES
( 'suporte.demo@example.com', 'fd4893545feccc2db59e437b0d240858', 3),
( 'joao.demo@example.com', 'fd4893545feccc2db59e437b0d240858', 2),
( 'davi.demo@example.com', 'fd4893545feccc2db59e437b0d240858', 2),
( 'ana.demo@example.com', 'fd4893545feccc2db59e437b0d240858', 2),
( 'carlos.demo@example.com', 'fd4893545feccc2db59e437b0d240858', 1);


INSERT INTO `tb_tipo_projeto` (`idtipo_projeto`, `nome_tipo`) VALUES
( 1, 'Diretoria de Obras'),
( 2, 'Gerência de Administração Geral'),
( 3, 'Gerência de Políticas Sociais'),
( 4, 'Gerência de Gestão de Território – Feiras'),
( 5, 'Gerência de Esporte e Lazer'),
( 6, 'Gerência de Apoio a Área Rural'),
( 7, 'Gerência de Cultura');

INSERT INTO `tb_tipo_regiao` (`idtipo_regiao`, `regiao`) VALUES
( 1, 'Ceilândia Sul'),
( 2, 'Ceilândia Norte'),
( 3, 'P Sul'),
( 4, 'P Norte'),
( 5, 'Setor O'),
( 6, 'Expansão do Setor O'),
( 7, 'QNQ'),
( 8, 'QNR'),
( 9, 'Setores de Indústria e de Materiais de Construção'),
( 10, 'Setor Privê');

INSERT INTO `tb_status` (`idstatus`, `tipo_status`) VALUES
( 1, 'pendente'),
( 2, 'Em análise'),
( 3, 'Deferido'),
( 4, 'Não deferido'),
( 5, 'desativo');



-- prefeito

INSERT INTO `tb_prefeito_comunitario`(`idprefeitura`, `nome_prefeito`, `cpf_prefeito`, `dt_nasc_prefeito`, `tel_prefeito`, `genero`, `endereco_prefeito`, `numero_registro_prefeito`, `data_criacao_prefeito`, `idusuario`) VALUES 
( 1 ,'João Demo','000.000.000-01','1995-07-21','(61)90000-0001', 1 ,'Quadra de exemplo 01','REG-DEMO-001',' 2023-11-29 23:00:47', 2 ),
( 2 ,'Davi Demo','000.000.000-02','2000-07-11','(61)90000-0002', 1 ,'Quadra de exemplo 02','REG-DEMO-002','2023-11-29 23:09:27', 3 ),
( 3 ,'Ana Demo','000.000.000-03','1998-05-05','(61)90000-0003', 2 ,'Quadra de exemplo 03','REG-DEMO-003','2023-11-29 23:14:40', 4 );

-- protocolo

INSERT INTO `tb_protocolo`(`idprotocolo`, `nome_protocolo`, `cpf_protocolo`, `dt_nasc_protocolo`, `genero_protocolo`, `tel_protocolo`, `endereco_protocolo`, `SIAPE_protocolo`, `data_criacao_protocolo`, `idusuario`) VALUES 
(1,'Carlos Demo','000.000.000-04','1981-08-17',1,'(61)90000-0004','Região de exemplo 01','SIAPE-DEMO-001','2023-12-02 16:28:45',5);

-- projetos

INSERT INTO `tb_projeto`(`idprojeto`, `titulo`, `arquivo`, `descricao`, `dataHora`, `idtipo_projeto`, `idprefeitura`, `idstatus`, `idtipo_regiao`) VALUES 
( 1 ,'Solicitação de Calçamento','b3e05906fdd306cb2fea51938f9b4f98.JPG','Gostaria de sugerir que fosse feito um calçamento ligando o terminal de transporte da região com a passarela que liga ao uma passarela da região. Em tempos de chuva a situação é precária.','2023-11-29 23:33:52', 1 , 1 , 1 ,5),
( 2 ,'Projeto de Judô','4058176514d9c84f251ce6bdb065a712.JPG','Gostaria de sugerir que o projeto de Judô retornasse ao estacionamento da um espaço comunitário da região. A iniciativa durou muitos anos, ajudando muito a comunidade local.','2023-11-29 23:34:32', 3 , 1 , 1 ,6),
( 3 ,'Ação de Natal','e31688cd168221063fce613d65edb380.JPG','Gostaria que fosse realizada uma Ação Social com as crianças do uma escola da região, com a presença de artistas da Ceilândia, tendo em vista o Natal.','2023-11-29 23:35:16', 7 , 1 , 1 ,2),
( 4 ,'Recapeamento de Rua','8ca71297ec6a6a078467744b8d8ec168.JPG','Gostaria que fosse realizado o recapeamento da rua ao lado da uma escola da região.','2023-11-29 23:36:44', 1 , 3 , 1 ,8),
( 5 ,'recapeamento de rua','5c1861bd1af6e14ce90122652517d640.JPG','Seria interessante recapear as ruas da Quadra 16 da Expansão do Setor “O”','2023-11-29 23:37:37', 1 , 3 , 1 ,6),
( 6 ,'confraternização de fim de ano','20f1c40013e35e6046323e1eb51ff690.JPG','Seria interessante o envio de recursos para uma confraternização de fim de ano na escola, para os estudantes.','2023-11-29 23:38:36', 7 , 3 , 1 ,6),
( 7 ,'limpeza dos canteiros','453e89cac8da2922bdd8a66a3be38d2e.JPG','Seria interessante promover limpeza dos canteiros, e verificar se o terreno possui dono. Se não, uma ideia seria promover um projeto social no lugar do lixão.','2023-11-29 23:40:07', 3 , 2 , 1 ,5),
( 8 ,'banners Vila Olímpica','db0e1aaf1728d1d1955cef5007a19eb0.JPG','Seria interessante o destino de verba para renovar os banners ao lado da um espaço esportivo comunitário.','2023-11-29 23:40:51', 5 , 2 , 1 ,5),
( 9 ,'delegacia','106d7bdfb2ec47816999e252c5530d39.JPG','Seria interessante promover um projeto social no estacionamento, ou em um espaço público da região. Exemplo: Artes marciais.','2023-11-29 23:41:41', 3 , 2 , 1 ,5),
( 10 ,'creche','30555f4682e6289a2665a5868202dafb.JPG','O terreno em frente a um equipamento público da região, caso seja público, poderia ser reaproveitado. Talvez na criação de uma creche para a comunidade local: que carece de tal atendimento.','2023-11-29 23:42:34', 3 , 2 , 1 ,5);