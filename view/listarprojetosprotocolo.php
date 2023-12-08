<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/styleC.css">
</head>
<body>

  
  <br>
  <div class="swiper-container">
    <div class="swiper mySwiper">
      <H1 class="Titulo">Projetos em análise</H1>
      <div class="swiper-wrapper">
        <?php
        session_start();
            require_once '../DAO/Tb_projetoDAO.php';
            require_once '../DTO/Tb_projetoDTO.php';
            require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
            require_once '../DTO/Tb_prefeito_comunitarioDTO.php';
            $idusuario = $_SESSION["idusuario"];
            $Tb_projetoDAO = new Tb_projetoDAO();
            $Tb_projetoDAO = $Tb_projetoDAO->pesquisar();

            $Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
            $Tb_prefeito_comunitarioDTO->setIdusuario($idusuario);
            $Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
            $prefeitura = $Tb_prefeito_comunitarioDAO->pesquisarumregistro($Tb_prefeito_comunitarioDTO);

            // var_dump($idusuario);


            foreach ($Tb_projetoDAO as $p) {
              $idprojeto = $p["idprojeto"];
              $arquivo = "../img/upload/" . $p["arquivo"];
              $titulo = $p["titulo"];
              $descicao = $p["descricao"];
              $status = $p["idstatus"];
              $id = $idusuario;
              
              if (($status == 2) and ($id)) {
            ?>
                  <div class="swiper-slide">
                    <a href="../view/AlterarProjetoP.php?id=<?=$idprojeto?>" class="link">
                      <div class="card">
                        <div class="image">
                          <img src="<?= $arquivo ?>" alt="Card Image">
                        </div>
                        <h3><?= $titulo ?></h3>
                        <p><?= $descicao ?></p>
                      </div>
                    </a>
                  </div>
                <?php
                }
            }
            ?>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
  <br>
  <div class="swiper-container">
    <div class="swiper mySwiper">
      <H1 class="Titulo">Projetos Deferidos</H1>
      <div class="swiper-wrapper">
        <?php
            require_once '../DAO/Tb_projetoDAO.php';
            require_once '../DTO/Tb_projetoDTO.php';
            require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
            require_once '../DTO/Tb_prefeito_comunitarioDTO.php';
            $idusuario = $_SESSION["idusuario"];
            $Tb_projetoDAO = new Tb_projetoDAO();
            $Tb_projetoDAO = $Tb_projetoDAO->pesquisar();

            $Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
            $Tb_prefeito_comunitarioDTO->setIdusuario($idusuario);
            $Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
            $prefeitura = $Tb_prefeito_comunitarioDAO->pesquisarumregistro($Tb_prefeito_comunitarioDTO);

            // var_dump($idusuario);


            foreach ($Tb_projetoDAO as $p) {
              $idprojeto = $p["idprojeto"];
              $arquivo = "../img/upload/" . $p["arquivo"];
              $titulo = $p["titulo"];
              $descicao = $p["descricao"];
              $status = $p["idstatus"];
              $id = $idusuario;
              
              if (($status == 3) and ($id)) {
            ?>
                  <div class="swiper-slide">
                    <a href="../view/AlterarProjetoP.php?id=<?=$idprojeto?>" class="link">
                      <div class="card">
                        <div class="image">
                          <img src="<?= $arquivo ?>" alt="Card Image">
                        </div>
                        <h3><?= $titulo ?></h3>
                        <p><?= $descicao ?></p>
                      </div>
                    </a>
                  </div>
                <?php
                }
            }
            ?>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>
  
  <br>
  <div class="swiper-container">
    <div class="swiper mySwiper">
      <H1 class="Titulo">Projetos não deferidos</H1>
      <div class="swiper-wrapper">
        <?php

            require_once '../DAO/Tb_projetoDAO.php';
            require_once '../DTO/Tb_projetoDTO.php';
            require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
            require_once '../DTO/Tb_prefeito_comunitarioDTO.php';
            $idusuario = $_SESSION["idusuario"];
            $Tb_projetoDAO = new Tb_projetoDAO();
            $Tb_projetoDAO = $Tb_projetoDAO->pesquisar();

            $Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
            $Tb_prefeito_comunitarioDTO->setIdusuario($idusuario);
            $Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
            $prefeitura = $Tb_prefeito_comunitarioDAO->pesquisarumregistro($Tb_prefeito_comunitarioDTO);

            // var_dump($idusuario);


            foreach ($Tb_projetoDAO as $p) {
              $idprojeto = $p["idprojeto"];
              $arquivo = "../img/upload/" . $p["arquivo"];
              $titulo = $p["titulo"];
              $descicao = $p["descricao"];
              $status = $p["idstatus"];
              $id = $idusuario;
              
              if (($status == 4) and ($id)) {
            ?>
                  <div class="swiper-slide">
                    <a href="../view/AlterarProjetoP.php?id=<?=$idprojeto?>" class="link">
                      <div class="card">
                        <div class="image">
                          <img src="<?= $arquivo ?>" alt="Card Image">
                        </div>
                        <h3><?= $titulo ?></h3>
                        <p><?= $descicao ?></p>
                      </div>
                    </a>
                  </div>
                <?php
                }
            }
            ?>
      </div>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="../view/js/scriptC.js"></script>
</body>
</html>