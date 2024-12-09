<?php
    function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = ""){
        echo "Destinatários: ".$destinatarios."<br>";
        echo "CC: ".$cc."<br>";
        echo "Assunto: ".$assunto."<br";
        echo "Mensagem: ".$mensagem."<br>";
    }
    /*Convencional, respeitando a ordemo dos parâmetros*/
    sendEmail(
        "reboucasfrancisco84@gmail.com",
        "teste@teste.com",
        "Argumentos nomeados",
        "Dominando a feature de argumentos nomados em PHP 8"
    );
    echo "<hr>";
    sendEmail(
        "reboucasfrancisco84@gmail.com",
        "teste@teste.com",
        "Argumentos nomeados",
        "Dominando a feature de argumentos nomados em PHP 8"
    );
?>