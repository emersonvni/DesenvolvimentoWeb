<?php
    validarEmail();

    function test_input($data){
        echo("test_input\n");
        //Retira espaço no ínicio e final de uma string
        $data = trim($data);
        //Remove barras invertidas de uma string.
        $data = stripslashes($data);
        //Converte caracteres especiais para a realidade HTML. Ex: '>' (maior que) torna-se '&gt;'
        $data = htmlspecialchars($data);
        return $data;
    }

    function getNome(){
        echo("getNome\n");
        return $_POST["nome"];
    }

    function getEmail(){
        echo("getEmail\n");
        return $_POST["email"];
    }
    function getAssunto(){
        echo("getAssunto\n");
        return $_POST["assunto"];
    }

    function getMensagem(){
        echo("getMensagem\n");
        return $_POST["mensagem"];
    }

    function validarEmail(){
        echo("validarEmail\n");
        // Remove todos os caracteres, exceto letras, dígitos e ! # $% & '* + - =? ^ _ `{|} ~ @. [] .
        $email = filter_var(getEmail(), FILTER_SANITIZE_EMAIL);
        //Remove espaços em branco e etc.
        $email = test_input($email);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            if (isset($email)){
                echo ("Campo E-mail em branco! Este campo é obrigatorio.");
            }
            else {
                echo ( "Formato do e-mail é inválido!");
            }
        }
        else{
            //Valida o dominio
            $dominio = explode('@',$email);
            if(!checkdnsrr($dominio[1],'A')){
                $mensagem = 'E-mail inválido!';
                echo($mensagem);
                return $mensagem;
            }
            else{
                echo ("$email is a valid email address");
                //return true; // Retorno true para indicar que o e-mail é valido
            }
        }
    }


?>


