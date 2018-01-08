<fieldset>
            
            <?php
            $title4 = "Aula 8 - Condicionais"
            ?>

            <h4><?= $title4; ?></h4>

            <?php

            //Calculadora

            $value1 = 10;
            $value2 = 3;
            $operador = "%";


            //teste de operação:

            if ($operador == "+"){
                echo"Soma = ".($value1 + $value2);
            }elseif ($operador == "-") {
                echo "Subtração = ". ($value1 - $value2);
            }elseif ($operador == "/") {
                echo "Divisão = ". ($value1 / $value2);
            }elseif ($operador == "*") {
                echo "Multiplicação = ". ($value1 * $value2);
            }else {
                echo "Operado não existe";

            }

            ?>
        </fieldset>

   