<?php

namespace App\Model;

class Usuario
{
    private string $login;
    private string $senha;

    public function __construct($login, $senha)
    {
        $this->login = $login;
        $this->senha = $senha;
    }

    public function __toString()
    {
        return '@'.$this->login;
    }
}