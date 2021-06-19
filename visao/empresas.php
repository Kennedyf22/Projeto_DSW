<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <link href="css/img.css" rel="stylesheet" type="text/css">
        <link href="css/login.css" rel="stylesheet" type="text/css">
        <link href="css/matricula.css" rel="stylesheet" type="text/css">
        <title>Libras Guara- Para Empresas</title>
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
                <p class="empresas">Traga sua empresa!<br>Faça o cadastro e entraremos em contato.</p>
               <form id="formemp" method="#" action="#">
                   <h4>Empresa</h4>
                   <input type="text" name="nome" id="mNm" placeholder="*Nome"><br>
                   <input type="email" name="emc" id="emc" placeholder="*E-mail Comercial"><br>                   
                   <input type="text" name="tel" id="tel" placeholder="*Telefone"><br>
                   <input type="email" name="emp" id="emp" placeholder="*Empresa"><br>
                   <input type="button" name="mEF" id="mBtE" value="Enviar">
                   <input type="button" name="mCF" id="mBtE" value="Cancelar">
                   <input type="button" name="mLF" id="mBtE" value="Limpar">
               </form>
            </div>
        </article>
        <footer>
            © Libras Guara 2020
        </footer>
    </body>
</html>