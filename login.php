<?php

if(isset($_POST['nome']) || isset($_POST['senha'])){

    if(stelen($_POST['nome']) == 0){
        echo "Preencha seu nome";
    }else if(stelen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }else{
        $nome = $mysqli ->real_escape_string($_POST['nome']);
        $senha = $mysqli ->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";
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
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="form-group"> 
                <label for="senha">Senha:</label>
                <input type="text" id="senha" name="senha" required>
            </div>
            
            <a href = "token.php">Esqueci minha senha</a>
            <button type="submit" name="submit" class="submit">Enviar</button>   
            <a href = "cadastro.php">Ainda não tem cadastro? Cadastra-se aqui</a>
        </form>
    </div>
</body>

</html>