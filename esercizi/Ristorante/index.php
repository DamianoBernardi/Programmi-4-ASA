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
        
        <div class="bd-example">
            <table class="table table-striped">
            <thead>
            <tr class="prima_riga">
                <th scope="col"><h3>menù</h3></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php
                        $pizze = array(array("prezzo" => "8 €", "nome" => "Margherita", "ingredienti" => "Pomodoro, mozzarella, basilico", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/4d/pizza-margherita_dop-4d6f75ef.webp"),  array("prezzo" => "12 €", "nome" => "Capricciosa", "ingredienti" => "Pomodoro, mozzarella, funghi, acciughe, carciofini sott'olio", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/bc/pizza-capricciosa-2-bc752901.webp"), array("prezzo" => "12 €", "nome" => "Diavola", "ingredienti" => "Pomodoro, mozzarella, salamiano piccante, peperoni, origano", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/f2/pizza-diavola-2-f29995b5.png"), array("prezzo" => "8 €", "nome" => "marinara", "ingredienti" => "Pomodoro, origano, aglio", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/42/pizza-marinara-42f922f2.webp"), array("prezzo" => "9 €", "nome" => "gustosa", "ingredienti" => "Pomodoro, mozzarella, capperi, acciughe, olive nere, pomodorini", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/a7/pizza-gustosa-a728bc16.webp"), array("prezzo" => "10 €", "nome" => "chiodini e soppressa", "ingredienti" => "Pomodoro, mozzarella, chiodini, soppressa", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/27/pizza-chiodini_e_sopressa-270cb4cb.webp"));
                        foreach( $pizze as $tipo )
                        {
                            echo "<h2> $tipo[nome] :</h2>";
                            echo "<h5><U> Ingredienti </U> :" . " $tipo[ingredienti] </h5>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                        }
                        ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                        <?php
                        $pizze = array(array("prezzo" => "8 €", "nome" => "Margherita", "ingredienti" => "Pomodoro, mozzarella, basilico", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/4d/pizza-margherita_dop-4d6f75ef.webp"),  array("prezzo" => "12 €", "nome" => "Capricciosa", "ingredienti" => "Pomodoro, mozzarella, funghi, acciughe, carciofini sott'olio", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/bc/pizza-capricciosa-2-bc752901.webp"), array("prezzo" => "12 €", "nome" => "Diavola", "ingredienti" => "Pomodoro, mozzarella, salamiano piccante, peperoni, origano", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/f2/pizza-diavola-2-f29995b5.png"), array("prezzo" => "8 €", "nome" => "marinara", "ingredienti" => "Pomodoro, origano, aglio", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/42/pizza-marinara-42f922f2.webp"), array("prezzo" => "9 €", "nome" => "gustosa", "ingredienti" => "Pomodoro, mozzarella, capperi, acciughe, olive nere, pomodorini", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/a7/pizza-gustosa-a728bc16.webp"), array("prezzo" => "10 €", "nome" => "chiodini e soppressa", "ingredienti" => "Pomodoro, mozzarella, chiodini, soppressa", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/27/pizza-chiodini_e_sopressa-270cb4cb.webp"));
                        foreach( $pizze as $tipo )
                        {
                            echo "<img src=$tipo[immagine] alt='immagine' style='width: 200px;'>";
                            echo "<br>";
                            echo "<br>";
                        }
                        ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                    <?php
                        $pizze = array(array("prezzo" => "8 €", "nome" => "Margherita", "ingredienti" => "Pomodoro, mozzarella, basilico", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/4d/pizza-margherita_dop-4d6f75ef.webp"),  array("prezzo" => "12 €", "nome" => "Capricciosa", "ingredienti" => "Pomodoro, mozzarella, funghi, acciughe, carciofini sott'olio", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/bc/pizza-capricciosa-2-bc752901.webp"), array("prezzo" => "12 €", "nome" => "Diavola", "ingredienti" => "Pomodoro, mozzarella, salamiano piccante, peperoni, origano", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/f2/pizza-diavola-2-f29995b5.png"), array("prezzo" => "8 €", "nome" => "marinara", "ingredienti" => "Pomodoro, origano, aglio", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/42/pizza-marinara-42f922f2.webp"), array("prezzo" => "9 €", "nome" => "gustosa", "ingredienti" => "Pomodoro, mozzarella, capperi, acciughe, olive nere, pomodorini", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/a7/pizza-gustosa-a728bc16.webp"), array("prezzo" => "10 €", "nome" => "chiodini e soppressa", "ingredienti" => "Pomodoro, mozzarella, chiodini, soppressa", "immagine" => "https://www.pizzeriagraniantichi.it/templates/yootheme/cache/27/pizza-chiodini_e_sopressa-270cb4cb.webp"));
                        foreach( $pizze as $tipo )
                        {
                            echo "<h2> <i> $tipo[prezzo] </i> </h2>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                            echo "<br>";
                        }
                        ?>
                    </td>
                </tr>
            </tbody>
            </table>
        

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
    h3{
        color: black;
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
    img{
        border-left: 10cm;
    }
</style>