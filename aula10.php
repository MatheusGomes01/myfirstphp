

    <fieldset>
        
        <?

        // Array

        $x123[0] = "red";
        $x123[1] = "blue";

        //echo $x123[0];

        $y = array ("cat","dog");

        //echo $y[1];

        $var1 = array(0=>"cat",1=>"dog",3=>"red",2=>"blue");

        //echo $var1[1];


         $var2 = array("color"=>"blue","value"=>43);

        //echo $var2["color"]."<br/>";
        //echo $var2["value"];

         // Print_R

         #print_r($var1);

         #echo "<br/>";
  
         // Var_Dump
         #var_dump($var1);

         for ($i=0; $i < 4; $i++){
         	#echo $var1[$i]."<br/>";
         }

         // error


         for ($i=0; $i <2; $i++){
         	#echo $var2[$i]."<br/>";
         }

         foreach ($var1 as $key => $value) {
         	echo $key."=>".$value."<br/>";
         }

        ?>
    </fieldset>