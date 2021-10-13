SELECT nomeproduto, precounitario, tempoentrega
FROM produtos
WHERE tempoentrega NOT IN (5, 8)
ORDER BY precounitario ASC