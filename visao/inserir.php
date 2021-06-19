<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <link href="css/img.css" rel="stylesheet" type="text/css">
        <link href="css/inserir.css" rel="stylesheet" type="text/css">
        <title>Libras Guara- Inserir</title>
    </head>
    <body>
        <header>
            <div id="conteiner-logo">
                <div id="logo">
                    <a href="#"><img src="img/logosf1.png">Libras Guara</a>                
                </div>
                <nav>
                    <ul class="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Aulas</a></li>
                        <li><a href="#">Exercícios</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <ul class="acesso">
                        <li><a class="bt2" href="index.php">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <article>
            <div id="conteiner-article">
                <div id="conteiner-inserir">
                    <h1>Conteúdo</h1>
                    <input type="text" name="matriculaC" id="matriculaC" placeholder="Matrícula">
                    <h3>O que deseja fazer?</h3>
                    <input type="radio" name="conteudo" id="conteudo">Inserir
                    <input type="radio" name="conteudo" id="conteudo">Editar
                    <input type="radio" name="conteudo" id="conteudo">Excluir
                    <div>
                        <input type="button" name="pesquisarC" id="pC" value="Pesquisar no computador">
                        <input type="button" name="pesquisarC" id="pC" value="Pesquisar no site">
                    </div>
                    <input type="button" name="concluirC" id="concluirC" value="Concluir">
                    <input type="button" name="concluirC" id="concluirC" value="Cancelar">
                </div>
            </div>
        </article>
        <footer>
            © Libras Guara 2020
        </footer>
    </body>
</html>