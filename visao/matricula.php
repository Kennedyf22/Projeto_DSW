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
        <title>Libras Guara- Matrícula</title>
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
                    <ul class="acessoM">
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
                    </ul>
                </nav>
            </div>
        </header>
        <article>
            <div id="conteiner-article">
               <form method="post" action="../controle/controle_cliente.php">
                   <h4>Matrícula</h4>
                   <input type="text" name="nome" id="mNm" placeholder="Nome">
                   <input type="text" name="snome" id="mNm" placeholder="Sobrenome"><br>
                   <label class="mDtN">Data de Nascimento: <input type="date" name="dtnasc" id="mDtNasc"></label>
                   <input type="email" name="email1" id="mEmail" placeholder="E-mail">
                   <input type="email" name="email2" id="mEmail" placeholder="Confirme o E-mail"><br>
                   <input type="password" name="password1" id="mPassword" placeholder="Senha">
                   <input type="password" name="password2" id="mPassword" placeholder="Confirme a senha"><br>
                   <div class="mopMtdP">
                        <label class="mMtdP">Qual é o método de pagamento?</label><br>
                        <input type="radio" name="mMtdP" id="mMtdp" value="crédito">Cartão de Crédito
                        <input type="radio" name="mMtdP" id="mMtdp" value="transferencia">Transferência
                        <input type="radio" name="mMtdP" id="mMtdp" value="boleto">Boleto<br>
                        <input type="text" name="mDtP" id="mDtp" placeholder="Dia para pagamento">
                   </div>
                   <input type="submit" name="mEC" id="mBt" value="Enviar">
               </form>
            </div>
        </article>
        <footer>
            © Libras Guara 2020
        </footer>
    </body>
</html>