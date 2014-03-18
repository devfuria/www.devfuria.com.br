<?php

/**
 *
 */
class Paginas {

    private $pdo;


    /**
     * Na construção busca a conexão com o DB
     *
     * @param type $conexao
     */
    function __construct($url="") {
        $this->pdo = $GLOBALS['pdo'];
    }

    /**
     * Retorna a lista de paginas
     *
     * $arr[] = objeto pagina
     * $arr[] = objeto pagina
     * $arr[] = objeto pagina
     *
     * @return type
     */
    function getAll() {

        $res = $this->pdo->query("SELECT * FROM paginas ORDER BY secao, sub_secao, id");
        return $res->fetchAll(\PDO::FETCH_OBJ);
    }

    /**
     * Retorna uma única página
     *
     * @param type $codigo
     * @return type
     */
    function getPagina($url) {

        $res = $this->pdo->query("SELECT * FROM paginas WHERE url = '$url';");
        return $res->fetch(\PDO::FETCH_OBJ);
    }

}
