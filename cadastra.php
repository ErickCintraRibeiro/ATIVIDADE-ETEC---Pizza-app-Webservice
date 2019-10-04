<?php 
    $conexao = mysqli_connect("localhost","id10995460_frutadanca","ribeiro63143630","id10995460_crudpizza");
    //                   onde está o banco      usuario banco       senha banco         nome banco

    $sabor = $_POST['sabor'];
    $valor = $_POST['valor'];

    $query = "insert into tb_pizza values (null,'$sabor','$valor')";

    mysqli_query($conexao,$query);

    echo "Registro Salvo com Sucesso";
?>