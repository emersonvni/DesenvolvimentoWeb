<?php
include("../model/AnuncioModel.php");
editarEvento();

function editarEvento(){
    $nome = $_POST['nome'];
    AnuncioModel::editarAnuncio($nome, getOpcao(), getEscolha(), $_FILES['arquivo'], $_FILES['arquivo']['name'], $_FILES['arquivo']['tmp_name'], getData() . " " . getHora() . ":00", getDescricao(), getNome());
}

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

function getData(){
    if (empty($_POST["data"])){
        echo ("ERRO: Campo 'Data' em branco! Por favor, preencha todos os campos obrigatórios.");
        return false;
    }
    else {
        return test_input($_POST["data"]);
    }
}
function getHora(){
    if (empty($_POST["hora"])){
        echo ("ERRO: Campo 'Hora' em branco! Por favor, preencha todos os campos obrigatórios.");
        return false;
    }
    else {
        return test_input($_POST["hora"]);
    }
}
function getArquivo(){
    if (empty($_FILES["arquivo"])){
        echo ("ERRO: 'Arquvivo' não selecionado! Por favor, selecione um arquivo.");
        return false;
    }
    else {
        return test_input($_FILES["arquivo"]);
    }
}
function getDescricao(){
    if (empty($_POST["descricao"])){
        echo ("ERRO: Campo 'Descrição' em branco! Por favor, preencha todos os campos obrigatórios.");
        return false;
    }
    else {
        return test_input($_POST["descricao"]);
    }
}

function getOpcao(){
    if ($_POST["opcao"] == "sim"){
        return true;
    }
    else {
        return false;
    }
}

function getEscolha(){
    if ($_POST["escolha"] == "Salvar Alterações"){
        return true;
    }
    else {
        return false;
    }

}
?>