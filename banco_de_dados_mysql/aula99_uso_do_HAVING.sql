SELECT status_pedido, SUM(valor_pedido) AS valor_total
FROM pedidos
GROUP BY status_pedido
HAVING valor_total >= 6000