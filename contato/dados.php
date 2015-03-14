 <?php
        /*
         * scrip onde é feito o tratamento e envio dos dados
         * do formulário de contato
         */
 
        #constante  para validar email
        define('EMAIL',FILTER_VALIDATE_EMAIL);
        #iniciando uma seção, para que os dados de erro sejam enviados
        session_start();
       
        /*criei uma função para que valide os dados, onde primeiro pega as informções
         * de um array e faz a leitura para ver se não estao preenchidos ou se o email
         * é valido
         * checa se os campos estão vazios
         */
        function validaDados(array $dados){
            
            $erro = []; //onde serão inseridos os erros
            
            foreach ($dados as $campos =>$valor){
                #verifica se os camps estão vazios
                (empty($valor))? array_push($erro,"O campo {$campos} está vazio.\n<br/>"):"";
                #verifica se é valido o email
                if($campos === 'email' && !empty($valor)){
                    (filter_var($valor,FILTER_VALIDATE_EMAIL))?"":array_push($erro,"O campo {$campos} não está no formato adequado \n <br>");
                }
            }
            #retorna para a pagina os erros caso exista
            if(count($erro) > 0){ 
               $_SESSION['erro'] = $erro;
               return \header('refresh:1,url=contato.php');
            }
            #formulario passou!!!
            return true;
        }
        /*
         * função que faz o envio do email
         */
        function enviarEmail(array $dados){
            
        }
        
        validaDados(trim($_POST));