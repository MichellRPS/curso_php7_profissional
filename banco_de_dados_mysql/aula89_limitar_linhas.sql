SELECT
	nomeproduto, precounitario, tempoentrega
FROM
	produtos
ORDER BY
	precounitario ASC, tempoentrega ASC
LIMIT
	10