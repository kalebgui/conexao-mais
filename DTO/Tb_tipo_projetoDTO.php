<?php


class Tb_tipo_projetoDTO {
   private $idtipo_projeto;
    private $nome_tipo;
    function getIdtipo_projeto() {
        return $this->idtipo_projeto;
    }

    function getNome_tipo() {
        return $this->nome_tipo;
    }

    function setIdtipo_projeto($idtipo_projeto) {
        $this->idtipo_projeto = $idtipo_projeto;
    }

    function setNome_tipo($nome_tipo) {
        $this->nome_tipo = $nome_tipo;
    }


}
