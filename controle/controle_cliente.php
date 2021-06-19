<?php
include_once('../modelo/cliente.php');
include_once('../modelo/clienteDAO.php');

$clienteDAO = new ClienteDAO();

if (isset($_POST['mEC'])) {
    $clienteDAO->inserir($_POST['nome'], $_POST['snome'], $_POST['dtnasc'], $_POST['email1'], $_POST['email2'], $_POST['password1'], $_POST['password2'], $_POST['mMtdP'], $_POST['mDtP']);
}
if (isset($_POST['bt_listar'])) {
    $clienteDAO->listar();
}
if (isset($_POST['bt_consultar'])) {
    $clienteDAO->buscarCliente($_POST['email1']);
}

if (isset($_POST['botao_excluir'])) {
    $clienteDAO->excluir($_POST['matricula']);
}
if (isset($_POST['botao_editar'])) {
    $clienteDAO->editar($_POST['matricula']);
}
if (isset($_POST['salvar_alteracao'])) {
    $clienteDAO->SalvarEdicao($_POST['matricula'], $_POST['nome'], $_POST['snome'], $_POST['dtnasc'], $_POST['email1'], $_POST['email2'], $_POST['password1'], $_POST['password2'], $_POST['mMtdP'], $_POST['mDtP']);
    $clienteDAO->listar();
}
if (isset($_POST['mCCM'])) {
    echo "<script>
    window.location = '../visao/consulta.php';
    </script>";
}
if (isset($_POST['login'])) {
    $clienteDAO->login($_POST['matricula'], $_POST['password1']);
}