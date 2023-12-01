<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <title>Tabella dati</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
  <body bgcolor = "<?=$_GET['Colore_sfondo'] ?>" >
    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                Ciao <?=$_GET['Nome'] ?> <?=$_GET['Cognome'] ?> 😁
            </h1>
            <a href="./pagina1.php" class="ms-auto link-light" hreflang="ar">BACK</a>
        </div>
    </header>
    <p>Ecco i tuoi valori:</p><br>
    <div class="bd-example">
        <table class="table table-striped">
            <thead>
                <tr class="prima_riga">
                    <th scope="col">Chiave</th>
                    <th scope="col">Valore</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($_GET as $A => $B)
                {
                    $B = $B ?: "NULL";
                    echo "<tr> <td> $A </td> <td> $B </td> </tr>";
                }
                ?>
            </body>
        </table>
    </div>
</html>

<style>
    tr.prima_riga {
    font-weight: bold;
    text-transform: uppercase;
    text-decoration: underline;
    color: blue;
    }
</style>