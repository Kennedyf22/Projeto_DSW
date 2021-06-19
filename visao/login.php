<?php

class Login{
    private $usuario;
    private $senha;

    public function getusuario(){
        return $this->usuario;
    }
    public function setNome($user){
        $this->usuario = $user;
    }
    public function getsenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    function FazerLogin($user, $senha){
        // Define um valor de teste para usuário e senha
        $usuario_ = 'Marcos';
        $senha_ = 'abcd1234';

        // Inicia a sessão
        session_start();

        // Cria variáveis de sessão da sessão e atribui os valores recebidos por parâmetro
        $_SESSION['user'] = $user;
        $_SESSION['senha'] = $senha;
        // Verifica se a sessão do usuário está vazia
        if (empty($_SESSION['user']) && empty($_SESSION['senha'])) {
            // Ação a ser executada: mata o script e manda uma mensagem
            exit('Usuário ou senha vazio');
            // Verifica se os valores das variáveis de sessão são iguais aos valores de teste
        } elseif (($_SESSION['user'] != $usuario_) || ($_SESSION['senha'] != $senha_)) {
            // Ação a ser executada: mata o script e manda uma mensagem
            exit('Usuário ou senha não encontrado.');
        } else {
                // Direciona para a página inicio.php
            header("Location:../visao/inicio.php");
        }
    }
    function fazerLogout(){
        session_start();
        session_destroy();
        unset($_SESSION);
        header("Location:../visao/login.php");
    }
}