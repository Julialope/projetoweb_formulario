<?php

class Pessoa{
    private $nome;
    private $telefone;
    private $origem;
    private $datadecontato;
    private $observacao;
    

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getOrigem(){
        return $this->origem;
    }
    public function setOrigem($origem){
        $this->origem = $origem;
    }
    public function getDatadecontato() {
        return $this -> datadecontato;
    }
    public function setDatadecontato($datadecontato){
        $this->datadecontato = $datadecontato;
    }
    public function getObervacao(){
        return $this->observacao;
    }
    public function setObservacao($observacao){
        $this->observacao = $observacao;
    }
}

?>