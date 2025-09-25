
<?php

    require "aluno.class.php"; 
    $aluno = new Aluno();
    $con = $aluno -> conecta();

    if ($con) {
        if(isset($_POST["btnCadastrar"])){
            $nome = $_POST["nome"];
            $rm = $_POST["rm"];
            $cpf = $_POST["cpf"];
            $email = $_POST["email"];


            if (!$aluno -> consulta(email)){
                $aluno -> cadastrar($rm, $nome, $email, $cpf);
                echo "Aluno Cadastrado!";
            }else{

                echo "Aluno Já Cadastrado!";

            }

        }

    }else{
        echo "Banco Indisponível";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id = "container">
        <div id = "form">

            <h1> Cadastro de Aluno </h1>
            <form class = "form" action = "processa php" method = "post">
                <label for="name">Nome</label>
                <input class = "alL" type = "text" name = "name" id = "name" placeholder = "Nome completo" required> 

                <label for="email">Email</label>
                <input class = "alL" type = "email" name = "email" id = "email" placeholder = "Informe o email" required>

                <label for="rm">RM</label>
                <input class = "alL" type = "int" name = "rm" id = "rm" placeholder = "Informe o RM" required>

                <label for="cpf">CPF</label>
                <input class = "alL" type = "int" name = "cpf" id = "cpf" placeholder = "Informe o CPF" required> 

            </form>

            <button class = "btnCadastrar" >Cadastrar</button>
        </div>
    </div>

</body>
</html>