<?php 

// print_r($_REQUEST)
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('../conexao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
        $result = $conexao->query($sql);
        // print_r($result);
        if(mysqli_num_rows($result) <1 ){
            // print_r("nao existe");
            echo"Seus dados de usuario estao errados";
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            print_r("existe");
            header('location: ../user/user.php');
        }



        
    }else{
        
    }

?>