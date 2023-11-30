<?php
require_once __DIR__ . "/../conexao.php";
$sql = "SELECT * FROM sua_tabela";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Exibindo os resultados, por exemplo
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Nome: " . $row["nome"] . "<br>";
    }
} else {
    echo "0 resultados";
}
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/a74e3185bb.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honest</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <!-- tela principal quando entra no site -->

    <header>
        <div class="div-Header">
            <div class="logo">
                <img src="./Imagens/Logo/LogoHNT.png" alt="">
            </div>
            <div class="header-names">
                <ul>
                    <a href="../pages/produtos/index.html">
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
                    <a href=""><img src="./Imagens/Icons/PesquisaWhite.png" alt=""> </a>
                    <a href=""><img src="./Imagens/Icons/shoppingbagWhite.png" alt=""></a>
                    <a href="./pages/user/user.php"><img src="./Imagens/Icons/userWhite.png" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <div class="tela-principal">
        <div class="content">
            <small>GARANTA O SEU</small>
            <h1>AIR JORDAN HIGH RED
                <BR>X<br>NIKE</h1>
            <button type=button class="button2"><b>VER MAIS > </button>
        </div>
    </div>

    <!-- fim da tela principal quando entra no site -->
    <div class="anucioBack">
        <div class="anuncios">
            <img src="./Imagens/Icons/check_mark.png" alt=""></i>
            <p>COMPRA SEGURA PELO SITE</p>
            <p>|</p>
            <img src="./Imagens/Icons/truck (1).png" alt=""></i>
            <p>FRETE GRATIS PARA TODO BRASIL</p>
            <p>|</p>
            <img src="./Imagens/Icons/arrow_bidirectional (1).png" alt=""></i>
            <p>ATÉ 30 DIAS PRA SOLICITAR SUA TROCA</p>
            <p>|</p>
            <img src="./Imagens/Icons/shopping_bag.png" alt=""></i>
            <p> FACIL DE COMPRAR</p>
        </div>
    </div>
    <main>

        <!-- DROPS -->
        <section id="drops" class="drops">
            <div class="drops-texto">
                <h1 class="txtDrops">DROPS</h1>
            </div>

            <!--SLIDER-DROP-->
            <section class="Slide-drop">

                <div class="swiper mySwiper container">
                    <div class="swiper-wrapper content">

                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="Imagens/Produtos/drop1.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="Imagens/Produtos/drop2.jpg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="Imagens/Produtos/drop3.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="Imagens/Produtos/drop4.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="Imagens/Produtos/drop5.png" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide card">
                            <div class="card-content">
                                <div class="image">
                                    <img src="./Imagens/Produtos/drop6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </section>

            <!-- Swiper JS -->
            <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    slidesPerGroup: 1,
                    loop: true,
                    loopFillGroupWithBlank: true,
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            </script>
            <!-- fim Initialize Swiper -->
        </section>
        <!-- FIM DROPS -->

        <section class="show-video">
            <div class="text-demonstration">
                <h1>
                    UNION LA X NIKE DUNK LOW UNION BLUE
                </h1>
                <p>
                    O NOSSO QUERIDO NIKE DUNK LOW BLUES SE JUNTOU COM A UNION LA PARA TRAZER ESSE NOVO DROP</p>
                <p>CLIQUE NO BOTÃO ABAIXO E VEJA MAIS !</p>

                <button type="button" class="btnGif">CLIQUE AQUI E VEJA MAIS > </button>
            </div>
            <img class="gif" src="./Imagens/Background/homegif.gif" alt="">
        </section>

        <!--============= CARDS ==================-->
        <div class="txtCards">
            <h3>CONFIRA AS ULTIMAS NOVIDADES ! </h3>
        </div>
        <div class="containercardMain">
            <div class="containerCard">
                <div class="card1">
                    <img src="./Imagens/Cards/Nike_Air_Force_1_PRM_Black.png" alt="" class="card-img1">
                    <div class="card-data1">
                        <h1 class="card-title1">NIKE AIR FORCE 1 PRM</h1>
                        <span class="card-preco1">R$ 5.990,00</span>
                        <!--   <p class="card-description2">Nike Air Jordan X Dior </p>-->
                        <a href="#" class="card-button1">COMPRAR AGORA</a>
                    </div>
                </div>
                <div class="card2">
                    <img src="./Imagens/Cards/Nike_Dunk_Low_Orange_Paisley.png" alt="" class="card-img2">
                    <div class="card-data2">
                        <h1 class="card-title2">NIKE DUNK LOW ORANJE</h1>
                        <span class="card-preco2">R$ 1.999,90</span>
                        <!--   <p class="card-description2">Nike Air Jordan X Dior </p>-->
                        <a href="#" class="card-button2">COMPRAR AGORA</a>
                    </div>
                </div>
                <div class="card3">
                    <img src="./Imagens/Cards/Yeezy_Boost_700_MNVN_.png" alt="" class="card-img3">
                    <div class="card-data3">
                        <h1 class="card-title3">YEEZY BOOST 700 MNVN</h1>
                        <span class="card-preco3">R$ 2.999,90</span>
                        <!--   <p class="card-description2">Nike Air Jordan X Dior </p>-->
                        <a href="#" class="card-button3">COMPRAR AGORA</a>
                    </div>
                </div>
            </div>
        </div>
        <!--=============FILTRO==================-->
        <div class="txtfiltro">
            <h3> O QUE VOCÊ ESTA PROCURANDO ? </h3>
        </div>
        <div class="filtroHome">

            <div>
                <img src="./Imagens/Background/filtroAf1.jpg" alt="">
                <p>AIR FORCE 1 > </p>
            </div>

            <div>
                <img src="./Imagens/Background/filtroAirj.jpg" alt="">
                <p>AIR JORDAN > </p>
            </div>
            <div>
                <img src="./Imagens/Background/filtroDunk.jpg" alt="">
                <p>DUNK LOW > </p>
            </div>
            <div>
                <img src="./Imagens/Background/filtroYeezy.jpg" alt="">
                <p>YEEZY > </p>
            </div>


        </div>
        <!-- =============== MARCAS ============== -->

        <div class="txtmarcas">
            <h1>ESCOLHA A SUA MARCA </h1>
        </div>
        <div class="marcas">
            <div>
                <img src="./Imagens/Logo/marcaadidas.png" alt="">
            </div>
            <div>
                <img src="./Imagens/Logo/marcanike.png" alt="">
            </div>

            <div>
                <img src="./Imagens/Logo/marcajordan.png" alt="">
            </div>
        </div>


        <!--RASTREAMENTO-->
        <section class="rastreio">
            <div class="rastreio-fundo">
                <img src="./Imagens/Icons/frete.png" alt="">
                <h1>RASTREAR PEDIDO</h1>
            </div>
        </section>

        <div class="logo-footer">
            <img src="./Imagens/Logo/LogoHonest.png" alt="">
        </div>

        <!-- FOOTER -->
        <footer>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-col">
                            <h4> NOVIDADES DA HONEST</h4>
                            <ul>
                                <input type="email" placeholder="Seu email aqui">
                                <button type="submit" class="seta"><i class="fas fa-arrow-right"></i></button>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>COMPANHIA</h4>
                            <ul>
                                <li><a href="#">Sobre nós</a></li>
                                <li><a href="#">Nossos Serviços</a></li>
                                <li><a href="#">Politica De Privacidade</a></li>
                                <li><a href="#">Programa Afiliado</a></li>
                            </ul>
                        </div>

                        <div class="footer-col">
                            <h4>AJUDA</h4>
                            <ul>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Envios</a></li>
                                <li><a href="#">Devoluções</a></li>
                                <li><a href="#">Status Do Pedido</a></li>
                                <li><a href="#">Opções de Pagamento </a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>SIGA A HONEST</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </div>


                        </div>
                    </div>
                </div>
            </footer>
        </footer>
        <!-- FIM FOOTER -->
    </main>
</body>

</html>

<?php
// Fecha a conexão após usar
$conn->close();
?>