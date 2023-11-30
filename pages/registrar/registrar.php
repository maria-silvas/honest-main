<?php
require_once __DIR__ . "/../conexao.php";

if(isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Query para inserir os dados na tabela de usuários
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')"; // Ajuste o nome da tabela e dos campos conforme necessário
    if($conn->query($sql) === TRUE) {
        // Redireciona para a página de sucesso após o registro
        header("Location: pagina_de_sucesso.php");
        exit();
    } else {
        // Em caso de erro, exibe uma mensagem detalhada
        echo "Erro ao registrar usuário: " . $conn->erro();
    }
}
?>

<!DOCTYPE html>

<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="div-Header">
            <div class="logo">
                <a href="../../index.html"><img src="../../Imagens/Logo/logoUser.png" alt=""></a>
            </div>
            <div class="header-names">
                <ul>
                    <a href="./pages/produtos/index.html">
                        <li>SNEARKERS</li>
                    </a>
                    <a href="#drops">
                        <li>DROPS</li>
                    </a>
                    <a>
                        <li>MARCAS</li>
                    </a>
                </ul>
            </div>
            <div class="header-icons">
                <input type="search" placeholder="Pesquisar.." />
                <div class="icons">
                    <a><img src="../../Imagens/Icons/PesquisaWhite.png" alt=""> </a>
                    <a><img src="../../Imagens/Icons/shoppingbagWhite.png" alt=""></a>
                    <a href="../user/user.php"><img src="../../Imagens/Icons/userWhite.png" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="vazio">
            <!-- <img src="../../Imagens/Background/fundoLogin.png" alt=""> -->
        </div>
        <div class="efeito">
            <form class="conteudo" action="testeregistro.php" method="POST">
                <div class="titulos">
                    <h1>CRIE SUA CONTA</h1>
                    <p>E fique por dentro das novidades</p>
                </div>
                <div class="campos">
                    <input type="text" name="nome" placeholder="Digite seu nome" required>
                    <input type="email" name="email" placeholder="Digite seu email" required>
                    <input type="password" name="senha" placeholder="Digite seu senha" required>
                </div>
                <div class="enviar">
                    <input id="btn-enviar" name="submit" type="submit">CRIAR</input>
                </div>
                <div class="login">
                    <p>Já possui conta?</p>
                    <a href="../login/login.html">Faça login</a>
                </div>
            </form>
        </div>

    </main>
</body>

</html>

<?php
// Fecha a conexão após usar
$conn->close();
?>