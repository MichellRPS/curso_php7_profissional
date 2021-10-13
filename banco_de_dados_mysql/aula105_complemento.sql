SELECT nomecategoria, p.categoriaID, count(produtoID) AS quantidade_produtos
FROM produtos AS p
INNER JOIN categorias AS c
ON p.categoriaID = c.categoriaID
GROUP BY p.categoriaID