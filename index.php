<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Verificar Idade</title>
    </head>
    <body>
        <main role="main">
            <div class="form">
                <form action="src/verificaidade.php" method="post">
                    <label for="inputNome">
                        Nome:
                    </label>
                    <input type="text" name="inputNome" value="" placeholder="Digite seu nome" required/>
                    <label for="inputIdade">
                        Idade:
                    </label>
                    <input type="number" name="inputIdade" value="" required/>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </main>
    </body>    
</html>