<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body style="background-color: burlywood;">
        <header>
            <h1>PIZZERIA MARGHERITA PER QUATTRO STAGIONI</h1>
            <h6>La pizzeria migliore di tutta la bella Italia!</h6>
            <br>
            <br>
            <br>
        </header>
        
        <?php
        $pizze = array ("margherita" => "8 €", "capricciosa" => "12 €", "diavola" => "12 €", "patatosa" => "10 €", "prosciutto e funghi" => "9 €", "viennese" => "10 €");
        $stringa1 = "Pomodoro, mozzarella, basilico";
        $stringa2 = "Pomodoro, mozzarella, funghi, acciughe, carciofini sott'olio.";
        $stringa3 = "Pomodoro, mozzarella, salamiano piccante, peperoni, origano";
        $stringa4 = "Pomodoro, mozzarella, patate fritte";
        $stringa5 = "Pomodoro, mozzarella, prosciutto di parma, funghi";
        $stringa6 = "Pomodoro, mozzarella, wurstel";
        $N = 1;
        foreach( $pizze as $tipo => $prezzo )
        {
            echo "<h2> $tipo :<i> $prezzo </i> </h2>";
            if($N == 1){
                echo "<h5><U> Ingredienti </U> :" . " $stringa1 </h5>";
                echo "<br>";
            }
            if($N == 2){
                echo "<h5><U> Ingredienti </U> :" . " $stringa2 </h5>";
                echo "<br>";
            }
            if($N == 3){
                echo "<h5><U> Ingredienti </U> :" . " $stringa3 </h5>";
                echo "<br>";
            }
            if($N == 4){
                echo "<h5><U> Ingredienti </U> :" . " $stringa4 </h5>";
                echo "<br>";
            }
            if($N == 5){
                echo "<h5><U> Ingredienti </U> :" . " $stringa5 </h5>";
                echo "<br>";
            }
            if($N == 6){
                echo "<h5><U> Ingredienti </U> :" . " $stringa6 </h5>";
                echo "<br>";
            }
            $N += 1;
        }
        ?>
    </body>
</html>


<style>
    h1{
        color: red;
        font-weight:bold;
        text-transform: uppercase;
    }
    h2{
        color: blue;
        font-weight:bold;
        text-transform: uppercase;
    }
    i{
        color: black;
        font-weight: lighter;
    }
    U{
        color: brown;
        font-weight:bold;
    }
</style>