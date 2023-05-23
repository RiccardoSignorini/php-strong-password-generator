

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1 class="my-4">Password sicurissima</h1>
        <form method="GET"> 
            <!-- INPUT PER LA LUNGHEZZA + BUTTON PER FAR PARTIRE LA FUNZIONE -->
            <div class="my-4">
                <label for="lunghezza-password">Lunghezza password:</label> 
                <input type="number" id="lunghezza-password" name="lunghezza-password" required min="6" max="30"> 
                <button type="submit" class="btn btn-primary mx-4">Genera password</button>    
            </div>
        </form>   
        <?php 
            if(isset($_GET['lunghezza-password'])){
                $lunghezza = $_GET['lunghezza-password'];

                function generaPassword($lunghezza) {
                    $caratteri = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
                    $password = substr( str_shuffle( $caratteri ), 0, $lunghezza );
                    return $password;
                }
        ?>
                <p>La password generata è: <?php echo generaPassword($lunghezza); ?> </p>
        <?php } ?>
                 
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>