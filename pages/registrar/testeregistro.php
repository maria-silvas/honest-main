
<?php

if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
    include_once('../conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $validar = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultV = $conexao->query($validar);
    
    if(mysqli_num_rows($resultV) > 0 ){
        // print_r("nao existe");
        // header('location: registro.html');
        echo "Ooops este email já esta em uso";
        
    }else{
        $sql = "INSERT INTO usuarios VALUES ('id_user', '$nome','$email', '$senha')";
        $result = $conexao->query($sql);
        // echo "<script>alert('criado com sucesso')</script>";
        header('location: ../login/login.html');
        
    }        
    // print_r($result);    
}else{
    header('location: registro.html');
    
}

?> 