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
        <link href="css/matricula.css" rel="stylesheet" type="text/css">
        <link href="css/editar.css" rel="stylesheet" type="text/css">
        <title>Libras Guara- Consulta</title>
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
                <div class="row">
                    <div class="col">
                        <form action="../controle/controle_cliente.php" method="POST">
                            <div class="input-group mt-3">
                                <input type="email" class="form-control" name="email1" placeholder="Consultar por email" aria-label="Consultar por email" required>
                                <div class="input-group-append">
                                    <input type="submit" name="bt_consultar" value="Buscar" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center mt-5">
                        <form action='../controle/controle_cliente.php' method='POST'>
                        <div class='form-group form-check-inline'>
                            <div class='col text-center'>
                                <a href='../visao/matricula.php' class='btn btn-success mr-3' role='button' aria-pressed='true'>Novo cliente</a>
                                <input type='submit' name='bt_listar' value='Listar todos' class='btn btn-primary'>
                            </div>
                        </div>
                    </div>    
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