# padaria-bumba
Desenvolvimento de um CRUD para nossa padaroa Bumba meu Pão

# codigo mysql

# create db
CREATE DATABASE padaria_bumbameupao;
USE padaria_bumbameupao;

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha_hash VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(255),
    data_contratacao DATE NOT NULL
);

CREATE TABLE produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade_estoque INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario)
);

CREATE TABLE clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha_hash VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    endereco VARCHAR(255)
);

CREATE TABLE pedidos (
    id_pedido INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_produto INT NOT NULL,
    quantidade INT NOT NULL,
    data_pedido DATETIME NOT NULL,
    status VARCHAR(50) NOT NULL,
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_produto) REFERENCES produtos(id_produto)
);

# insert usuario
USE padaria_bumbameupao;

INSERT INTO usuarios (id_usuario, nome, email, senha_hash, telefone, endereco, data_contratacao) VALUES (1, 'Joao', 'privjoao@gmail.com', 'Joãolindo123', '(47)996700584', 'Joinville115', '2023/08/09');

# insert produtos
USE padaria_bumbameupao;

INSERT INTO produtos (id_produto, nome, descricao, preco, quantidade_estoque, id_usuario) VALUES
(1, 'Pão Francês', 'Pão francês fresquinho, com casca crocante e miolo macio.', 16.50, 50, 1),
(2, 'Pão De Queijo', 'Tradicional pão de queijo mineiro, crocante por fora e macio por dentro.', 2.50, 20, 1),
(3, 'Croissant', 'Croissant leve e folhado, com manteiga na medida certa.', 4.00, 10, 1),
(4, 'Bolo de Fubá', 'Bolo de fubá fofinho, com sabor caseiro e toque de erva-doce.', 12.00, 5, 1),
(5, 'Torta de Frango', 'Torta de frango cremosa, com recheio temperado e massa leve.', 8.00, 12, 1),
(6, 'Biscoito de Maizena', 'Biscoito de maizena leve e amanteigado, que derrete na boca.', 5.00, 30, 1),
(7, 'Pão de Alegria', 'Pão de Alegria macio, recheado com queijo cremoso.', 3.00, 30, 1),
(8, 'Pão Doce', 'Pão doce macio e saboroso, perfeito para acompanhar o café.', 3.50, 40, 1),
(9, 'Rosca de Coco', 'Rosca macia e doce, com sabor suave de coco e cobertura açucarada.', 7.00, 25, 1),
(10, 'Torta de Limão', 'Torta de limão refrescante, com creme cítrico e base crocante.', 15.00, 18, 1);