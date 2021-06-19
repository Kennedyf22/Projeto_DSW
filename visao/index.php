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
        <title>Libras Guara- Home</title>
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
                                    <form id="login" action='../controle/controle_cliente.php' method='POST'>
                                        <input type="text" name="matricula" id="textBox1" placeholder="Matrícula"><br>
                                        <input type="password" name="password1" id="textBox2" placeholder="Senha">
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
                <h1>
                    <p>Seja bem-vindo(a) ao curso online de</p>
                    <p class="p">Língua Brasileira de Sinais.</p>
                </h1>
                <p class="dcr">
                    Você irá estudar, praticar, discutir e se aprofundar em uma plataforma<br>
                    inteiramente focada no ensino da Libras.
                </p>
                <img id="libras" src="img/libras-preto.png">
            </div>                    
            <div id="cont-art">
                <div class="blc-art1">
                    <p>Conteúdo</p>
                </div>
                <div class="blc-art1">
                    <p>Conteúdo</p>
                </div>
                <div class="blc-art2">
                    <p>Conteúdo</p>
                </div>
                <div class="blc-art2">
                    <p>Conteúdo</p>
                </div>
                <div class="blc-art3">
                    <p>Conteúdo</p>
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