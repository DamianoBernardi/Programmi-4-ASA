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
        </header>
        
        <?php
        $pizze = array ("margherita", "capricciosa", "diavola", "patatosa", "prosciutto e funghi", "viennese");
        $stringa1 = "Pomodoro, mozzarella, basilico";
        $stringa2 = "Pomodoro, mozzarella, funghi, acciughe, carciofini sott'olio.";
        $stringa3 = "Pomodoro, mozzarella, salamiano piccante, peperoni, origano";
        $stringa4 = "Pomodoro, mozzarella, patate fritte";
        $stringa5 = "Pomodoro, mozzarella, prosciutto di parma, funghi";
        $stringa6 = "Pomodoro, mozzarella, wurstel";
        foreach( $pizze as $variabile )
        {
            $N = 1;
            echo "<h2> $variabile </h2> <br>";
            echo "<h5> Ingredienti: </h5>" . "<h5> $stringaN </h5>";
            $N += 1;
        }
        ?>
    </body>
</html>