SELECT nomecompleto, count(pedidoID) AS numero_pedidos
FROM clientes c
LEFT JOIN pedidos p
ON c.clienteID = p.clienteID
GROUP BY nomecompleto
ORDER BY numero_pedidos DESC