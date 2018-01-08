 <fieldset>
    <?php 
    $title5 = "Aula 9 - Aprendendo o for" 
    ?>

    <h4> <?= $title5; ?> </h4>

    <?php
    // Repeat Loop:
    // for:

    /*for($i = 0; $i<=10; $i++){-
        echo "lista".$i."<br>";
    } 
    */

    // while:
    /*$i = 0;
    while ($i < 10 ){
        echo "list".$i."<br/>";

        $i++;

    }
    */


    ?>

    <h4>Repita o Looping</h4>
    <h6>Usando o fwhile</h6>
    <ul>
    <?php
    $i =0;
     while($i<10){
     ?>

    <li> list <?php echo $i; ?></li>
    
    <?php
    $i++;
     }?>
        </ul>

    
    </fieldset>

    