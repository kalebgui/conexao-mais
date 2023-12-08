<?php

class Tb_prefeito_comunitarioDTO {
     private $idprefeitura;
    private $nome_prefeito;
    private $cpf_prefeito;
    private $dt_nasc_prefeito;
    private $tel_prefeito;
    private $genero;
    private $endereco_prefeito;
    private $numero_registro_prefeito;
    private $data_criacao_prefeito;
    private $idusuario;
    public function getIdprefeitura() {
        return $this->idprefeitura;
    }

    public function getNome_prefeito() {
        return $this->nome_prefeito;
    }

    public function getCpf_prefeito() {
        return $this->cpf_prefeito;
    }

    public function getDt_nasc_prefeito() {
        return $this->dt_nasc_prefeito;
    }

    public function getTel_prefeito() {
        return $this->tel_prefeito;
    }

    public function getGenero() {
        return $this->genero;
    }

    public function getEndereco_prefeito() {
        return $this->endereco_prefeito;
    }

    public function getNumero_registro_prefeito() {
        return $this->numero_registro_prefeito;
    }

    public function getData_criacao_prefeito() {
        return $this->data_criacao_prefeito;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdprefeitura($idprefeitura) {
        $this->idprefeitura = $idprefeitura;
    }

    public function setNome_prefeito($nome_prefeito) {
        $this->nome_prefeito = $nome_prefeito;
    }

    public function setCpf_prefeito($cpf_prefeito) {
        $this->cpf_prefeito = $cpf_prefeito;
    }

    public function setDt_nasc_prefeito($dt_nasc_prefeito) {
        $this->dt_nasc_prefeito = $dt_nasc_prefeito;
    }

    public function setTel_prefeito($tel_prefeito) {
        $this->tel_prefeito = $tel_prefeito;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
    }

    public function setEndereco_prefeito($endereco_prefeito) {
        $this->endereco_prefeito = $endereco_prefeito;
    }

    public function setNumero_registro_prefeito($numero_registro_prefeito) {
        $this->numero_registro_prefeito = $numero_registro_prefeito;
    }

    public function setData_criacao_prefeito($data_criacao_prefeito) {
        $this->data_criacao_prefeito = $data_criacao_prefeito;
    }

    public function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }


}
