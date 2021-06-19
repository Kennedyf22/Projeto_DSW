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
        <title>Libras Guara- Sobre nós</title>
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
                    <ul class="acesso">
                        <div id="main">
                            <input type="checkbox" onclick="toggle()" name="hlg" id="checkBox">
                            <div class="mainBox">
                                <div class="head">
                                    <div class="cl"></div>
                                    <div class="cl"></div>
                                    <div class="cl"></div>
                                </div>
                                <div class="box">
                                    <form id="login">
                                        <input type="text" name="matricula" id="textBox1" placeholder="Matrícula"><br>
                                        <input type="password" name="password" id="textBox2" placeholder="Senha">
                                        <input for="checkbox" id="btn" type='submit' name ='login' value="Entrar">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <li><a class="bt2" href="matricula.php">Matricule-se</a></li>
                    </ul>
                </nav>
            </div>            
        </header>
        <article>           
            <div id="conteiner-article">
                <h2>
                    <p>
                        A Libras Guara trabalha em prol da difusão e desenvolvimento da Libras(Língua Brasileira de Sinais)<br>
                        buscando cada vez mais a inclusão. Isto é feito através de aulas com didática bem elaborada, a fim <br>
                        de obter o máximo aproveitamento dos alunos.
                    </p>
                </h2>
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