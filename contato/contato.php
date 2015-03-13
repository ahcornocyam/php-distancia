<!DOCTYPE html>
<!--
    Exemplo de formulário para envio de mensagem, com verificação eo envio do email
    para a empresa ficticia
-->
<?php
    session_start();
    (isset($_SESSION['erro']))? $erro = $_SESSION['erro']:$erro = "";    
?>
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
                <div class="col-lg-offset-2 col-lg-8 col-lg-offset-2">
                    <form action="dados.php" method="post"class="form-horizontal" target="">
                        
                        <div class="bg-danger form-group-lg">
                            <?php
                            if($erro > 0):
                                foreach ($erro as $key):
                                    echo $key;
                                endforeach;
                            endif;
                            ?>
                        </div>
                        <div class="form-group-lg">
                            <label for="nome">Nome:</label>
                            <input type="text" name="nome" class="form-control">
                        </div>
                        <div class="form-group-lg"
                            <label for="email">E-mail:</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group-lg">
                            <label for="setor">Setor:</label>
                            <select name="setor" class="form-control">
                                <option value="vendas">Vendas</option>
                                <option value="financeiro">Financeiro</option>
                            </select>
                        </div>
                        <div class="form-group-lg">
                            <label for="mensagem">Mensagem</label>
                            <textarea name="mensagem" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="form-group-lg">
                            <button type="submit" class="btn btn-primary btn-lg" name="enviar" value="ok">Enviar</button>
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
<?php
    session_destroy();
