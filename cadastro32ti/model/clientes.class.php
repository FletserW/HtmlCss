<?php
    class Cliente{
        private $cli_cod;
        private $cli_nome;
        private $cli_nasc;

        public function setCli_cod($cli_cod){
            $this->cli_cod = $cli_cod;
        }
        public function setCli_nome($cli_nome){
            $this->cli_nome = $cli_nome;
        }
        public function setCli_nasc($cli_nasc){
            $this->cli_nasc = $cli_nasc;
        }
        public function getCli_cod(){
            return $this->cli_cod;
        }
        public function getCli_nome(){
            return $this->cli_nome;
        }
        public function getCli_nasc(){
            return $this->cli_nasc;
        }
    }
?>