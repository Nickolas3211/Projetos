<?php
    require_once("conexao.php");
    
        

        $conexao = Conexao::LigarConexao();
        $conexao -> exec('SET NAMES UTF8');

        if(!$conexao){
            echo 'Não foi possivel fazer a conexao com o banco de dados';
        }

        if(isset($_GET['idProduto'])){
            $idProduto = $_GET['idProduto'];
            $query = $conexao->prepare("SELECT * FROM produto WHERE idProduto = $idProduto ORDER BY idProduto");
            $query->execute();

            $json="[";

            while($resultado = $query->fetch()){
                if($json!= "["){
                    $json .= ",";
                }
                $json .= '{"idProduto" : "'.$resultado["idProduto"].'",';
                
                    $json .= '"nomeProduto":"'.$resultado["nomeProduto"].'",';
                    $json .= '"valorProduto":"'.$resultado["valorProduto"].'",';
                    $json .= '"dataCadProduto":"'.$resultado["dataCadProduto"].'",';
                    $json .= '"fotoProduto1":"'.$resultado["fotoProduto1"].'",';
                    $json .= '"fotoProduto2":"'.$resultado["fotoProduto2"].'",';
                    $json .= '"fotoProduto3":"'.$resultado["fotoProduto3"].'",';
                    $json .= '"descricaoProduto":"'.$resultado["descricaoProduto"].'",';
                    $json .= '"receitaProduto":"'.$resultado["receitaProduto"].'",';
                    $json .= '"tempoProduto" : "'.$resultado["tempoProduto"].'",';
                    $json .= '"idCategoria" : "'.$resultado["idCategoria"].'",';
    
                $json .= '"statusProduto" : "'.$resultado["statusProduto"].'"}';
            }

            $json .= ']';
            echo $json;
        }
?>