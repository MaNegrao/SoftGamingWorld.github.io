<?php
#Verifica se tem um email para pesquisa
if(isset($_POST['email'])){ 

    #Recebe o Email Postado
    $emailPostado = $_POST['email'];

    #Conecta banco de dados 
    include "conexao.php";
    $sql = mysqli_query($conexao, "SELECT * FROM Usuario WHERE Email = '{$emailPostado}'") or print mysql_error();

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql)>0) 
        echo json_encode(array('email' => 'Ja existe um usuario cadastrado com este email')); 
    else 
        echo json_encode(array('email' => 'Usuário valido.' )); 
}
?>