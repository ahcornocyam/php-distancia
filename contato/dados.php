 <?php
         define('EMAIL',FILTER_VALIDATE_EMAIL);
         session_start();
        #
        #filtrando os dados vindo do formulário
        $dados = $_POST;
        $erro = array();
        #fazendo as validações
        /*
         * verificando se os campo estão vazios e email
        */
        foreach ($dados as $campos =>$valor){
            (empty($valor))? array_push($erro,"O campo {$campos} está vazio.\n<br/>"):"";
            if($campos === 'email' && !empty($valor)){
                (filter_var($valor,FILTER_VALIDATE_EMAIL))?"":array_push($erro,"O campo {$campos} não está no formato adequado \n <br>");
            }
        }
        if(count($erro) > 0){ 
            $_SESSION['erro'] = $erro;
            \header('refresh:1,url=contato.php');
            echo "Carregando...";
        }