<html>
   <body>
   <?php
       
//       require "1a.php";
           //van de submit button
    if(isset($_POST["verwerk"]) ){
        //variable name van de form
        $name = $_POST['name'];
        //variable aantal van de form
        $aantal = $_POST['aantal'];
        
        //Naam gedoe -----------------------------------------
        //naam wordt lowercase
        $nameL = strtolower($name);
        //Pakt alles na de 2de letter
        $nameS = substr($nameL, 1, 1);
        //Pakt de eerste letter 
        $nameS2 = $name[0];
        //Pakt van $nameL alles na $nameS
        $nameP = substr($nameL, strpos($nameL, $nameS));
        //Plakt alles samen
        $naam = $nameS2 . $nameP;
        //Einde naam gedoe ----------------------------------
        
        $norm = $_POST['norm'];
        if($norm === 1){
            array_push($norm, 1);
        }
        else if($norm === 2){
            array_push($norm, 2);
        }
        else if($norm === 3){
            array_push($norm, 3);
        }
        else if($norm === 4){
            array_push($norm, 4);
        }
        else if($norm === 5){
            array_push($norm, 5);
        }
        $fout = 10-($aantal/$norm);

        //Checkt of $name en $aantal leeg zijn
        if(!empty($name) AND !empty($aantal) && is_numeric($aantal)){
            //Als het niet leeg is
            //Krijg je de resultaten te zien
            echo '<br><p>Welkom' . ' ' . ucfirst($naam) . ' ' .'<br></p>
                  <p>Jij hebt' . ' ' . $_POST["aantal"] . ' ' . 'fouten<br> 
                  Jij hebt een ' . ' ' . round($fout, 1) . '</p>
                  <a href= "1a.php"><p>Terug naar formulier</p></a>';
        }
        else if(is_numeric($aantal) === false){
            echo "Je moet een getal invullen!";
        }
    else{
        //Als je de velden leeg laat, krijg je de volgende velden te zien
        echo "Je hebt niet alle ingevuld. Alle velden moeten ingevuld worden";
    }
         
   
    }
       
       //berekent de cijfer
//       $norm = 3;
//       $fout = 10-($aantal/$norm);
//       //                                 Rond af op 1
//       echo " Je hebt een " . " " . round($fout, 1) . " " . "gehaald";
//       
       
       ?>
  
    
    </body>
</html>