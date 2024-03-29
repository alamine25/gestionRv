<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="rv.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <title>Homepage</title>
</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <span class="avatar">
                <img src="img/user8-512.png" alt="" style="width:5rem ">
                <h4>Dr Ousmane</h4>
                <h5>Medecin</h5>
        </span>

        <a href="#Home"><em class="fa fa-home" style="font-size:16px"></em> Home</a>
        <a href="#rendez-vous"><em class='far fa-calendar-alt' style='font-size:16px'></em> rendez-vous</a>
        <span class="deconnect">
            <a href=""><em class="fa fa-cog" style="font-size:16px"></em> Déconnection</a>
        </span>
    </div>

    <div class="container">
        <div class="notification">
            <!-- bouton de notification -->
            <button type="button" class="btn btn-primary">
             <em class="fas fa-bell"></em> <span class="badge badge-light">4</span>
            </button>
            <!-- fin bouton de notification -->
        </div>
        <!-- table -->
        <table class="table">
            <thead>
                <tr>
                    <th id="" class="col-lg-1">ID</th>
                    <th id="" class="col-sm-2">Nom Patient</th>
                    <th id="" class="col-sm-2">Service</th>
                    <th id="" class="col-sm-2">Docteur</th>
                    <th id="" class="col-sm-1">Date</th>
                    <th id="" class="col-sm-1">Heure debut</th>
                    <th id="" class="col-sm-1">Heure fin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">m-001</th>
                    <td>Samba Ndiaye</td>
                    <td>Cardiologie</td>
                    <td>Dr.Ousmane</td>
                    <td>02-09-2019</td>
                    <td>8h00</td>
                    <td>8h15</td>
                    <td><button type="button" class="btn btn-success btn-sm">Accepter</button></td>
                    <td><button type="button" class="btn btn-danger btn-sm">decliner</button></td>
                </tr>
                <tr>
                    <th scope="row">m-001</th>
                    <td>Samba Ndiaye</td>
                    <td>Cardiologie</td>
                    <td>Dr.Ousmane</td>
                    <td>02-09-2019</td>
                    <td>8h00</td>
                    <td>8h15</td>
                    <td><button type="button" class="btn btn-success btn-sm">Accepter</button></td>
                    <td><button type="button" class="btn btn-danger btn-sm">decliner</button></td>
                </tr>
                <tr>
                    <th scope="row">m-001</th>
                    <td>Samba Ndiaye</td>
                    <td>Cardiologie</td>
                    <td>Dr.Ousmane</td>
                    <td>02-09-2019</td>
                    <td>8h00</td>
                    <td>8h15</td>
                    <td><button type="button" class="btn btn-success btn-sm">Accepter</button></td>
                    <td><button type="button" class="btn btn-danger btn-sm">decliner</button></td>
                </tr>
                <tr>
                    <th scope="row">m-001</th>
                    <td>Samba Ndiaye</td>
                    <td>Cardiologie</td>
                    <td>Dr.Ousmane</td>
                    <td>02-09-2019</td>
                    <td>8h00</td>
                    <td>8h15</td>
                    <td><button type="button" class="btn btn-success btn-sm">Accepter</button></td>
                    <td><button type="button" class="btn btn-danger btn-sm">decliner</button></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>