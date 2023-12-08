<?php


class Tb_projetoDTO {
     private $idprojeto;
    private $titulo;
    private $arquivo;
    private $descricao;
    private $dataHora;
    private $idtipo_projeto;
    private $idprefeitura;
    private $idstatus;
    private $idtipo_regiao;
    function getIdprojeto() {
        return $this->idprojeto;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getArquivo() {
        return $this->arquivo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getDataHora() {
        return $this->dataHora;
    }

    function getIdtipo_projeto() {
        return $this->idtipo_projeto;
    }

    function getIdprefeitura() {
        return $this->idprefeitura;
    }

    function getIdstatus() {
        return $this->idstatus;
    }

    function getIdtipo_regiao() {
        return $this->idtipo_regiao;
    }

    function setIdprojeto($idprojeto) {
        $this->idprojeto = $idprojeto;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setDataHora($dataHora) {
        $this->dataHora = $dataHora;
    }

    function setIdtipo_projeto($idtipo_projeto) {
        $this->idtipo_projeto = $idtipo_projeto;
    }

    function setIdprefeitura($idprefeitura) {
        $this->idprefeitura = $idprefeitura;
    }

    function setIdstatus($idstatus) {
        $this->idstatus = $idstatus;
    }

    function setIdtipo_regiao($idtipo_regiao) {
        $this->idtipo_regiao = $idtipo_regiao;
    }


}
