<!DOCTYPE html>
<!--
    Exemplo de formulário para envio de mensagem, com verificação eo envio do email
    para a empresa ficticia
-->
<html lang="pt-br">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header class="container-fluid" role="heading">
            <div class="jumbotron col-lg-12">
                <h1>Formulário de Envio</h1>
            </div>
        </header>
        <main role="main">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <form action="contato.php" method="post"class="form-horizontal">
                        <div class="form-group-lg">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="form-group-lg"
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group-lg">'
                            <label for="setor">Setor:</label>
                            <select name="setor" class="form-control">
                                <option value="vendas">Vendas</option>
                                <option value="financeiro">Financeiro</option>
                            </select>
                        </div>
                        <div class="form-group-lg">'
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group-lg">'
                        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                        </div>
                    </form> 
                </div>                
            </div>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.js"></script>
    </body>
</html>