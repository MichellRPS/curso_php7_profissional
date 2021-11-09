<?php
    // Curso IV - PHP Integração com Banco de Dados - Avançado

    // Compreender operação de logout (aula 153)
    // require_once("../../conexao/conexao.php");
    // para desconfigurar uma variável de sessão, é preciso a sessão seja inicializada
    session_start();
    // Proteger páginas internas (aula 158) - "user_portal"
    unset($_SESSION["user_portal"]);
    header("location:login.php");
    // Criar página de logout (aula 160)
?>