<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: ../login/login.html');
    };
    if(isset($_POST['sair']))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: ../login/login.html');
    }

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuario</title>
    <link rel="stylesheet" href="./style.css">
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
        <div class="menu">
            <div class="itens" id="itens">
                <h1 id="perfil" class="selecionar active">Meu perfil</h1>
                <h1 id="endereco" class="selecionar">Endereço</h1>
                <h1 id="pedidos" class="selecionar">Meus pedidos</h1>
                <form action="#" method="POST">
                    <input type="submit" name="sair" value="sair">
                </form>
            </div>
            
        </div>
        <div class="collun">
            <div class="user">
                <div class="user_left">
                    <h1>kawan lopes</h1>
                    <p>kawan@gmail.com</p>
                </div>
                <div class="user_rigth">
                    <div class="circulo"></div>
                </div>
            </div>

            <div class="endereco">
                <div class="line-one">
                    <h1>Meu endereço</h1>
                </div>
                <div class="line-two">
                    <div class="left">
                        <h1>Nome</h1>
                        <p>kawan pereira lopes</p>
                    </div>
                    <div class="rigth">
                        <h1>Numero de telefone</h1>
                        <p>47999884224</p>
                    </div>
                </div>
                <div class="line-tree">
                    <h1>Endereço</h1>
                    <p>bla bla bla</p>
                </div>
                <div class="line-fout">
                    <div class="left">
                        <h1>Estado</h1>
                        <p>Santa Catarina</p>
                    </div>
                    <div class="rigth">
                        <h1>Cidade</h1>
                        <p>joinville</p>
                    </div>
                    <div class="line-five">
                        <h1>Informaçoes adicionais</h1>
                        <p>bla bla bla bla bla bla
                             bla bla bla
                             bla bla bla
                             bla bla bla
                             bla bla bla
                             bla bla bla
                             bla bla bla
                             bla bla bla
                             bla bla bla </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./app.js"></script>
</body>

</html>