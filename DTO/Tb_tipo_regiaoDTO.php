<?php


class Tb_tipo_regiaoDTO {
   private $idtipo_regiao;
   private $regiao;
   function getIdtipo_regiao() {
       return $this->idtipo_regiao;
   }

   function getRegiao() {
       return $this->regiao;
   }

   function setIdtipo_regiao($idtipo_regiao) {
       $this->idtipo_regiao = $idtipo_regiao;
   }

   function setRegiao($regiao) {
       $this->regiao = $regiao;
   }


}
