SELECT nomeproduto, precounitario, tempoentrega
FROM produtos
WHERE precounitario BETWEEN 5 AND 12
ORDER BY precounitario ASC