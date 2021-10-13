SELECT SUM(valor_pedido) AS valor_total
FROM pedidos
WHERE YEAR(data_pedido) = "2006"