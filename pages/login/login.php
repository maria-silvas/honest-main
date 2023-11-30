<?php
require_once __DIR__ . "/../conexao.php";

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Consulta para verificar as credenciais do usuário
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'"; // Substitua 'usuarios' pelo nome da sua tabela
    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0) {
        // Se as credenciais estão corretas, redireciona para a página de sucesso
        header("Location: pagina_de_sucesso.php");
        exit();
    } else {
        // Se as credenciais estão incorretas, exibe uma mensagem de erro
        echo "Credenciais inválidas. Tente novamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
            <form class="conteudo" action="testelogin.php" method="POST">
                <div class="titulos">
                    <h1>FAÇA LOGIN</h1>
                    <p>E compre os melhores produtos</p>
                </div>
                <div class="campos">
                    <input type="email" name="email" placeholder="Digite seu email" required>
                    <input type="password" name="senha" placeholder="Digite seu senha" required>
                </div>
                <div class="enviar">
                    <button id="btn-enviar" name="submit" type="submit">ENTRAR</button>
                </div>
                <div class="login">
                    <p>Não possui conta?</p>
                    <a href="../registrar/registrar.html">Criar conta</a>
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