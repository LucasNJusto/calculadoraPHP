<?php

    function somar($num1, $num2)
    {
        $soma = $num1 + $num2;
        return "O resultado da subtração é: $soma";
    }

    function subtrair($num1, $num2)
    {
        $sub = $num1 - $num2;
        return "O resultado da subtração é: $sub";
    }
            
    function divisao($num1, $num2)
    {
        if($num2 != 0)
        {
            $div = $num1 / $num2;
        }else
        {
            $div = "Impossivel dividir por zero!";
        } //Fim da operação
                
        return "O resultado da subtração é: $div";
    }

    function multiplicacao($num1, $num2)
    {
        $mult = $num1 * $num2;
        return "O resultado da subtração é: $mult";
    }

    function raiz($num1, $num2)
    {
        $raiz = sqrt($num1);
        $raiz1 = sqrt($num2);
        
        return "O resultado da raiz 1 é: $raiz e o da 2 é: $raiz1";
    }
    /* OU
        return "A raiz de $num1 é: " .sqrt($num1);
    */

    function potencia($num1, $num2)
    {
        return "A potencia de $num1 elevado a $num2 é:" .pow($num1,$num2);
    }//Fim da potencia

    function tabuada($num1)
    {
        $msg = "";
        for($i = 0; $i <= 10; $i++)
        {
            $msg .= "$i * $num1 = " .($i * $num1);
        }//Fim do For
        return $msg;
    }//Fim da tabuada 

    ?>
    