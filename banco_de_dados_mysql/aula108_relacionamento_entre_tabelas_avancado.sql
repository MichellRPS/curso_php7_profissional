SELECT nomecompleto, telefone, email
FROM clientes c
INNER JOIN pedidos p ON c.clienteID = p.clienteID
INNER JOIN pedidos_item pi ON p.pedidoID = pi.pedidoID
WHERE produtoID = 2