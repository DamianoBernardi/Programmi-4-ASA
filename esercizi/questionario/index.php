<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <title>Immetti password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="bd-header bg-dark py-3 d-flex align-items-stretch border-bottom border-dark">
        <div class="container-fluid d-flex align-items-center">
            <h1 class="d-flex align-items-center fs-4 text-white mb-0">
                Sito di Damiano : SECURITY CECK
            </h1>
        </div>
    </header>
    <div class="form_bello">
    <form action="">
        <label for="pword"><b>Inserisci la password:</b></label><br>
        <input type="password" id="pword" name="pword" required><br><br>
        <input type="hidden" id="ntent" name="ntent" value="1">
        <input type="submit" value="Submit">
    </form>
    </div>
    

    <?php
    $password = $_GET['pword'];
    $tent = $_GET['ntent'];

    if ($password == 'info2023') {
        echo "<p><a class='btn btn-primary' href='./pagina1.php'>👉 Prosegui</a></p>";
    } 
    else {
        if($tent <= 3){
            echo "<p class = 'tent'>Password errata! Riprova</p>";
        }
        else{
            echo "<p class = 'error'>Hai esaurito i tentativi! Non puoi entrare</p>";
        }
    }
    ?>
    <center>
    <img src="https://www.iec.ch/system/files/styles/original_image/private/2021-04/content/media/image/access_0.jpg?itok=SWVXT1cL" alt="immagine">
    </center>
  </body>
</html>

<style>
    p.error{
        color: red;
        font-weight:bold;
        text-align: center;
    }
    p.tent{
        color: blue;
        font-weight: bold;
        text-align: center;
    }
    .form_bello{
        text-align: center;
    }
</style>