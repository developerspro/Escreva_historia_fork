<?php

//Classe para definir a ordem de aparição do conteudo da página 
class Layout {

    public function conteudo($conteudo){
        include $conteudo.".php";
    }

    public function index($cabecalho, $conteudo, $rodape, $menu){ 
        $this->conteudo($cabecalho);
        $this->conteudo($menu);
        $this->conteudo($conteudo);
        $this->conteudo($rodape);
    }
}


?>