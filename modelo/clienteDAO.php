<?php
class clienteDAO
{
    function inserir($nome, $snome, $dtnasc, $email1, $email2, $password1, $password2, $mMtdP, $mDtP)
    {
        try {
            $pdo = new PDO('mysql:host=remotemysql.com;dbname=WsGlHwi959', "WsGlHwi959", "tUsM4C6RmK");
            //$pdo = new PDO('mysql:host=localhost;dbname=projeto_pw', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO cliente (nome, snome, dtnasc, email1, email2 ,password1, password2, mMtdP, mDtP) VALUES(:nome, :snome, :dtnasc, :email1, :email2, :password1, :password2, :mMtdP, :mDtP)');
            $stmt->execute(array(
                ':nome' => "$nome", ':snome' => "$snome",':dtnasc' => "$dtnasc",':email1' => "$email1",':email2' => "$email2", ':password1' => "$password1", ':password2' => "$password2", 'mMtdP' => "$mMtdP", 'mDtP' => "$mDtP"
            ));
            echo "<script>alert('Cadastrado com sucesso!');
            window.location = '../visao/index.php';
            </script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function inserir2($nome, $snome, $dtnasc, $email1, $email2, $password1, $password2, $mMtdP, $mDtP)
    {
        try {
            $pdo = new PDO('mysql:host=remotemysql.com;dbname=WsGlHwi959', "WsGlHwi959", "tUsM4C6RmK");
            //$pdo = new PDO('mysql:host=localhost;dbname=projeto_pw', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $inserir = $pdo->prepare("INSERT INTO cliente (nome, snome, dtnasc, email1, email2 ,password1, password2, mMtdP, mDtP) VALUES('$nome', '$snome', '$dtnasc', '$email1', '$email2' ,'$password1', '$password2', '$mMtdP', '$mDtP')");
            $inserir->execute();

            echo "<script>alert('Cadastrado com sucesso!');
            window.location = '../visao/index.php';
            </script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function listar()
    {
        $pdo = new PDO('mysql:host=remotemysql.com;dbname=WsGlHwi959', "WsGlHwi959", "tUsM4C6RmK");
        //$pdo = new PDO('mysql:host=localhost;dbname=projeto_pw', "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT matricula,nome,snome, dtnasc, email1, mMtdP, mDtP FROM cliente");
        echo " <!doctype html>";
        echo "<html lang='pt-br'>";
        echo "<head>";
        echo " <meta charset='utf-8'>";
        echo " <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
        echo "<title>Cadastros</title>";
        echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css'>";
        echo "</head>";
        echo "<body class='container'>";
        echo "<h2>Libras Guara- Cadastros</h2>";
        echo "<table class='table table-striped mt-3'>";
        echo "<tr>
          <th>Matricula</th>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Data de Nascimento</th>
          <th>Email</th>
          <th>Método de pagamento</th>
          <th>Dia do pagamento</th>
          <th>Ações</th>
          </tr>";
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $linha['matricula'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['snome'] . "</td>";
            echo "<td>" . $linha['dtnasc'] . "</td>";
            echo "<td>" . $linha['email1'] . "</td>";
            echo "<td>" . $linha['mMtdP'] . "</td>";
            echo "<td>" . $linha['mDtP'] . "</td>";
            echo "<td> <form method='post' action='../controle/controle_cliente.php'> "
                . "<input class='btn btn-outline-primary mr-3' type='submit' name='botao_editar' value='Editar'>"
                . "<input class='btn btn-outline-danger' type='submit' name='botao_excluir' value='Excluir'>"
                . " <input type='hidden' name='matricula' value = '" . $linha['matricula'] . "'/></form> </td>";
            echo "</tr>";
        }
        echo " </table>";
        echo "<form action='../controle/controle_cliente.php' method='POST'>";
        echo "<div class='form-group form-check-inline'>";
        echo "<div class='col'>";
        echo "<a href='../visao/consulta.php' class='btn btn-primary mr-3' role='button' aria-pressed='true'>Voltar</a>";
        echo "<a href='../visao/matricula.php' class='btn btn-success mr-3' role='button' aria-pressed='true'>Novo cliente</a>";
        echo "</div></div></form>";
        echo "</body></html>";
    }

    function buscarCliente($email1)
    {
        include_once("../visao/consulta.php");
        include_once("../modelo/cliente.php");

        $pdo = new PDO('mysql:host=remotemysql.com;dbname=WsGlHwi959', "WsGlHwi959", "tUsM4C6RmK");
        //$pdo  = new PDO("mysql:host=localhost;dbname=projeto_pw", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT matricula,nome,snome, dtnasc, email1, email2, password1, password2, mMtdP, mDtP FROM cliente WHERE email1 = '$email1'");
        $total_retornado = $consulta->rowCount();


        if ($total_retornado  === 0) {
            echo "<script>alert('não econtrado')</script>";
        } else {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $cliente = new Cliente($linha['matricula'], $linha['nome'], $linha['snome'], $linha['dtnasc'], $linha['email1'], $linha['email2'], $linha['password1'], $linha['password2'], $linha['mMtdP'], $linha['mDtP']);

                echo "<table class='table table-striped mt-3'>";
                echo "<tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Método de pagamento</th>
                <th>Dia do pagamento</th>
                <th>Ações</th>
                </tr>";
                echo "<tr>";
                echo "<td>" . $cliente->getMatricula() . "</td>";
                echo "<td>" . $cliente->getNome() . "</td>";
                echo "<td>" . $cliente->getSnome() . "</td>";
                echo "<td>" . $cliente->getDtnasc() . "</td>";
                echo "<td>" . $cliente->getEmail1() . "</td>";
                echo "<td>" . $cliente->getMMtdP() . "</td>";
                echo "<td>" . $cliente->getMDtP() . "</td>";
                echo "<td> <form method='post' action='../controle/controle_cliente.php'> "
                    . "<input class='btn btn-outline-primary mr-3' type='submit' name='botao_editar' value='Editar'>"
                    . "<input class='btn btn-outline-danger' type='submit' name='botao_excluir' value='Excluir'>"
                    . " <input type='hidden' name='matricula' value = '" . $linha['matricula'] . "'/></form> </td>";
                echo " </table>";
            }
        }
    }

    function excluir($matricula)
    {
        try {
            $pdo = new PDO('mysql:host=remotemysql.com;dbname=WsGlHwi959', "WsGlHwi959", "tUsM4C6RmK");
            //$pdo = new PDO('mysql:host=localhost;dbname=projeto_pw', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $delete =  $pdo->prepare("DELETE FROM cliente WHERE matricula = '$matricula'");
            $delete->execute();

            echo "<script>alert('" .  $delete->rowCount() .
                " Usuário deletado com sucesso!');" .
                " window.location = '../visao/consulta.php';</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
    function Editar($matricula) {
        try {
            $pdo = new PDO('mysql:host=remotemysql.com;dbname=WsGlHwi959', "WsGlHwi959", "tUsM4C6RmK");
           //$pdo = new PDO('mysql:host=localhost;dbname=projeto_pw', "root", "");
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $consulta = $pdo->query("SELECT matricula,nome,snome, dtnasc, email1, email2, password1, password2, mMtdP, mDtP FROM cliente WHERE matricula = '$matricula'");
     
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
           session_start();
           include_once("../modelo/cliente.php");
           $cliente = new Cliente($linha['matricula'], $linha['nome'], $linha['snome'], $linha['dtnasc'], $linha['email1'], $linha['email2'], $linha['password1'], $linha['password2'], $linha['mMtdP'], $linha['mDtP']);
           $_SESSION['obj_cliente'] = serialize($cliente);
            header("location:../visao/editar.php");
        }
        }catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        } 
    }

    function SalvarEdicao($matricula, $nome, $snome, $dtnasc, $email1, $email2, $password1, $password2, $mMtdP, $mDtP){
        try {
            $pdo = new PDO('mysql:host=remotemysql.com;dbname=WsGlHwi959', "WsGlHwi959", "tUsM4C6RmK");
           //$pdo = new PDO('mysql:host=localhost;dbname=projeto_pw', "root", "");
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
           $editar = $pdo->query("UPDATE cliente SET nome ='$nome', snome='$snome',dtnasc='$dtnasc', email1 ='$email1', email2='$email2', password1 ='$password1', password2 ='$password2', mMtdP='$mMtdP', mDtP ='$mDtP' WHERE matricula = '$matricula'");
           $editar->execute();
            echo "<script>alert('Alterado com sucesso!');</script>";
          } catch (PDOException $e) {
              echo 'Error: ' . $e->getMessage();
          }
    }

    function login($matricula, $password1){
        $matricula_ = '5';
        $password1_ = '4567';

        session_start();

        $_SESSION['matricula'] = $matricula;
        $_SESSION['password1'] = $password1;

        if (empty($_SESSION['matricula']) && empty($_SESSION['password1'])) {
            exit('Usuário ou password1 vazio');
        } elseif (($_SESSION['matricula'] != $matricula_) || ($_SESSION['password1'] != $password1_)) {
            exit("<script>alert('Matricula e/ou senha vazio!');</script>");
        } else {
            header("Location:../visao/consulta.php");
        }
        
    }
}