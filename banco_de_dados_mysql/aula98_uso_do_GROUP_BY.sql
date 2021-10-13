SELECT tempoentrega, COUNT(produtoID) AS quantidade_produtos
FROM produtos
WHERE tempoentrega < 30
GROUP BY tempoentrega
ORDER BY quantidade_produtos