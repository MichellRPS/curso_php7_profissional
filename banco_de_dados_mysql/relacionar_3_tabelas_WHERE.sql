SELECT nomeproduto, nomecategoria, nomefornecedor
FROM produtos AS p, categorias AS c, fornecedores AS f
WHERE p.categoriaID = c.categoriaID
AND p.fornecedorID = f.fornecedorID