SELECT nomeproduto, precounitario, tempoentrega
FROM produtos
WHERE precounitario = 12 AND tempoentrega = 5
ORDER BY precounitario ASC
LIMIT 10