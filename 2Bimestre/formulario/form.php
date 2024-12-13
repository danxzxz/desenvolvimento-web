<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   $nome = $_POST['nome'];
   $email = $_POST['email'];

    if (empty($nome) || empty($email)) 
    {
        echo "Todos os campos são obrigatórios!<br>";
    } 
    elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    {
        echo "Formato de email inválido!<br>";
    }
    else
    {
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Email: " . htmlspecialchars($email);
        header("Location: agradecimento.php");
        exit(); 
    }
}