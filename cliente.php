<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padaria Bumba - Comprar Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div id="navbar">
            <div class="flex">
                <img class="PadariaBumba" src="logo.png" alt="Logo Padaria Bumba">
                <h1>Bem-vindo à Padaria Bumba!</h1>
            </div>
        </div>
        <div class="title">
            <h1>Produtos Disponíveis para Compra</h1>
            Aqui você encontra os pães e doces mais fresquinhos da cidade!
            <br><br><br>
            <a href="selection.php" class="button">Voltar</a>
            <h2>Produtos Disponíveis</h2>
        </div>
    </header>

    <main>
        <section>
            <div class="flex">
                <?php
                $sql = "SELECT * FROM produtos WHERE quantidade_estoque > 0";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<div class='card'>
                                <h3>{$row['nome']}</h3>
                                <p>{$row['descricao']}</p>
                                <p class='preco'>R$ {$row['preco']}</p>
                                <p>Estoque: {$row['quantidade_estoque']} unidades</p>
                                <form method='POST' action='comprar.php'>
                                    <input type='hidden' name='id_produto' value='{$row['id_produto']}'>
                                    <button type='submit' class='button' onclick=\"return confirm('Confirmar compra de {$row['nome']}?');\">Comprar</button>
                                </form>
                              </div>";
                    }
                } else {
                    echo "<p>Nenhum produto disponível no momento.</p>";
                }
                ?>
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
