<?php 
interface DataBase {
    public function listarProduto();
    public function adicionarProduto();
    public function alterarProduto();
}

class MysqlDB implements DataBase {

    public function listarProduto() {

    }
    public function adicionarProduto() {
        echo "adicionado com mysql";
    }
    public function alterarProduto() {

    }

}

class OracleDB implements DataBase {

    public function listarProduto() {

    }
    public function adicionarProduto() {
        echo "adicionando com oracle";
    }
    public function alterarProduto() {

    }
}

$db =  new MysqlDB();
$db->adicionarProduto();

?>