<?php
$bdd = new PDO ('mysql:host=localhost;dbname=gestion_rv','root','root');
//  Verification des parametre
//  Récupération de l'utilisateur 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    $req = $bdd->query("SELECT * FROM medecin WHERE email= '$email'  AND  passwd = '$passwd'   ");
    $req->execute(array($email, $passwd));
    $resultat = $req->fetch();
    if($resultat['email'] == $email AND $resultat['passwd'] == $passwd){
        header('location:homepageM.php');
    }

    else
    {
        echo '<p class="alert alert-danger">Adresse email ou mot de passse incorrect.</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <title>Systeme de Gestion de Rendez-vous </title>
</head>

<body>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-2">
                <img src="img/bitmap.png" class="rounded-circle" style="width: 20%;" alt="">
                <p>Bienvenue à <strong>SEN MEDIC</strong> </p>
                <div class="color-overlay"></div>
            </div>
            <!-- separate les deux blocks  -->

            <div class="col-md-6 login-form-1">
                 <form class="col-12" action="" method="post">
                 <h1 class="font-weight-bold" style="font-size: 4vw;">Sign In</h1>
                    <p class="font-weight-light" style="font-size: 1.5vw;">Veuillez entrer vos identifications</p>
                    <div class="form-group"> <em class="fas fa-user fasi"></em>
                    <input  type="text" class="form-control" name="email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group"><em class="fas fa-lock fasi"></em>
                    <input type="password" class="form-control" name="passwd" placeholder="Entrez votre mot de passe">
                    </div>
                    <em class="fas fa-sign-in-alt"></em> <input type="submit" class="btn button" value="Connecter" name="submit">
                </form>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>