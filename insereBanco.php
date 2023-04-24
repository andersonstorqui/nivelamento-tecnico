<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "nivelamentoDUO";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO nivelamentoDUO (nome, telefone, email, assunto, mensagem) VALUES ('$nome', '$telefone', $email, $assunto, $mensagem)";

if ($conn->query($sql) === TRUE) {
    echo "Dados salvos com sucesso!";
} else {
    echo "Erro ao salvar os dados: " . $conn->error;
}

$conn->close();
?>
