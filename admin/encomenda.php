<?php

    require_once("conexao.php");

    header('Access-Control-Allow-Methods: POST, GET');
    header('content-type: application/json; charset-UTF-8');
    

    $data = file_get_contents("php://input");
    $objData = json_decode($data);

    $codQuantidade          = $objData->codQuantidade;
    $dataEncomenda         = $objData->dataEncomenda;
    $codCliente          = $objData->codCliente;
    $codProduto          = $objData->codProduto;

    $statusEncomenda     = 'AGUARDANDO';

    date_default_timezone_set('America/Sao_Paulo');
    $horaEncomenda       = date('H:i:s', strtotime($dataEncomenda));
    $dataEncomenda       = date('Y/m/d', strtotime($dataEncomenda));
    

    $codQuantidade       = stripslashes($codQuantidade);
    $codCliente          = stripslashes($codCliente);
    $codProduto          = stripslashes($codProduto);

    $codQuantidade       = trim($codQuantidade);
    $codCliente          = trim($codCliente);
    $codProduto          = trim($codProduto);

    $dados;

    $conexao = Conexao::LigarConexao();
    $conexao->exec("SET NAMES utf8");

    if($conexao){

    $query = $conexao->prepare("INSERT INTO encomenda(dataEncomenda, horaEncomenda, statusEncomenda, idProduto, idCliente, quantidade) 
                                VALUES ('".$dataEncomenda."', '".$horaEncomenda."', '".$statusEncomenda."', '".$codProduto."', '".$codCliente."', '".$codQuantidade."')");

    $query->execute();
    $dados = array('mensagem' => 'Dados inseridos com sucesso');
    echo json_encode($dados);
    
    }else{
        $dados = array('mensagem' => 'Não foi possível realizar o cadastro.');
        echo json_encode($dados);

    }    
?>