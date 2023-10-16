<?php
namespace src;
use Produto;
use Leiloeiro;
use Usuario;

    class Leilao{
        private int $id_leilao, $id_usuario;
        private string $nome_leilao;
        private Produto $produto;
        private Leiloeiro $leiloeiro;
        private float $lance_final;
    
    public function getNome(){
        return this->$nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdLeilao(){
        return this->$id_leilao;
    }

    public function getLanceFinal(){
        return this->$lancefinal;
    }

    public function setLanceFinal($lance_final){
        $this->lance_final = $lance_final;
    }

}

?>