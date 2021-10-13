SELECT ps.nomestatus, SUM(valor_pedido) valor_total_pedidos
FROM pedidos_status ps
INNER JOIN pedidos p
ON ps.statusID = p.status_pedido
GROUP BY ps.statusID
HAVING valor_total_pedidos >= 6000