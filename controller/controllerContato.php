<?php

    enviarEmail();
    //header('Location: ../contato.php');

    function test_input($data){
        //Retira espaço no ínicio e final de uma string
        $data = trim($data);
        //Remove barras invertidas de uma string.
        $data = stripslashes($data);
        //Converte caracteres especiais para a realidade HTML. Ex: '>' (maior que) torna-se '&gt;'
        $data = htmlspecialchars($data);
        return $data;
    }

    function getNome(){
        if (empty($_POST["nome"])){
            echo ("ERRO: Campo 'Nome' em branco! Por favor, preencha todos os campos obrigatórios.");
            return false;
        }
        else {
            return test_input($_POST["nome"]);
        }
    }

    function getEmail(){

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            if (empty($_POST["email"])){
                echo ("ERRO: Campo 'Email' em branco! Por favor, preencha todos os campos obrigatórios.");
                return false;
            }
            else{
                echo ("ERRO: Formato de e-mail inválido! Por favor, informe um email válido.");
                return false;
            }
        }
        else{
            $dominio = explode('@',$_POST["email"]);
            if(!checkdnsrr($dominio[1],'A')){
                echo ("ERRO: E-mail inválido! Por favor, informe um email válido.");
                return false;
            }
            else{
                // "$email é válido
                return test_input($_POST["email"]);
            }
        }
    }

    function getAssunto(){
        if (empty($_POST["assunto"])){
            echo ("ERRO: Campo 'Assunto' em branco! Por favor, preencha todos os campos obrigatórios.");
            return false;
        }
        else {
            return test_input($_POST["assunto"]);
        }
    }

    function getMensagem(){
        if (empty($_POST["mensagem"])){
            echo ("ERRO: Campo 'Mensagem' em branco! Por favor, preencha todos os campos obrigatórios.");
            return false;
        }
        else {
            return test_input($_POST["mensagem"]);
        }
    }

    function enviarEmail(){
        if ((getAssunto() != false) && (getNome() != false) && (getMensagem() != false) && (getEmail() != false)) {
            $assunto = getAssunto();
            $corpo = "
            Assunto: " . getAssunto() . "
            Nome: " . getNome() . "
            Email: " . getEmail() . "
            Mensagem " . getMensagem() . "
            ";
            mail('brennojustino2008@gmail.com', $assunto, $corpo, 'From: brennojustino2008@hotmail.com');
            echo 'Email enviado com sucesso!';
            header('Location: ../contato.php');
        }
    }


?>


