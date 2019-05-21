<?php 
    try{
        $conexao = mysqli_connect("localhost", "luizamaro11", "", "mobile2ds2");
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $query = "insert into tb_pessoa values (null, '$nome', '$email')";
        
        mysqli_query($conexao, $query);
        
        echo "cadastro realizado com sucesso";
    }
    catch(Exception $e){
        echo "Erro ao conectar ".$e;
    }
    
?>