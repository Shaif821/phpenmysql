<?php

?>
    <!DOCTYPE HTML>
    <html>
<style>

        
        </style>
    <body>
        <!--Form-->
        <form style="display:flex; justify-content: center; flex-direction: column;" action="1a.procces.php" method="post">
            <!--Naam-->*Alle velden zijn vereist
            <br> Naam:
            <br>
            <input type="text" name="name">
            <br>
            <!--Aantal fouten-->Aantal fouten:
            <br>
            <input type="text" name="aantal">
            <br>
            <!--Button-->
            
            <br>
                 
            Norm:
        <br> 1 fout per punt<input type="radio" name="norm" value="1 fout per punt">
        <br> 2 fout per punt<input type="radio" name="norm" value="2 fout per punt"> 
        <br> 3 fout per punt<input type="radio" name="norm" value="3 fout per punt">
        <br> 4 fout per punt<input type="radio" name="norm" value="4 fout per punt"> 
        <br> 5 fout per punt<input type="radio" name="norm" value="5 fout per punt">
        <br><br>
        <input type="submit" name="verwerk"> </form> 
        
        
        <?php


    
    
 
    ?>
    </body>

    </html>