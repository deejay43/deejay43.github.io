<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $conexao = mysql_connect ('localhost','djalma', 'djalma1')
                or die("Erro na conexão com BD");
        
        $select_db = mysql_select_db("db_provida");
                
        $nome = $_POST['Nome'];
        $email = $_POST['Email'];
        $telefone = $_POST['Telefone'];
        $mensagem = $_POST['Mensagem'];
        
        $string_sql = "INSERT INTO pedidos (id,nome,email,telefone,mensagem) VALUES (null,'$nome','$email','$telefone','$mensagem')";
        
        mysql_query($string_sql, $conexao);
        
        if(mysql_affected_rows () ==1){
                echo"<p>Mensagem Enviada</p>";
                echo'<a href="index.html">Voltar a página inicial</a>';
        }else{
            echo "Erro, não foi possível inserir no banco de dados";
        }
        
        mysql_close($conexao);
                 
        ?>
    </body>
</html>
