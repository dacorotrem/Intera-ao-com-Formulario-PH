<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"] ?? "sem nome";
            $sobrenome = $_REQUEST["sobrenome"] ?? "desconhecido";
            echo "PRAZER TE CONHECER, <strong>$nome $sobrenome</strong> Este e o meu site";
        ?>
        <p><a href="javascript:history.go(-1)">voltar para a pagina anterior</a></p>
    </main>
</body>
</html>