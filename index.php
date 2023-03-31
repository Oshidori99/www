<?php
include 'contact.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-8 m-4">
            <form method="POST" action="index.php">
                <div class="form-group">
                    <div class="text-center">
                        <h1>Contactez-moi!</h1>
                    </div>
                    <div class="d-flex">
                        <input type="text" name="prenom" placeholder="Nom" autocomplete="off" class="form-control"/>
                        <input type="text" name="nom" placeholder="Prenom" autocomplete="off" class="form-control"/>
                    </div>
                    <br>
                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                    <br>
                    <textarea name="message" cols="30" rows="10" placeholder="Votre message" ></textarea>
                    <br>
                    <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    <br>
                    <br>
                    <h2><?php
                    if (!empty($confirmation_mail )) {
                        
                        echo $confirmation_mail;
                    }
                    echo $erreur_mail;              ?></h2>

                    <h2><?php
                    if (!empty($confirmation_envoi)) {
                        if (!empty($confirmation_mail)) {
                        echo $confirmation_envoi;
                    }
                }
                    
                    ?></h2>
                </div>


            </form>

        </div>

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>