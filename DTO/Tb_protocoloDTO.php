<?php


class Tb_protocoloDTO {
    private $idprotocolo;
    private $nome_protocolo;
    private $cpf_protocolo;
    private $dt_nasc_protocolo;
    private $genero_protocolo;
    private $tel_protocolo;
    private $endereco_protocolo;
    private $SIAPE_protocolo;
    private $data_criacao_protocolo;
    private $idusuario;
    public function getIdprotocolo() {
        return $this->idprotocolo;
    }

    public function getNome_protocolo() {
        return $this->nome_protocolo;
    }

    public function getCpf_protocolo() {
        return $this->cpf_protocolo;
    }

    public function getDt_nasc_protocolo() {
        return $this->dt_nasc_protocolo;
    }

    public function getGenero_protocolo() {
        return $this->genero_protocolo;
    }

    public function getTel_protocolo() {
        return $this->tel_protocolo;
    }

    public function getEndereco_protocolo() {
        return $this->endereco_protocolo;
    }

    public function getSIAPE_protocolo() {
        return $this->SIAPE_protocolo;
    }

    public function getData_criacao_protocolo() {
        return $this->data_criacao_protocolo;
    }

    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdprotocolo($idprotocolo){
        $this->idprotocolo = $idprotocolo;
    }

    public function setNome_protocolo($nome_protocolo) {
        $this->nome_protocolo = $nome_protocolo;
    }

    public function setCpf_protocolo($cpf_protocolo) {
        $this->cpf_protocolo = $cpf_protocolo;
    }

    public function setDt_nasc_protocolo($dt_nasc_protocolo){
        $this->dt_nasc_protocolo = $dt_nasc_protocolo;
    }

    public function setGenero_protocolo($genero_protocolo){
        $this->genero_protocolo = $genero_protocolo;
    }

    public function setTel_protocolo($tel_protocolo){
        $this->tel_protocolo = $tel_protocolo;
    }

    public function setEndereco_protocolo($endereco_protocolo){
        $this->endereco_protocolo = $endereco_protocolo;
    }

    public function setSIAPE_protocolo($SIAPE_protocolo){
        $this->SIAPE_protocolo = $SIAPE_protocolo;
    }

    public function setData_criacao_protocolo($data_criacao_protocolo){
        $this->data_criacao_protocolo = $data_criacao_protocolo;
    }

    public function setIdusuario($idusuario){
        $this->idusuario = $idusuario;
    }


}