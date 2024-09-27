<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php 
         $nome = $_POST['nome'];
         $estado = $_POST['estado'];
         $cidade = $_POST['cidade'];
         $email = $_POST['email'];
         $mensagem = $_POST['mensagem'];

        echo"<h1>Dados Enviados</h1>";
        echo"<p><strong>Nome completo: </strong> $nome</p>";
        echo"<p><strong>Estado: </strong>$estado</p>";
        echo"<p><strong>Cidade: </strong>$cidade</p>";
        echo"<p><strong>E-mail: </strong>$email</p>";
        echo"<p><strong>Mensagem: </strong>$mensagem</p>";
    ?>
</body>
</html>