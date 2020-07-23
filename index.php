<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8455a3d02b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
    <title>Jogos | Coleção</title>
</head>
<body id = "corpo">
<div class='divisao'>
    <?php
        $nome = isset($_GET['nome']) ? $_GET['nome'] : "Sem nome";
        $sobreNome = isset($_GET['sobreNome']) ? $_GET['sobreNome'] : "Sem Sobrenome";
        $email = isset($_GET['email']) ? $_GET['email'] : "Sem email";
        $opcao = isset($_GET['opcao']) ? $_GET['opcao'] : "Sem opção";

        switch($opcao){
            case "info":
                echo('<strong>Tipo: </strong>Informações');
            break;
            case 'elog':
                echo('<strong>Tipo: </strong>Elogios');
            break;
            case "sug":
                echo('<strong>Tipo: </strong>Sugestões');
            break;
            default:
            echo('ERRO!!<br>');
            echo('Sem opção escolhida!');        
        }

        $msg = isset($_GET['msg']) ? $_GET['msg'] : 'Sem mensagem';

    ?>

    <a href="index.html" class="btn btn-primary m-3">Voltar</a>
</div>
</body>
</html>



