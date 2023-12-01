<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Home libreria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                Sito di DAMIANO
            </h1>
            <a href="./pagina.php" class="ms-auto link-light" hreflang="ar">BACK</a>
        </div>
    </header>
    <form action="">
      <label for="fname">Inserisci il tuo nome:</label><br>
      <input type="text" id="fname" name="fname" required><br><br>
      <label for="lname">Inserisci il tuo cognome:</label><br>
      <input type="text" id="lname" name="lname" required><br><br>
      <label for="age">Inserisci la tua età:</label><br>
      <input type="number" id="age" name="age"><br><br>
      <label for="sport">Inserisci il tuo sport preferito:</label><br>
      <input type="text" id="sport" name="sport"><br><br>
      <label for="favcolor">Scegli il colore che vuoi che abbia lo sfondo:</label><br>
      <input type="color" id="favcolor" name="favcolor" value="#ff0000"><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>