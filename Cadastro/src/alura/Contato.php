<?php

namespace App\Alura;

class Contato
{
    private $email;
    
    public function __construct($email)
    {
        $this->email = $email;
    }
    public function getUsuario(): string
    {
        $posicaoArroba = strpos($this->email, "@");
        return substr($this->email, 0, $posicaoArroba);
    }
    
}