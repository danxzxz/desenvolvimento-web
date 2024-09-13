    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os dados do formulário
            $nome = trim($_POST['nome']);
            $data_nascimento = trim($_POST['data_nascimento']);
            $email = trim($_POST['email']);
            $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
            $pais = trim($_POST['pais']);
            $comentarios = trim($_POST['comentarios']);

        // Validação básica
            if (empty($nome) || empty($data_nascimento) || empty($email)) {
                echo "Todos os campos são obrigatórios!";
            } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                echo "Formato de email inválido!";
        } else {
            // Exibe os dados recebidos
            echo "<h1>Dados Recebidos</h1>";
            echo "Nome: " . htmlspecialchars($nome) . "<br>";
            echo "Data de Nascimento: " . htmlspecialchars($data_nascimento) . "<br>";
            echo "Email: " . htmlspecialchars($email) . "<br>";
            echo "Habilidades: " . implode(", ", array_map('htmlspecialchars', $habilidades)) . "<br>";
            echo "País: " . htmlspecialchars($pais) . "<br>";
            echo "Comentários: " . nl2br(htmlspecialchars($comentarios)) . "<br>";

            // Redireciona para uma página de agradecimento
            header("Location: obrigado.php");
            exit();
        }
    } else {
        echo "Método de requisição inválido!";
    }
