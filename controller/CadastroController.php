<?php

require_once '../DAO/Tb_prefeito_comunitarioDAO.php';
require_once '../DTO/Tb_prefeito_comunitarioDTO.php';

require_once '../DAO/Tb_usuarioDAO.php';
require_once '../DTO/Tb_usuarioDTO.php';

$dt_nasc = $_POST["dt_nasc"];

$numero = intval($dt_nasc);

$data_atual = date("Y");
$numero2 = intval($data_atual);

      $idade = $numero2 - $numero;

if($idade >= 18){

$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);
$cpf = $_POST["cpf"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$genero = $_POST["genero"];
$numero_prefeito = $_POST["numero_prefeito"];
$idperfil = $_POST["idperfil"];

    $Tb_usuarioDTO = new Tb_usuarioDTO();
    $Tb_usuarioDTO->setLogin($email);
    $Tb_usuarioDTO->setSenha($senha);
    $Tb_usuarioDTO->setIdperfil($idperfil);

    $Tb_usuarioDAO = new Tb_usuarioDAO();
    $resultado = $Tb_usuarioDAO->Gravar($Tb_usuarioDTO);
    
    $ultimoID = $Tb_usuarioDAO->utlitmoID();
    $UID=$ultimoID["idusuario"];
  

    $Tb_prefeito_comunitarioDTO = new Tb_prefeito_comunitarioDTO();
    $Tb_prefeito_comunitarioDTO->setIdusuario($UID);
    $Tb_prefeito_comunitarioDTO->setNome_prefeito($usuario);
    $Tb_prefeito_comunitarioDTO->setCpf_prefeito($cpf);
    $Tb_prefeito_comunitarioDTO->setDt_nasc_prefeito($dt_nasc);
    $Tb_prefeito_comunitarioDTO->setTel_prefeito($telefone);
    $Tb_prefeito_comunitarioDTO->setEndereco_prefeito($endereco);
    $Tb_prefeito_comunitarioDTO->setGenero($genero);
    $Tb_prefeito_comunitarioDTO->setNumero_registro_prefeito($numero_prefeito);


    $Tb_prefeito_comunitarioDAO = new Tb_prefeito_comunitarioDAO();
    $resultado = $Tb_prefeito_comunitarioDAO->Gravar($Tb_prefeito_comunitarioDTO);

    if ($resultado){

        echo "<script>";
        echo "alert ('Cadastro bem sucedido!');";
        echo "window.location.href = '../view/principal.php';";
        echo "</script> ";
     }

    }elseif($idade < 18){
        echo "<script>";
        echo "alert ('Você não possui 18 anos!');";
        echo "window.location.href = '../view/index.php';";
        echo "</script> ";
    }
?>
