SELECT nomeproduto, nomecategoria
FROM produtos AS p INNER JOIN categorias AS c
ON p.categoriaID = c.categoriaID