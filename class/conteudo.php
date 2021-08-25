<?php

    class Conteudo extends Sql{

        

        public function Capa() {
            $sql = new Sql();
            $sql->query("select capa from jogos");
            $resultado = $this->dao->prepare($sql);
            $resultado->execute();
           

    }
}



?>