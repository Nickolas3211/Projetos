<?php
    header('Access-Control-Allow-Origin: *');
    class Conexao{
        public static function LigarConexao(){
            //$conn = new PDO('mysql:host=localhost;dbname=kibelezati12','root',''); BANCO DE DADOS LOCAL
            $conn = new PDO('mysql:host=213.190.6.22;dbname=u283879542_licakes','u283879542_licakes','Licakes01');
            return $conn;
        }
    }
?>