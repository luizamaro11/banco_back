<?php 
    try{
        $conexao = mysqli_connect("localhost", "luizamaro11", "", "mobile2ds2");
        
        $id = $_GET['id'];
            
        $query = "select * from tb_pessoa where cd_pessoa = $id";
        
        $resultado = mysqli_query($conexao, $query);
        
        $i = 0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro = array(
                'pessoas' => array(
                    'codigo' => $linha['cd_pessoa'],
                    'nome' => $linha['nm_pessoa'],
                    'email' => $linha['ds_email'],
                )
            );
            
            $i++;
        }
        
        echo json_encode($registro);
        
    }
    catch(Exception $e){
        echo "Erro ao buscar: " .$e;
    }
    
?>