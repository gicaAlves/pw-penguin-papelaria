use penguin_papelaria;

insert into categoria
values(default,'Escolar'),
(default, 'Escritório'),
(default, 'Universitário'),
(default, 'Presentes'),
(default, 'Mochilas e Bolsas');

insert into produtos
values(default, 3, 'Caderno Pequeno Milimalista', 16, 'Minimalismo, detalhes e cores suaves. Este modelo possui um elástico e porta caneta laterais para melhor praticidade.', 0, 'caderno_minimalista', false),
(default, 1, 'Caneta Gatinho', 8, 'Delicada, confortável e fofa. Possui cores pasteis, orelhinhas e gatinhos com diferentes expressões.', 20, 'caneta_gatinho', false),
(default, 1, 'Marca-texto Emoji', 6, 'Coloridos, bonitinhos e pequenos. Pequenos, faceis de levar, divertidos e também colecionáveis.', 20, 'marca-texto_emoji', true),
(default, 3, 'Marca Página Bichinho', 10, 'Artesanal, divertido e personalizado. Fofinhos e detalhados, são feitos de biscut com muito carinho e capricho.', 10, 'marcador-bichinhos', true);


##para a view-->
create view vw_cat_prod
as
select 
	categoria.cod_cat,
    categoria.nome_cat,
    produtos.cod_prod,
    produtos.nome_prod,
    produtos.preco_prod,
    produtos.desc_prod,
    produtos.quant_prod,
    produtos.img_prod,
    produtos.nov_prod

from categoria inner join produtos 
	on categoria.cod_cat = produtos.cod_cat;
    
drop view vw_cat_prod;
drop table produtos;

#outra forma de selecionar toda informação das tabelas é: "SELECT nometabela * , ..   e pronto ia dar certo! 🤣🤗🎇 #



insert into usuario
values(default, 'Giovanna', 'gigicacagi2016@pato.com', 'quackquack', true, '000000011', 395),
(default, 'Lucca', 'lu_penguin@pato.com', 'jack123', true, '010101010', 570),
(default, 'Taz', 'baby_taz@pato.com', 'furacao', false, '123456789', 188),
(default, 'Piu-piu', 'baby_piupiu@pato.com', 'vovozinha', false, '121212120', 206),
(default, 'Patolino', 'baby_patolino@pato.com', '2234444', false, '040404040', 230);





CREATE USER 'penguin-papelaria'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
GRANT ALL PRIVILEGES ON penguin_papelaria.* TO 'penguin-papelaria'@'localhost' WITH GRANT OPTION;

