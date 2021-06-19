<?php
class Cliente
{
    private $matricula;
    private $nome;
    private $snome;
    private $dtnasc;
    private $email1;
    private $email2;
    private $password1;
    private $password2;
    private $mMtdP;
    private $mDtP;


    function __construct($matricula, $nome, $snome, $dtnasc, $email1, $email2, $password1, $password2, $mMtdP, $mDtP)
    {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->snome = $snome;
        $this->dtnasc = $dtnasc;
        $this->email1 = $email1;
        $this->email2 = $email2;
        $this->password1 = $password1;
        $this->password2 = $password2;
        $this->mMtdP = $mMtdP;
        $this->mDtP = $mDtP;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getSnome()
    {
        return $this->snome;
    }

    public function setSnome($snome)
    {
        $this->snome = $snome;
    }

    public function getDtnasc()
    {
        return $this->dtnasc;
    }

    public function setDtnasc($dtnasc)
    {
        $this->dtnasc = $dtnasc;
    }

    public function getEmail1()
    {
        return $this->email1;
    }

    public function setEmail1($email1)
    {
        $this->email1 = $email1;
    }

    public function getEmail2()
    {
        return $this->email2;
    }

    public function setEmail2($email2)
    {
        $this->email2 = $email2;
    }

    public function getPassword1()
    {
        return $this->password1;
    }

    public function setPassword1($password1)
    {
        $this->password1 = $password1;
    }
    public function getPassword2()
    {
        return $this->password2;
    }

    public function setPassword2($password2)
    {
        $this->password2 = $password2;
    }
    public function getMMtdP()
    {
        return $this->mMtdP;
    }

    public function setMMtdP($mMtdP)
    {
        $this->mMtdP = $mMtdP;
    }
    public function getMDtP()
    {
        return $this->mDtP;
    }

    public function setMDtP($mDtP)
    {
        $this->mDtP = $mDtP;
    }
}
