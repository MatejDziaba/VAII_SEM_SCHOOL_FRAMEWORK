<?php
/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <script src="public/js/script.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Bootstrap.css">

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 20px;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 950px}

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 80px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 60px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 20px;
            }
            .row.content {height:auto;}
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-color navbar-fixed-top">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <a class="navbar-nav-spec" href="?c=home"">
                <i class="burza-logo" style="position: relative; z-index: auto;">
                    <img src="https://uspesnynaburze.sk/wp-content/uploads/2021/04/ponuka-kryptomien-na-burze.svg" width="52" height="52">
                </i>
                </a>
                <li class="active"><a class= "home-spec btn" href="?c=home">Domov</a></li>
                <li class="dropdown btn"><a class="navbar-item-spec" data-toggle="dropdown" href="#">Trh <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Template1.html">Tuzemský trh</a></li>
                        <li><a href="Template2.html">Kontinetalný trh</a></li>
                        <li><a href="Template3.html">Globalný trh</a></li>
                    </ul>
                </li>
                <li class="dropdown btn"><a class="navbar-item-spec" data-toggle="dropdown" href="#">Podpora <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Template1.html">Autorizácia</a></li>
                        <li><a href="Template2.html">Kúpa</a></li>
                        <li><a href="Template3.html">Predaj</a></li>
                    </ul>
                </li>
                <li class="dropdown btn"><a class="navbar-item-spec" data-toggle="dropdown" href="#">FAQ <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="Template1.html">Recenzia</a></li>
                        <li><a href="Template2.html">FAQ</a></li>
                    </ul>
                </li>

            </ul>

            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control form-control-spec" placeholder="Hľadaj" name="hľadaj">
                </div>
                <button type="submit" class="btn btn-default form-control-spec">Potvrď</button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                <a href="?c=RegistrationBuyer&a=index"><button class="btn btn-danger navbar-btn btn-lg button-sign-up-specify">Registrovať</button></a>
                <a href="<?= \App\Config\Configuration::LOGIN_URL ?>"><button class="btn btn-danger navbar-btn btn-lg button-login-specify">Prihlasiť</button></a>
            </ul>

        </div>
    </div>
</nav>

</body>
</html>

<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/styl.css">
    <script src="public/js/script.js"></script>
</head>
<body>

<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
</body>
</html>
