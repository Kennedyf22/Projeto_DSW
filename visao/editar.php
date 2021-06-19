<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <link href="css/img.css" rel="stylesheet" type="text/css">
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <link href="css/editar.css" rel="stylesheet" type="text/css">
        <title>Libras Guara- Edição</title>
    </head>
    <body>
        <header>            
            <div id="conteiner-logo">
                <div id="logo">
                    <a href="index.php"><img src="img/logosf1.png">Libras Guara</a>                
                </div>
                <nav>
                    <ul class="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="sobre.php">Sobre nós</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="empresas.php">Para Empresas</a></li>
                    </ul>     
                </nav>
            </div>            
        </header>
        <article>           
            <div id="conteiner-article">
                <?php
                    include_once("../modelo/cliente.php");
                    session_start();
                    $matricula = unserialize($_SESSION['obj_cliente'])->getMatricula();
                    $nome = unserialize($_SESSION['obj_cliente'])->getNome();
                    $snome = unserialize($_SESSION['obj_cliente'])->getSnome();
                    $dtnasc = unserialize($_SESSION['obj_cliente'])->getDtnasc();
                    $email1 = unserialize($_SESSION['obj_cliente'])->getEmail1();
                    $email2 = unserialize($_SESSION['obj_cliente'])->getEmail2();
                    $password1 = unserialize($_SESSION['obj_cliente'])->getPassword1();
                    $password2 = unserialize($_SESSION['obj_cliente'])->getPassword2();
                    $mMtdP = unserialize($_SESSION['obj_cliente'])->getMMtdP();
                    $mDtP = unserialize($_SESSION['obj_cliente'])->getMDtP();
                ?>
                <div id="container">
                    <form method="post" action="../controle/controle_cliente.php">
                        <div class="form-group">
                            <div class="col-12 col-sm-6">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12 col-sm-6">
                                <label for="snome" class="form-label">Sobrenome</label>
                                <input type="text" class="form-control" id="snome" name="snome" value="<?php echo $snome ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12 col-sm-6">
                                <label for="dtnasc" class="form-label">Data de Nascimento</label>
                                <input type="date" class="form-control" id="dtnasc" name="dtnasc" value="<?php echo $dtnasc ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12 col-sm-6">
                                <label for="email1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email1" name="email1" value="<?php echo $email1 ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12 col-sm-6">
                                <label for="email2" class="form-label">Confirmação do Email</label>
                                <input type="email" class="form-control" id="email2" name="email2" value="<?php echo $email2 ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12 col-sm-6">
                                <label for="password1" class="form-label">Senha:</label>
                                <input type="password" class="form-control" id="password1" name="password1" value="<?php echo $password1 ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12 col-sm-6">
                                <label for="password2" class="form-label">Confirmação da Senha:</label>
                                <input type="password" class="form-control" id="password2" name="password2" value="<?php echo $password2 ?>">
                            </div>
                        </div>
                        <div class="form-group form-check-inline">
                            <div class="col-12">
                                <input class="form-check-input" type="radio" name="mMtdP" id="mMtdP" value="crédito" 
                                <?php if ($mMtdP === "crédito") echo 'checked'; ?>>
                                    Cartão de Crédito
                                </label>
                                <input class="form-check-input" type="radio" name="mMtdP" id="mMtdP" value="transferencia" 
                                <?php if ($mMtdP === "transferencia") echo 'checked'; ?>>
                                    Transferência
                                </label>
                                <input class="form-check-input" type="radio" name="mMtdP" id="mMtdP" value="boleto" 
                                <?php if ($mMtdP === "boleto") echo 'checked'; ?>>
                                    Boleto
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12 col-sm-6">
                                <label for="mDtP" class="form-label">Dia do Pagamento</label>
                                <input type="text" class="form-control" id="mDtP" name="mDtP" value="<?php echo $mDtP ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-12">
                                <input type='hidden' name='matricula' value="<?php echo $matricula ?>" />
                                <input type="submit" name="salvar_alteracao" value="Salvar Alteração" class="btn btn-success mr-2">
                                <input type='submit' name='bt_listar' value='Listar todos' class='btn btn-primary'>
                                <a href='../visao/matricula.php' class='btn btn-warning mr-2' role='button'>Novo cliente</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
        <footer>
            © Libras Guara 2020
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>