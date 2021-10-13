SELECT nomeproduto, nomefornecedor
FROM produtos AS p INNER JOIN fornecedores AS f
ON p.fornecedorID = f.fornecedorID