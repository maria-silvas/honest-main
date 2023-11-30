<?php

require_once __DIR__ . "/../conexao.php";
?>

<div class="header">
    <header>
        <div class="logo-navbar">
            <img href="./index.html" src="../../Imagens/Logo/LogoHNTblack.png" alt="">
        </div>
        <nav>
            <ul class="navbar">
                <li><a href="../../index.html">HOME</a></li>
                <li><a href="#drops">DROPS</a></li>
                <li><a href="#">MARCAS</a></li>
            </ul>
        </nav>
        <div class="header-icon">
            <div class="divpesquisa">
                <input type="text" placeholder="   Pesquisar" class="pesquisa">
            </div>
            <!-- <i class="fa-solid fa-magnifying-glass"></i>
                    <i class="fa-solid fa-bag-shopping"></i>
                    <i class="fa-solid fa-user"></i> -->

            <img src="../../Imagens/Icons/PesquisaBlack.png" alt="">
            <img src="../../Imagens/Icons/shoppingbagBlack.png" alt="">
            <img src="../../Imagens/Icons/userBlack.png" alt="">
        </div>
    </header>
</div>
<div class="div"></div>
<div class="container">
    <div class="infoProd">
        <?php
        // Consulta para buscar informações do produto
        $sql = "SELECT nome, preco, tamanho FROM produtos WHERE id = 1"; // Supondo que o ID do produto seja 1

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='imgProd'>";
                echo "<div class='txt'>";
                echo "<p>PRODUTO</p>";
                echo "</div>";
                echo "<div class='txtImgprod'>";
                echo "<div>";
                // Exibindo a imagem do produto
                echo "<img src='../../Imagens/Produtos/airjordanDior.png' alt=''>";
                echo "</div>";
                echo "<div>";
                // Exibindo informações do produto do banco de dados
                echo "<p class='nameProd'>" . $row['nome'] . "</p>";
                echo "<p class='sizeProd'>Tamanho: " . $row['tamanho'] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
                echo "<div class='precoProd'>";
                echo "<div class='txt'>";
                echo "<p>PREÇO</p>";
                echo "</div>";
                // Exibindo o preço do produto do banco de dados
                echo "<p class='price'>R$ " . $row['preco'] . "</p>";
                echo "<hr>";
                echo "</div>";
            }
        } else {
            echo "Nenhum resultado encontrado";
        }
        ?>


        <div class="imgProd">

            <div class="txt">
                <p>PRODUTO</p>
            </div>
            <div class="txtImgprod">
                <div>
                    <img src="../../Imagens/Produtos/airjordanDior.png" alt="">
                </div>
                <div>
                    <p class="nameProd">Air Jordan Dior</p>
                    <p class="sizeProd">Tamanho : 30</p>
                </div>
            </div>

        </div>
        <div class="precoProd">
            <div class="txt">
                <p>PREÇO</p>
            </div>
            <p class="price">R$ 1900,00</p>
            <hr>
        </div>
        <div class="qtdProd">
            <div class="txt">
                <p>QUANTIDADE</p>
            </div>
            <p class="qtd">1</p>
            <hr>

        </div>
        <div class="totalProd">
            <div class="txt">
                <p>TOTAL</p>
            </div>
            <div class="txt2">
                <p>R$ 1900,00 </p>
                <button id="remove">X</button>
            </div>
            <hr>

        </div>
        <!-- <div class="imgProd">

                <div class="txt">
                    <p>PRODUTO</p>
                </div>
                <div class="txtImgprod">
                <div>
                <img src="../../Imagens/Produtos/airjordanDior.png" alt="">
            </div>
            <div>
                <p class="nameProd">Air Jordan Dior</p>
                <p class="sizeProd">Tamanho : 30</p>
            </div>
            </div>
            
            </div>
            <div class="precoProd">
                <div class="txt">
                    <p>PREÇO</p>
                </div>
                <p class="price">R$ 1900,00</p>
                <hr>
            </div>
            <div class="qtdProd">
                <div class="txt">
                    <p>QUANTIDADE</p>
                </div>
               <p class="qtd">1</p>
               <hr> 
                
            </div>
            <div class="totalProd">
                <div class="txt">
                    <p>TOTAL</p>
                </div>
                <div class="txt2">
                <p>R$ 1900,00 </p>
                <button id="remove">X</button>
            </div>
                <hr>
            
            </div>

            
        </div>
        
    </div> -->

    </div>