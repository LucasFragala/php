<?php
    //encapsulamento
    class minhaClasse{
        const VALOR = 300;
        function __construct(){
            echo self::VALOR;
        }
    }

    new minhaClasse;
    echo minhaClasse::VALOR; //chamar de fora

?>