<?php

require_once("../init.php");

0 references | 0 implementations
class banco {
    1 reference
    protected $mysqli;

    0 references | 0 overrides
    public function __construct(){
        $this->conexao();
    }
    1 reference private function conexao{
        $this->mysqli = new myqli(BD_SERVIDOR,BD_SENHA,BD_BANCO);
    }
    public function get_conexao(){
}
