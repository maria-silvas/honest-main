<?php

require_once __DIR__ ."/../conexao.php";
$produto_id = 1;
$sql = "SELECT * FROM produtos WHERE id = $produto_id"; // Substitua 'produtos' pelo nome da sua tabela

$resultado = $conn->query($sql);

// Verifica se a consulta retornou resultados
if ($resultado->num_rows > 0) {
    // Exibe os dados do produto
    while ($row = $resultado->fetch_assoc()) {
        $nome = $row['nome']; // Nome do produto
        $preco = $row['preco']; // Preço do produto
        // Poderia adicionar mais campos aqui se necessário
        
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Honest</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="div-Header">
            <div class="logo">
                <img src="../../Imagens/Logo/LogoHNTblack.png" alt="">
            </div>
            <div class="header-names">
                <ul>
                    <a href="../../pages/produtos/index.html">
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
                    <a href=""><img src="../../Imagens/Icons/PesquisaBlack.png" alt=""> </a>
                    <a href=""><img src="../../Imagens/Icons/shoppingbagBlack.png" alt=""></a>
                    <a href="./pages/user/user.php"><img src="../../Imagens/Icons/userBlack.png" alt=""></a>
                </div>
            </div>
        </div>
    </header>

    <div class="conteudo">
        <div class="nomeProd">
            <p>NIKE DUNK LOW </p>
            <p class="orange">ORANGE</p>
        </div>
        <div class="prod">
            <img src="../../Imagens/Cards/Nike_Dunk_Low_Orange_Paisley.png" alt="">
        </div>

        <div class="info">
            <h1>R$ 1.990,00</h1>
            <div class="tamanho">
                <p>ESCOLHA O SEU TAMANHO</p>
                <ul>
                    <li>34</li>
                    <li>35</li>
                    <li>36</li>
                    <li>37</li>
                    <li>38</li>
                    <li>39</li>
                    <br>
                    <li>40</li>
                    <li>41</li>
                    <li class="active">42</li>
                    <li>43</li>
                    <li>44</li>
                    <li>45</li>


                </ul>
            </div>
            <div class="quantidade">
                <ul class="qtd">
                    <p>QUANTIDADE</p>
                    <li>+</li>
                    <li class="sla">1</li>
                    <li>-</li>

                </ul>
            </div>

            <button type="submit">COMPRAR</button>

        </div>
    </div>

</body>

</html>

<?php
    } // Fecha o loop while
} else {
    // Se não houver resultados, pode exibir uma mensagem ou realizar alguma ação alternativa
    echo "Nenhum resultado encontrado.";
}