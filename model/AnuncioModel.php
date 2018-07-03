<?php
class AnuncioModel{
        private $nome, $descricao, $arquivo, $data;
        public function __construct($nome, $descricao, $arquivo, $data)
        {
            $this->setNome($nome);
            $this->setDescricao($descricao);
            $this->setArquivo($arquivo);
            $this->setData($data);
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

        public function getNome()
        {
            return $this->nome;
        }

        public function setNome($nome)
        {
            $this->nome = test_imput($nome);
        }

        public function getDescricao()
        {
            return $this->descricao;
        }

        public function setDescricao($descricao)
        {
            $this->descricao = test_imput($descricao);
        }

        public function getArquivo()
        {
            return $this->arquivo;
        }

        public function setArquivo($arquivo)
        {
            $extensao = strtolower(substr($arquivo, -4)); //pega a extensão do arquivo
            if($extensao == 'jpeg'){
                $novoNome = md5(time()) . '.'.$extensao; // define o novo nome do arquivo
            }else{
                $novoNome = md5(time()) . $extensao; // define o novo nome do arquivo
            }
            $this->arquivo = test_imput($novoNome);
        }

        public function getData()
        {
            return $this->data;
        }

        public function setData($data)
        {
            $this->data = $data;
        }

        public static function cadastrarAnuncio($arquivo){
            $conectar = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conectar, 'database');

            $diretorio = "../uploads/"; //define o diretorio para onde será enviado o arquivo
            move_uploaded_file($arquivo, $diretorio . getArquivo());//efetua o upload

            $query = mysqli_query($conectar,"INSERT INTO evento (nome, data, imagem, descricao) 
                                                    VALUES ('".getNome()."','".getData()."','".getArquivo()."','".getDescricao()."')");
            if ($query) {
                echo 'Cadastrado com sucesso';
                header("Location: desenvolvimento/painel.php");
            } else {
                echo 'Não foi possivel efetuar o cadastro.';
                echo mysqli_error($conectar);
            }
        }

        public static function buscarAnuncio($nome){

            $conectar = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conectar, 'database');

            $busca = mysqli_query($conectar, "SELECT * FROM evento WHERE nome = '$nome'");
            $registro = mysqli_fetch_array($busca);
            if ($busca) {
                return $registro;
            }
            else{
                return false;

            }

        }

        public static function editarAnuncio($nome, $opcao, $escolha, $documento, $arquivoName, $arquivoTpm_Name, $data, $descricao, $name)
        {
            $conectar = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conectar, 'database');
            $busca = mysqli_query($conectar, "SELECT * FROM evento WHERE nome = '$nome'");
            $registro = mysqli_fetch_array($busca);
            $arquivo = $registro['imagem'];

            if ($registro != false) {
                if ($escolha == "Salvar Alterações") {
                    if ($opcao == "sim") {
                        if (isset($documento)) {
                            unlink("../uploads/" . "$arquivo");//deletando a imagem antiga do servidor
                            $extensao = strtolower(substr($arquivoName, -4)); //pega a extensão do arquivo
                            if ($extensao == 'jpeg') {
                                $novoNome = md5(time()) . '.' . $extensao; // define o novo nome do arquivo
                            } else {
                                $novoNome = md5(time()) . $extensao; // define o novo nome do arquivo
                            }

                            $diretorio = "../uploads/"; //define o diretorio para onde será enviado o arquivo

                            move_uploaded_file($arquivoTpm_Name, $diretorio . $novoNome);//efetua o upload

                            $query = mysqli_query($conectar, "UPDATE evento
                                                  SET data = '$data', imagem = '$novoNome', descricao = '$descricao'
                                                  WHERE nome = '$nome'");
                            if ($query) {
                                echo 'Salvo com sucesso!';
                                header("Location: desenvolvimento/painel.php");
                            } else {
                                echo 'Não foi possivel salvar a edição.';
                                echo mysqli_error($conectar);
                            }

                        } else {
                            echo '<p> arquivo não selecionado</p>';
                        }
                    } else {
                        $query = mysqli_query($conectar, "UPDATE evento
                                                  SET data = '$data', descricao = '$descricao'
                                                  WHERE nome = '$name'");
                        if ($query) {
                            echo 'Salvo com sucesso!';
                            header("Location: desenvolvimento/painel.php");
                        } else {
                            echo 'Não foi possivel salvar a edição.';
                            echo mysqli_error($conectar);
                        }

                    }
                } else {
                    //Excluir evento
                    mysqli_query($conectar,"DELETE FROM evento WHERE nome = '$nome'");
                    unlink("../uploads/" . "$arquivo");//deletando a imagem antiga do servidor
                    header('Location: ../index.php');
                }
            }
            else{
                echo '<p> Registro não encontrado!</p>';
                echo mysqli_error($conectar);
            }

        }

        public static function visualizarAnuncio()
        {
        }

}
?>