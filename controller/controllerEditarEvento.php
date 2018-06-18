<?php

editarEvento();

function editarEvento(){

    $conecta = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conecta, 'database');

    $nome = $_POST['nome'];
    $busca = mysqli_query($conecta,"SELECT * FROM evento WHERE nome = '$nome'");
    $registro = mysqli_fetch_array($busca);
    $arquivo = $registro['imagem'];
    if ($busca) {
        if (getEscolha()) {
            if (getOpcao()) {
                if (isset($_FILES['arquivo'])) {
                    unlink("../uploads/" . "$arquivo");//deletando a imagem antiga do servidor
                    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensão do arquivo
                    if ($extensao == 'jpeg') {
                        $novoNome = md5(time()) . '.' . $extensao; // define o novo nome do arquivo
                    } else {
                        $novoNome = md5(time()) . $extensao; // define o novo nome do arquivo
                    }

                    $diretorio = "../uploads/"; //define o diretorio para onde será enviado o arquivo

                    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novoNome);//efetua o upload

                    $data = getData() . " " . getHora() . ":00"; // concatenando a data
                    $nome = getNome();
                    $descricao = getDescricao();
                    $query = mysqli_query($conecta, "UPDATE evento
                                                  SET data = '$data', imagem = '$novoNome', descricao = '$descricao'
                                                  WHERE nome = '$nome'");
                    if ($query) {
                        echo 'Salvo com sucesso!';
                        header("Location: desenvolvimento/painel.php");
                    } else {
                        echo 'Não foi possivel salvar a edição.';
                        echo mysqli_error($conecta);
                    }

                } else {
                    echo '<p> arquivo não selecionado</p>';
                }
            } else {
                $data = getData() . " " . getHora() . ":00"; // concatenando a data
                $nome = getNome();
                $descricao = getDescricao();
                $query = mysqli_query($conecta, "UPDATE evento
                                                  SET data = '$data', descricao = '$descricao'
                                                  WHERE nome = '$nome'");
                if ($query) {
                    echo 'Salvo com sucesso!';
                    header("Location: desenvolvimento/painel.php");
                } else {
                    echo 'Não foi possivel salvar a edição.';
                    echo mysqli_error($conecta);
                }

            }
        } else {
            ExcluirEvento($nome, $arquivo);
        }
    }
    else{
        echo '<p> Registro não encontrado!</p>';
        echo mysqli_error($conecta);
    }
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

function ExcluirEvento ($nome,$arquivo){
    $conecta = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conecta, 'database');
    mysqli_query($conecta,"DELETE FROM evento WHERE nome = '$nome'");
    unlink("../uploads/" . "$arquivo");//deletando a imagem antiga do servidor
    header('Location: ../index.php');
}
?>