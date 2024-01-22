<!DOCTYPE html>
<html>

<head>
    <title>Página com Caixas de Texto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Preencha os dados:</h1>
        <form method="POST" action="message.php">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" class="form-control" name="sobrenome" id="sobrenome"
                    placeholder="Digite o sobrenome">
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="text" class="form-control" name="idade" id="idade" placeholder="Digite a idade">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>