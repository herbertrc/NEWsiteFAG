<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $whatsapp = htmlspecialchars(trim($_POST['whatsapp']));
    $email = htmlspecialchars(trim($_POST['email']));
    $curso = htmlspecialchars(trim($_POST['curso'])); // Captura o curso selecionado

    if (empty($nome) || empty($whatsapp) || empty($email) || empty($curso)) {
        echo "<script>
                alert('Por favor, preencha todos os campos.');
                window.history.back();
              </script>";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP da HostGator
        $mail->isSMTP();
        $mail->Host = 'mail.faculdadeguerra.edu.br'; // Servidor SMTP da HostGator
        $mail->SMTPAuth = true; // Autenticação habilitada
        $mail->Username = 'matriculaguerra@faculdadeguerra.edu.br'; // E-mail completo
        $mail->Password = 'Guerra@3977'; // Senha do e-mail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS ou SSL conforme necessário
        $mail->Port = 587; // Porta do servidor SMTP (587 para TLS, 465 para SSL)

        // Nome válido para o HELO
        $mail->Helo = 'faculdadeguerra.edu.br';

        // Remetente e destinatário
        $mail->setFrom('matriculaguerra@faculdadeguerra.edu.br', 'Faculdade Guerra');
        $mail->addAddress('matriculaguerra@faculdadeguerra.edu.br', 'Faculdade Guerra'); // Destinatário

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Novo Contato - Formulário de Matrícula';
        $mail->Body = "
            <h1>Nova Solicitação de Matrícula</h1>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>WhatsApp:</strong> $whatsapp</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Curso de Interesse:</strong> $curso</p>
        ";

        // Enviar o e-mail
        $mail->send();

        // Alerta de sucesso e redirecionamento
        echo "<!DOCTYPE html>
              <html lang='pt-BR'>
              <head>
                  <meta charset='UTF-8'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <title>Formulário Enviado</title>
                  <script>
                      alert('E-mail enviado com sucesso!');
                      window.location.href = 'index.php';
                  </script>
              </head>
              <body>
              </body>
              </html>";
        exit;
    } catch (Exception $e) {
        // Alerta de erro e redirecionamento
        echo "<!DOCTYPE html>
              <html lang='pt-BR'>
              <head>
                  <meta charset='UTF-8'>
                  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                  <title>Erro ao Enviar</title>
                  <script>
                      alert('Erro ao enviar o e-mail: {$mail->ErrorInfo}');
                      window.location.href = 'index.php';
                  </script>
              </head>
              <body>
              </body>
              </html>";
        exit;
    }
} else {
    // Se o script for acessado diretamente, redireciona para a página inicial
    header('Location: index.php');
    exit;
}
?>
