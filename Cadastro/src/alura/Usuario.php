<?php

namespace App\Alura;

class Usuario
{
    private $nome;
    private $sobrenome;
    private $senha;

    public function __construct(string $nome, string $senha) {
        $this->senha = $senha;
        
        $nomeSobrenome = explode(" ", $nome, 2);
        
        if ($nomeSobrenome[0] === "") {
            $this->nome = "Nome inv�lido";
        } else {
            $this->nome =  $nomeSobrenome[0];
        }
        
        if ($nomeSobrenome[1] === null) {
            $this->sobrenome = "Sobrenome inv�lido";
        } else {
            $this->sobrenome = $nomeSobrenome[1];
        }
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function getSobrenome(): string
    {
        return $this->sobrenome;
    }
    private function validaSenha(string $senha): void
    {
        $tamanhoSenha = strlen($senha);
        
        if ($tamanhoSenha > 6) {
            $this->senha = $senha;
        } else {
            $this->senha = "Senha inv�lida";
        }
    }
}