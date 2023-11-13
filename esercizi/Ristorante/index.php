<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <h1>PIZZERIA MAMMA MIA</h1>
            <h6>La pizzeria migliore di tutta la bella italia!</h6>
            <br>
            <br>
            <br>
        </header>
        
        <?php
        $pizze = array ("margherita", "capricciosa", "diavola", "patatosa", "prosciutto e funghi", "viennese");
        $stringa1 = "Pomodoro, mozzarella, basilico";
        $stringa2 = "Pomodoro, mozzarella, funghi, acciughe, carciofini sott'olio.";
        $stringa3 = "Pomodoro, mozzarella, salamiano piccante, peperoni, origano";
        $stringa4 = "Pomodoro, mozzarella, patate fritte";
        $stringa5 = "Pomodoro, mozzarella, prosciutto di parma, funghi";
        $stringa6 = "Pomodoro, mozzarella, wurstel";
        $N = 1;
        foreach( $pizze as $variabile )
        {
            echo "<h2> $variabile </h2> <br>";
            if($N == 1){
                echo "<h5> Ingredienti: " . " $stringa1 </h5>";
                echo "<br>";
            }
            if($N == 2){
                echo "<h5> Ingredienti: " . " $stringa2 </h5>";
                echo "<br>";
            }
            if($N == 3){
                echo "<h5> Ingredienti: " . " $stringa3 </h5>";
                echo "<br>";
            }
            if($N == 4){
                echo "<h5> Ingredienti: " . " $stringa4 </h5>";
                echo "<br>";
            }
            if($N == 5){
                echo "<h5> Ingredienti: " . " $stringa5 </h5>";
                echo "<br>";
            }
            if($N == 6){
                echo "<h5> Ingredienti: " . " $stringa6 </h5>";
                echo "<br>";
            }
            $N += 1;
        }
        ?>
    </body>
</html>