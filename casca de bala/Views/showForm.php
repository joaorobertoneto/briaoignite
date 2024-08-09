<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmazen Estoque</title>
    <style>
        * {
            box-sizing: border-box;
            margin: unset;
        }

        body {
            background: linear-gradient(180deg, rgba(255, 211, 243, 1) 0%, rgba(255, 219, 235, 1) 50%, rgba(213, 205, 255, 1) 100%);
            background-repeat: no-repeat;
            font-family: 'Lato';
        }

        .wrapper {
            display: grid;
            grid-template-rows: 8vh auto;
            width: 100%;
            height: 951px;
        }

        .header {
            background-color: #FFF8FF;
            border-radius: 0 0 50px 50px;
            box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header h3 {
            margin: 0;
        }

        .bloco {
            background-color: #FFF8FF;
            border-radius: 3.625rem;
            margin: 5rem 7rem;
            padding: 3.6rem 3rem;
        }

        h1, h2, h3 {
            color: #000;
            font-weight: 900;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 2.75rem;
        }

        h2 {
            font-size: 2rem;
        }

        h3 {
            font-size: 1.75rem;
        }

        .roxo, p, select {
            color: #796C74;
        }

        .destaque {
            color: #C98FFF;
        }

        .cinza {
            color: #796C74;
            font-size: 14px;
        }

        .roxo {
            background-color: #C98FFF;
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            transition: background-color 0.3s;
        }

        .roxo:hover {
            background-color: #AF71E9;
        }

        a {
            text-decoration: none;
            color: white;
        }
        .form-cinza {
    background-color: #D9D9D9;
    border-radius: 30px 0 0 30px;
    padding: 10px;
    width: calc(100% - 60px); 
    border: none;
    display: inline-block;
    vertical-align: middle; 
}

.pesquisa {
    border-radius: 0 30px 30px 0;
    padding: 10px;
    width: 40px; 
    height: 36px;
    display: inline-block;
    border: none;
    vertical-align: middle; 
    margin-left: -5px; 
}


        .d-flex.flex-wrap {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(188px, 1fr));
    gap: 20px; 
}

.card {
    max-width: 100%;
    box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    padding: 1rem;
    margin-top:10px;
}

        .card img {
            border-radius: 5px;
            width: 150px;
            height: 150px;
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 5px;
            font-size: 12px;
        }

        @media (max-width: 767px) {
            .bloco {
                margin: 3rem 1rem;
                padding: 2rem 1rem;
            }

            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1.25rem;
            }

            .roxo, p, select {
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <main>
        <div class="wrapper">
            <div class="header">
                <div class="logo">
                    <h3>Pharmazen</h3>
                </div>
                <div class="busca">
                <form class="d-flex align-items-center" action="/search" method="post">
    <input type="text" class="form-cinza" placeholder="Buscar...">
    <button class="btn roxo pesquisa" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-search-heart-fill" viewBox="0 0 16 16">
            <path
                d="M6.5 13a6.47 6.47 0 0 0 3.845-1.258h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1A6.47 6.47 0 0 0 13 6.5 6.5 6.5 0 0 0 6.5 0a6.5 6.5 0 1 0 0 13m0-8.518c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018" />
        </svg>
    </button>
</form>

                </div>
            </div>

            <div class="bloco">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Disponível no Estoque</h1>
                        <a href="expensive.php">Buscar mais Caro</a>
                        <a href="quantity.php">Buscar mai    Quantidade</a>

                        <div class="mt-3">
                            <a href="http://localhost/ci4/public/">
                                <button class="btn roxo py-2">Adicionar produtos</button>
                            </a>
                            <a href="http://localhost/ci4/public/expensive">
                                <button class="btn roxo py-2">Remédio mais caro</button>
                            </a>
                            <a href="http://localhost/ci4/public/most_quantity">
                                <button class="btn roxo py-2">Remédio com maior quantidade</button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Placeholder for additional content or images -->
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="d-flex flex-wrap justify-content-center">
                        <?php foreach($resultado as $produto): ?>
                        <div class="card">
                            <table>
                                <tbody> 
                                    <tr>
                                        <td class="fw-bold">Laboratório: <?= $produto['laboratorio'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="cinza">Nome: <?= $produto['nome'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold fs-6">Preço: R$<?= $produto['preco'] ?></td>
                                    </tr>
                                    <tr>
                                        <td class="cinza">Quantidade: <?= $produto['quantidade'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <button class="btn btn-sm roxo txt-sm">
                                                <a class="edit" href="/editar/<?= $produto['id'] ?>">Editar</a>
                                            </button>
                                            <form action="/delete/<?= $produto['id'] ?>" method="post" style="display:inline;">
                                                <button class="btn btn-sm roxo txt-sm" type="submit">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>
</html>
