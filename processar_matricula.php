<?php
// Configurações do banco de dados
$host = "localhost";       // Endereço do PostgreSQL
$dbname = "faculdade_matricula"; // Nome do banco de dados
$user = "seu_usuario";      // Seu usuário do PostgreSQL
$password = "sua_senha";    // Sua senha do PostgreSQL

try {
    // Conexão com o PostgreSQL
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verificar se os dados foram enviados via POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nome = $_POST['nome'];
        $whatsapp = $_POST['whatsapp'];
        $email = $_POST['email'];
        $aceite_politica = isset($_POST['aceite_politica']) ? true : false;

        // Preparar a query SQL para inserir os dados
        $sql = "INSERT INTO matriculas (nome, whatsapp, email, aceite_politica) 
                VALUES (:nome, :whatsapp, :email, :aceite_politica)";
        $stmt = $pdo->prepare($sql);

        // Executar a query com os parâmetros
        $stmt->execute([
            ':nome' => $nome,
            ':whatsapp' => $whatsapp,
            ':email' => $email,
            ':aceite_politica' => $aceite_politica
        ]);

        echo "Matrícula realizada com sucesso!";
    }
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
