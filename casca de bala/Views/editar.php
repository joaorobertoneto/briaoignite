<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    * {
        box-sizing: border-box;
        margin: unset;
    }

    body {
        background: rgb(255, 211, 243);
        background: linear-gradient(180deg, rgba(255, 211, 243, 1) 0%, rgba(255, 219, 235, 1) 50%, rgba(213, 205, 255, 1) 100%);
        background-repeat: no-repeat;
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
        margin: 0;
    }

    .bloco {
        background-color: #FFF8FF;
        border-radius: 3.625rem;
        margin: 5rem 7rem;
        padding: 3.6rem 3rem;
    }

    h1,
    h2,
    h3 {
        color: #000;
        font-family: Lato;
        font-size: 2.75rem;
        font-weight: 900;
    }

    h2 {
        font-size: 2rem;
        font-weight: 900;
    }

    h3 {
        font-size: 1.75rem;
        margin-bottom: 0;
    }


    .roxo,
    p,
    select {
        font-family: 'Lato', sans-serif;
        font-size: 1.125rem;
        font-weight: 400;
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
        border: 0;
        color: white;
    }

    .txt-sm {
        font-size: 1rem;
    }

    .form-cinza {
        background-color: #D9D9D9;
        border-radius: 30px;
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
    }

    .pesquisa {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 40px;
        border-top-right-radius: 40px;
    }

    .roxo:hover,
    .roxo:active {
        background-color: #AF71E9 !important;
        border: 0;
        color: white !important;
    }

    select {
        display: block;
        width: 100%
    }

    .card {
        border-radius: 10px;
        padding: 1rem;
        min-width: 188px;
        width: 20%;
        height: auto;
        box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);
    }

    .card-submit {
        border-radius: 10px;
        padding: 1rem;
        background-color: white;
        box-shadow: 0px 4px 4px 3px rgba(0, 0, 0, 0.25);
    }


    .card img {
        margin: auto;
        border-radius: 5px;
        width: 150px;
        height: 150px;
        margin-bottom: 10px;
    }

    table {
        user-select: none;
        width: 100%;
        height: auto;
        border-collapse: collapse;
    }

    td {
        padding-left: 2px;
        font-size: 12px;
    }


    @media (max-width: 767px) {
        .bloco {
            margin: 3rem 3rem;
            padding: 2rem 2rem;
        }

        h1 {
            font-size: 2rem;
        }

        h2 {
            font-size: 1.25rem;

        }

        .roxo,
        p,
        select {
            font-size: 0.8rem;
        }
    }
</style>
    <title>Editar produtos</title>
</head>

<body>
    <main>
        <div class="wrapper">
            <div class="header d-flex align-items-center justify-content-between px-5">
                <div class="logo d-flex align-items-center">
                    <div class="nome ms-2">
                        <h3>Pharmazen</h3>
                    </div>
                </div>
                <div class="busca ms-auto">
                    <form class="d-flex flex-nowrap" action="pesquisar.php" method="post">
                        <input type="text" class="form-control form-cinza">
                        <button class="btn roxo pesquisa">
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
                        <h1>Editar remédio</h1>
                        <p>Lorem ipsum.</p>
                        </div>
                        
                        <div class="col-md-4">
                        
                        </div>
                        
                        <div class="row mt-1">
                            <div class="card-submit">
                        
                                   <form action="/update/<?= $produto['id'] ?>" method="post">
                                    <div class="form-group">
                                        <div class="col-md-4 mb-3">
                                            <label class="fw-bold" for="marcaInputLabel">Nome:</label>
                                            <input type="text" class="form-control" id="marcaInputLabel" name="nome" value="<?= $produto['nome'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 mb-3">
                                            <label class="fw-bold" for="modeloInputLabel">Laboratório:</label>
                                            <input type="text" class="form-control" id="modeloInputLabel" name="laboratorio" value="<?= $produto['laboratorio'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 mb-3">
                                            <label class="fw-bold" for="KmInputLabel">Preço:</label>
                                            <input type="number" class="form-control" id="KmInputLabel" name="preco" value="<?= $produto['preco'] ?>" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 mb-3">
                                            <label class="fw-bold" for="AnoInputLabel">Quantidade:</label>
                                            <input type="text" class="form-control" id="AnoInputLabel" name="quantidade"value=" <?= $produto['quantidade'] ?>" required >
                                        </div>
                                    </div>
                                    <button type="submit" class="btn roxo py-2" name="submit">Editar produto</button>
                                </form>
                        
                        
                            </div>
                        
                        </div>
                        </div>
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