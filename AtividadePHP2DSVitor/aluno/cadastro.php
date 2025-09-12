
<?php

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

                <label for="Rm">RM</label>
                <input class = "alL" type = "int" name = "rm" id = "rm" placeholder = "Informe o RM" required>

                <label for="Cpf">CPF</label>
                <input class = "alL" type = "int" name = "cpf" id = "cpf" placeholder = "Informe o CPF" required> 

            </form>

            <button class = "btnCadastrar" >Cadastrar</button>
        </div>
    </div>

</body>
</html>