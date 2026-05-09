CREATE DATABASE catalogo_series;

USE catalogo_series;

CREATE TABLE series (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    ano INT,
    estilo VARCHAR(50),
    foto VARCHAR(255)
);

INSERT INTO series (nome, ano, estilo, foto) VALUES
('Breaking Bad', 2008, 'Drama', 'imagens/Breaking_Bad.jpg'),

('Dark', 2017, 'Ficção', 'imagens/Dark.jpg'),

('The Walking Dead', 2010, 'Terror', 'imagens/The_Walking_Dead.jpg'),

('Stranger Things', 2016, 'Terror', 'imagens/Stranger_Things.jpg'),

('La Casa de Papel', 2017, 'Ação', 'imagens/La_Casa_de_Papel.jpg'),

('The Boys', 2019, 'Ação', 'imagens/The_Boys.jpg'),

('Sharkinho e o Mundo Mágico', 2024, 'Drama', 'imagens/Sharkinho_e_o_Mundo_Mágico.jpg');