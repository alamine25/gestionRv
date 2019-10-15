<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
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
                <form action="">
                    <h1 class="font-weight-bold" style="font-size: 4vw;">Sign In</h1>
                    <p class="font-weight-light" style="font-size: 1.5vw;">Veuillez entrer vos identifications</p>
                    <div class="form-group">
                        <i class='fas fa-users icon'></i>
                        <input type="text" class="form-control" placeholder="Votre Email" value="">
                    </div>
                    <div class="form-group">
                        <i class='fas fa-key icon'></i>
                        <input type="password" class="form-control" placeholder="Votre Password" value="">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Se connecter">
                    </div>

                </form>
            </div>

        </div>
    </div>


</body>

</html>