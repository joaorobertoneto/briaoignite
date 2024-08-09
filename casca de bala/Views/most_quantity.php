<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remédio com Maior Quantidade</title>
    <style>
        * {
            box-sizing: border-box;
            margin: unset;
            padding: unset;
        }

        body {
            background: rgb(255, 211, 243);
            background: linear-gradient(180deg, rgba(255, 211, 243, 1) 0%, rgba(255, 219, 235, 1) 50%, rgba(213, 205, 255, 1) 100%);
            font-family: 'Lato';
            color: #796C74;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .wrapper {
            background-color: #FFF8FF;
            border-radius: 3.625rem;
            padding: 2rem 4rem;
            box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);
            text-align: center;
            width: 80%;
            max-width: 600px;
        }

        h1 {
            color: #C98FFF;
            font-size: 2.75rem;
            font-weight: 900;
            margin-bottom: 2rem;
        }

        p {
            font-size: 1.25rem;
            font-weight: 400;
            margin: 1rem 0;
            color: #796C74;
        }

        p strong {
            font-weight: 700;
        }

        .button-container {
            margin-top: 2rem;
        }

        .button {
            background-color: #C98FFF;
            color: white;
            padding: 0.75rem 2rem;
            border: none;
            border-radius: 3.625rem;
            font-size: 1.125rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .button:hover,
        .button:active {
            background-color: #AF71E9;
        }

    </style>
</head>
<body>
    <div class="wrapper">
        <h1>Remédio com Maior Quantidade</h1>
        <p><strong>Nome:</strong> <?= $produtos['nome'] ?></p>
        <p><strong>Laboratório:</strong> <?= $produtos['laboratorio'] ?></p>
        <p><strong>Quantidade:</strong> <?= $produtos['quantidade'] ?></p>
        <p><strong>Preço:</strong> R$ <?= $produtos['preco'] ?></p>
        <div class="button-container">
            <a href="/showForm" class="button">Voltar</a>
        </div>
    </div>
</body>
</html>
