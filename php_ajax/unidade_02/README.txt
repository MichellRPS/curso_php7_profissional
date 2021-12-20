Curso 05 - PHP com AJAX

197. Introdução ao AJAX

    AJAX

Definição: Metodologia de programação para comunicação entre navegador e servidor sem mudança de URL.
    
Significado do termo: Acrônimo para Assíncrono, JavaScript And XML.
    
No começo, a comunicação entre navegador e servidor era baseada em dados de arquivos XML, porém hoje o formato JSON é muito utilizado, pois é mais leve.
    
    Comunicação entre Cliente (Navegador do usuário) e Servidor de Web:
    
Modo tradicional: Quando o usuário muda a navegação, o navegador envia requisição ao servidor, que retorna um arquivo HTML. O navegador recarrega a página para passar as informações, mesmo que tenha mudado apenas um pequeno dado.

Metodologia AJAX: A comunicação entre navegador e servidor acontece para alterar parte da página sem alteração de URL, solicitando arquivos. Os arquivos mais comuns são: HTML, TXT, XML ou JSON.

Boa parte da metodologia AJAX é baseada em uma API (Application Programming Interface) chamada XMLHttpRequest, que se tornou padrão entre todos os navegadores mais recentes.

O conceito da API XMLHttpRequest foi criado pela Microsoft para o produto Outlook Web Access, chamado na época de ActiveXObject.

O Internet Explorer 5 foi o primeiro navegador que trouxe o conceito de criar um objeto para levar e trazer dados sem troca de URL.

    Exemplo da criação de um objeto de requisição XMLHttpRequest:

Se o usuário estiver usando um dos navegadores: Internet Explorer 7 (ou superior), Firefox ou Safari, os mesmos usarão a API XMLHttpRequest para criar o objeto.

Se o usuário estiver usando o navegador Internet Explorer 5 ou 6, o objeto deve ser criado pela API ActiveXObject.

    JQuery

Definição: Biblioteca usada para realizar requisições para arquivos de texto, XML ou JSON.

    Resumo AJAX

É uma metodologia de programação em que se usa APIs para buscar arquivos no servidor sem recarregar toda a página, mas apenas arquivos que mudarão o conteúdo da página ou aplicativo.