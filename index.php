<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padaria Bumba</title>
    
    <style>
        #navbar {
            margin: 0px;
            padding: 15px;
            background-color: #D2691E; 
            text-align: center;
        }

        .h1 {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .h2 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .flex {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .title {
            background-color: rgb(255, 255, 255);
            padding: 20px;
            text-align: center;
        }

        .imagem {
            margin: 20px;
            width: 250px; 
            height: 200px; 
        }

        .footer {
            background-color: #D2691E;
            padding: 20px;
            text-align: center;
            color: white;
        }

        .preco {
            text-align: center;
            font-size: 18px;
            color: #8B4513; 
        }

        .card {
            border: 2px solid #8B4513;
            margin: 10px;
            padding: 10px;
            background-color: #FFF8DC; 
            text-align: center;
        }

        .cabecalho {
            text-align: center;
            color: black;
        }

        .button {
            background-color: #8B4513;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .button:hover {
            background-color: #A0522D; 
        }

        .contato {
            margin: 10px;
            background-color: black;
            width: 370px;
            border: solid;
            color: aliceblue;
        }

        #textbox {
            height: 20px;
        }

        .ajuste {
            background-color: gray;
            height: 20px;
        }
    </style>
</head>

<body>
    <header>
        <div id="navbar">
            <div class="flex">
                <img id="PadariaBumba" src="padaria-logo.png" alt="Logo Padaria Bumba">
                <h1>Bem-vindo à Padaria Bumba!</h1>
            </div>
        </div>

        <div class="title">
            <h1>Produtos da Padaria Bumba</h1>
            Aqui você encontra os pães e doces mais fresquinhos da cidade!
            <br><br><br>
            <h2>Produtos Disponíveis</h2>
        </div>
    </header>

    <main>
        <section>
            <div class="flex">
                <div class="card">
                    <img class="imagem" src="pao_frances.jpg" alt="Pão Francês">
                    <h3>Pão Francês</h3>
                    <p class="preco">R$ 0,80</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="pao_de_queijo.jpg" alt="Pão de Queijo">
                    <h3>Pão de Queijo</h3>
                    <p class="preco">R$ 2,50</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="croissant.jpg" alt="Croissant">
                    <h3>Croissant</h3>
                    <p class="preco">R$ 4,00</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="bolo_de_fubá.jpg" alt="Bolo de Fubá">
                    <h3>Bolo de Fubá</h3>
                    <p class="preco">R$ 12,00</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="torta_de_frango.jpg" alt="Torta de Frango">
                    <h3>Torta de Frango</h3>
                    <p class="preco">R$ 8,00</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="biscoito_de_maizena.jpg" alt="Biscoito de Maizena">
                    <h3>Biscoito de Maizena</h3>
                    <p class="preco">R$ 5,00</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="pao_de_alegria.jpg" alt="Pão de Alegria">
                    <h3>Pão de Alegria</h3>
                    <p class="preco">R$ 3,00</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="pao_doce.jpg" alt="Pão Doce">
                    <h3>Pão Doce</h3>
                    <p class="preco">R$ 3,50</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="rosca_de_coco.jpg" alt="Rosca de Coco">
                    <h3>Rosca de Coco</h3>
                    <p class="preco">R$ 7,00</p>
                    <button class="button">Comprar</button>
                </div>

                <div class="card">
                    <img class="imagem" src="torta_de_limão.jpg" alt="Torta de Limão">
                    <h3>Torta de Limão</h3>
                    <p class="preco">R$ 15,00</p>
                    <button class="button">Comprar</button>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer">
            Todos os direitos reservados a Padaria Bumba &copy; 2024
        </div>
    </footer>
</body>
</html>