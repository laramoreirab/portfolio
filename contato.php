<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Coleta os dados do formulário
    $nome = htmlspecialchars(trim($_POST["iname"]));
    $email = htmlspecialchars(trim($_POST["iemail"]));
    $mensagem = htmlspecialchars(trim($_POST["imsg"]));
    $celular = htmlspecialchars(trim($_POST["icelular"]));

    // Verifica se os campos foram preenchidos
    if (!empty($nome) && !empty($email) && !empty($mensagem) && !empty($celular)) {
        
        // Cria uma string com os dados
        $dados = "Nome: $nome\nEmail: $email\n Celular: $celular\n Mensagem: $mensagem\n\n";

        // Define o caminho do arquivo onde será salvo
        $arquivo = "mensagens.txt";

        // Salva os dados no arquivo
        file_put_contents($arquivo, $dados, FILE_APPEND);

        // Retorno de sucesso
        echo "<script>
        alert('Mensagem enviada com sucesso! Obrigada pelo contato, $nome!');
        window.location.href = 'portfoliolara.php';
        </script>";
    } else {
        echo "<script>
        alert('Por favor, preencha todos os campos.');
        window.location.href = 'portfoliolara.php#contt';
        </script>";
    }

} else {
    // Se o formulário não foi enviado via POST
    echo "<script>
    alert('Método de envio inválido. Tente novamente');
    window.location.href = 'portfoliolara.php#contt';
    </script>";
}
?>