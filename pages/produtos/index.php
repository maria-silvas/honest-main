<?php

require_once __DIR__ ."/../conexao.php";

$sql = "SELECT * FROM produtos";
$resultado = $conn->query($sql);
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Snearkers</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <div class="div-Header">
            <div class="logo">
                <a href="../../index.html"><img src="../../Imagens/Logo/LogoHNTblack.png" alt=""></a>
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
                    <a><img src="../../Imagens/Icons/PesquisaBlack.png" alt=""> </a>
                    <a><img src="../../Imagens/Icons/shoppingbagBlack.png" alt=""></a>
                    <a href="../user/user.php"><img src="../../Imagens/Icons/userBlack.png" alt=""></a>
                </div>
            </div>
        </div>
    </header>

    <div class="containerMain">
        <div class="divFiltro">
            <div class="txtFiltrar">
                <h1>FILTRAR</h1>
            </div>
            <div class="marcas">
                <h3>MARCAS</h3>
                <div class="icons-marcas">
                    <img src="../../Imagens/Logo/logoNike.png" alt="nike" />
                    <img src="../../Imagens/Logo/logoAdidas.png" alt="nike" />
                    <img src="../../Imagens/Logo/logoJordan.png" alt="nike" />
                </div>
            </div>
            <div class="tamanhos">
                <h3>TAMANHO</h3>
                <div class="numTamanhos">
                    <ul>
                        <li>34</li>
                        <li>35</li>
                        <li>36</li>
                        <li>37</li>
                        <li>38</li>
                        <li>39</li>
                    </ul>
                    <ul class="segundaColuna">
                        <li>40</li>
                        <li>41</li>
                        <li>42</li>
                        <li>43</li>
                        <li>44</li>
                        <li>45</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flexProdutos">
            <section class="FlexContainer">
                <div>
                    <img src="../../Imagens/Produtos/af1Black.png" alt="" />
                    <h2>AIR FORCE ONE "BLACK"</h2>
                    <p>R$ 990,90</p>
                </div>
                <div>
                    <img src="../../Imagens/Produtos/dunkLowTravis.png" alt="" />
                    <h2>NIKE DUNK LOW x TRAVIS</h2>
                    <p>R$ 2990,90</p>
                </div>
                <div>
                    <img src="../../Imagens/Produtos/dunkLow.png" alt="" />
                    <h2>NIKE DUNK LOW X BEN & JERRY</h2>
                    <p>R$ 3990,90</p>
                </div>
                <div>
                    <img src="../../Imagens/Produtos/airjordanDior.png" alt="" />
                    <h2>NIKE AIR JORDAN X DIOR</h2>
                    <p>R$ 1990,90</p>
                </div>
                <div>
                    <img src="../../Imagens/Produtos/airjordanPink.png" alt="" />
                    <h2>AIR JORDAN 1 "PINK"</h2>
                    <p>R$ 1990,90</p>
                </div>
                <div>
                    <img src="../../Imagens/Produtos/Air_Jordan_1_Retro_High_OG__Court_Purple.png" alt="" />
                    <h2>AIR JORDAN 1 COURT PURPLE</h2>
                    <p>R$ 1099,90</p>
                </div>
                <div>
                    <img src="../../Imagens/Produtos/yeezy2-removebg-preview.png" alt="" />
                    <h2>YEZZY BOOST 350 V2</h2>
                    <p>R$ 999,00</p>
                </div>
                <div>
                    <img src="../../Imagens/Produtos/yezzy.png" alt="" />
                    <h2>YEZZY BOOST 350 V1 "ORANJE"</h2>
                    <p>R$ 1590,00</p>
                </div>
                <div>
                    <img src="../../Imagens/Produtos/Air Jordan 1 Low SB _Powder Blue_.png" alt="" />
                    <h2>AIR JORDAN 1 LOW BLUE</h2>
                    <p>R$ 1999,90</p>
                </div>
                
                <?php
                // Verifica se há produtos a serem exibidos
                if ($resultado->num_rows > 0) {
                    // Exibe os produtos dinamicamente
                    while ($row = $resultado->fetch_assoc()) {
                ?>
                        <div>
                            <img src="<?php echo $row['imagem']; ?>" alt="" />
                            <h2><?php echo $row['nome']; ?></h2>
                            <p>R$ <?php echo $row['preco']; ?></p>
                        </div>
                <?php
                    }
                } else {
                    // Se não houver produtos
                    echo "Nenhum produto disponível.";
                }
                ?>
            </section>
        </div>
    </div>
</body>

</html>
<?php
// Fecha a conexão após usar
$conn->close();
?>