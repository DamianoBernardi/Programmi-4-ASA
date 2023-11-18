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
        $pizze = array(array("prezzo" => "8 €", "nome" => "Margherita", "ingredienti" => "Pomodoro, mozzarella, basilico"),  array("prezzo" => "12 €", "nome" => "Capricciosa", "ingredienti" => "Pomodoro, mozzarella, funghi, acciughe, carciofini sott'olio"), array("prezzo" => "12 €", "nome" => "Diavola", "ingredienti" => "Pomodoro, mozzarella, salamiano piccante, peperoni, origano",), array("prezzo" => "10 €", "nome" => "Patatosa", "ingredienti" => "Pomodoro, mozzarella, patate fritte",), array("prezzo" => "9 €", "nome" => "prosciutto e funghi", "ingredienti" => "Pomodoro, mozzarella, prosciutto di parma, funghi",), array("prezzo" => "10 €", "nome" => "viennese", "ingredienti" => "Pomodoro, mozzarella, wurstel",));
        foreach( $pizze as $tipo )
        {
            echo "<h2> $tipo[nome] :<i> $tipo[prezzo] </i> </h2>";
            echo "<h5><U> Ingredienti </U> :" . " $tipo[ingredienti] </h5>";
            echo "<br>";
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