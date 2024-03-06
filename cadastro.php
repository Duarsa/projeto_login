<?php

include('config.php');

if(isset($_POST['submit'])){

    if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['telefone']) || isset($_POST['data_nasc']) || isset($_POST['sexo']) || isset($_POST['cidade']) || isset($_POST['estado']) 
|| isset($_POST['endereco'])){

    if(strlen($_POST['nome']) == 0){
        echo "Preencha seu nome";
    }else if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    }else if(strlen($_POST['telefone']) == 0){
        echo "Preencha seu telefone";
    }else if(strlen($_POST['data_nasc']) == 0){
        echo "Preencha sua data de nascimento";
    }else if(strlen($_POST['sexo']) == 0){
        echo "Preencha seu sexo";
    }else if(strlen($_POST['cidade']) == 0){
        echo "Preencha sua cidade";
    }else if(strlen($_POST['estado']) == 0){
        echo "Preencha seu estado";
    }else if(strlen($_POST['endereco']) == 0){
        echo "Preencha seu endereço";
    }else{
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];


        #$result = mysqli_query($conexao, "INSERT INTO `usuarios` (`nome`, `email`, `telefone`, `sexo`, `data_nasc`, `cidade`, `estado`, `endereco`) VALUES 
        #('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");

    }
}

        
}




?> 




<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"],
        input[type="tel"],
        input[type="date"] {
            width: calc(100% - 10px);
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .radio-group {
            margin-top: 5px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>



</head>


<body>
    <div class="container">
        <form action="cadastro.php" method="POST" class="formLOgin">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="form-group"> 
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
            </div>

            <div class="form-group">
                <label for="data-nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nasc" name="data_nasc" required>
            </div>

            <div class="form-group">
                <label for="sexo">Sexo:</label>
                <input type="text" id="sexo" name="sexo" required>
                </div>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" required>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
            </div>

            <a href = "login.php">Faça Login</a>
            <button type="submit" name="submit" class="submit">Enviar</button>   
        </form>
    </div>
</body>

</html>