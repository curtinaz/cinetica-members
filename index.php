<?php

require_once 'config.php';

if (!isset($_COOKIE['logado'])) { // testa se o usuário está logado, se não estiver, mostra a tela de Login.

?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">
        <title>Conecte-se</title>
    </head>

    <body>
        <main>
            <div class="container">
                <!-- Login -->
                <form action="./actions/login.php" class="" id="login-form" method="POST">
                    <h1>Login</h1>
                    <input class="campo" id="mail" name="mail" type="email" placeholder="E-mail" required>
                    <input class="campo" id="senha" name="senha" type="password" placeholder="Senha" required>
                    <input type="submit" value="Entrar">

                    <a href="https://cineticaedu.com/" style="margin-bottom: -.4rem;">Não tem uma conta? Saiba mais!</a>

                </form>
            </div>
        </main>


        <script src="script.js"></script>
    </body>

    </html>

<?php

} else {
    $name = $_COOKIE['name'];
    $mail = $_COOKIE['email'];
    $userId = $_COOKIE['user_id'];

    $nameArray = explode(" ", $name);
    $firstname = $nameArray[0];
    $lastname = $nameArray[(count($nameArray) - 1)];

    // fecha o php para o html entrar 
?>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Módulos - Dermato Expert</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots" content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css" href="assets/css/app.css" rel="stylesheet">
        <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
        <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
        <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">

        <!-- ion Range Slider -->
        <link type="text/css" href="assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
        <link type="text/css" href="assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet">





    </head>

    <body class="layout-default">











        <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
            <div class="mdk-drawer-layout__content">

                <!-- Header Layout -->
                <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>

                    <!-- Header -->

                    <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall" data-retarget-mouse-scroll="false">
                        <div class="mdk-header__content">

                            <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>
                                <div class="container-fluid page__container pr-0">

                                    <!-- Navbar toggler -->
                                    <button class="navbar-toggler navbar-toggler-custom  d-lg-none d-flex mr-navbar" type="button" data-toggle="sidebar">
                                        <span class="material-icons icon-14pt">menu</span>
                                    </button>




                                    <div class="navbar-collapse collapse" id="navbarsExample03">
                                        <!-- <p class="sidebar-brand text-white">Dermato Expert</p> -->
                                    </div>






                                    <!-- <ul class="nav navbar-nav d-none d-md-flex">
                                    <li class="nav-item dropdown">
                                        <a href="#notifications_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
                                            <i class="material-icons nav-icon navbar-notifications-indicator">notifications</i>
                                        </a>
                                        <div id="notifications_menu" class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                            <div class="dropdown-item d-flex align-items-center py-2">
                                                <span class="flex navbar-notifications-menu__title m-0">Notifications</span>
                                                <a href="javascript:void(0)" class="text-muted"><small>Clear all</small></a>
                                            </div>
                                            <div class="navbar-notifications-menu__content" data-perfect-scrollbar>
                                                <div class="py-2">

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-xs">
                                                                <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="">A.Demian</a> left a comment on <a href="">Stack</a><br>
                                                            <small class="text-muted">1 minute ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title bg-primary rounded-circle"><i class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            New user <a href="#">Peter Parker</a> signed up.<br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <a href="#">
                                                                <div class="avatar avatar-xs">
                                                                    <span class="avatar-title rounded-circle">JD</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="flex">
                                                            <a href="#">Big Joe</a> <small class="text-muted">wrote:</small><br>
                                                            <div>Hey, how are you? What about our next meeting</div>
                                                            <small class="text-muted">2 minutes ago</small>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="dropdown-item text-center navbar-notifications-menu__footer">View All</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#events-drawer" data-toggle="sidebar" class="nav-link d-flex align-items-center">
                                            <i class="material-icons nav-icon">event_note</i>
                                        </a>
                                    </li>
                                    <li class="nav-item nav-item-circle">
                                        <a href="#" class="nav-link d-flex align-items-center navbar-circle-link">
                                            <span class="rounded-circle">
                                                <span class="material-icons text-primary">flag</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul> -->

                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" data-caret="false" class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar">
                                            <span class="material-icons">account_circle</span><?php echo $firstname . ' ' . $lastname ?>
                                        </a>
                                        <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                            <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">

                                                <span class="mr-3">
                                                    <img src="assets/images/frontted-logo-blue.svg" width="43" height="43" alt="avatar">
                                                </span>
                                                <span class="flex d-flex flex-column">
                                                    <strong class="h5 m-0"><?php echo $firstname . ' ' . str_split($lastname)[0] . "." ?></strong>
                                                    <small class="text-muted text-uppercase">ESTUDANTE</small>
                                                </span>

                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <!-- <a class="dropdown-item d-flex align-items-center py-2" href="edit-account.html">
                                                <span class="material-icons mr-2">account_circle</span> Editar conta
                                            </a>
                                            <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                                <span class="material-icons mr-2">settings</span> Configurações
                                            </a> -->
                                            <a class="dropdown-item d-flex align-items-center py-2" href="./actions/logout.php">
                                                <span class="material-icons mr-2">exit_to_app</span> Sair
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- // END Header -->

                    <!-- Header Layout Content -->
                    <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                        <div class="hero-banner bg-primary d-flex flex-row align-items-center" style="height:250px;">
                            <div class="container-fluid page__container">
                                <div class="d-flex flex-column">
                                    <div class="mb-1">
                                        <!-- <a href="#" class="badge badge-dark-gray text-white">Back to Courses</a> -->
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="mr-3">
                                            <img src="assets/images/logos/rails.white.svg" width="100" alt="rails logo">
                                        </div>
                                        <div>
                                            <h1 class="text-white mb-0">Dermato Expert</h1>
                                            <p class="lead text-white">O curso que te torna um expert em dermatologia</p>
                                            <!-- <div class="my-2 text-white d-flex">
                                            <strong class="mr-4 "><i class="material-icons icon-16pt icon-light">weekend</i> Beginner</strong>
                                            <strong><i class="material-icons icon-16pt icon-light">watch_later</i> 2:42</strong>
                                        </div> -->
                                        </div>
                                    </div>

                                    <div class="mt-1">
                                        <!-- <a href="#" class="btn btn-light btn-rounded mr-2">Assistir proxima aula</a> -->
                                        <!-- <a href="#" class="btn btn-outline-light text-white btn-hover-primary btn-rounded"><i class="material-icons">local_activity</i> Add to list</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-md-4 order-12">
                                </div>
                                <div class="col-md-8">

                                    <?php

                                    $modulosQuery = $conexao->query("SELECT * FROM modulos WHERE cursoid = '1'");
                                    $infoModulos = $modulosQuery->fetch_all(MYSQLI_ASSOC);


                                    if ($modulosQuery->num_rows >= 1) {

                                        for ($i = 0; $i < $modulosQuery->num_rows; $i++) {

                                            $modTitle = $infoModulos[$i]['nome'];
                                            $modDesc = $infoModulos[$i]['descricao'];

                                            echo '<div class="mb-3"><strong class="text-dark-gray">' . $modTitle . '</strong></div>';
                                            echo '<p class="mb-3">';
                                            echo $modDesc;
                                            echo '</p>';

                                            $modid = $infoModulos[$i]['id'];

                                            $aulasQuery = $conexao->query("SELECT * FROM aulas WHERE modid = '$modid'");
                                            $infoAulas = $aulasQuery->fetch_all(MYSQLI_ASSOC);

                                            echo '<div>';
                                            echo '<ul class="list-group list-lessons">';

                                            if ($aulasQuery->num_rows >= 1) {
                                                for ($j = 0; $j < $aulasQuery->num_rows; $j++) {
                                                    // $aulaTitulo = $infoAulas[$j]['titulo'];
                                                    // $aulaId = $infoAulas[$j]['id'];

                                                    echo '<li style="cursor: pointer;" onClick=window.location.href="./aula?id=' . $infoAulas[$j]['id'] . '" class="list-group-item d-flex">';
                                                    echo '<a href=" ./aula?id=' . $infoAulas[$j]['id'] . ' ">' . $infoAulas[$j]['titulo'] . '</a>';
                                                    echo '<div class="ml-auto d-flex align-items-center">';
                                                    // echo '<span class="badge badge-success mr-2">ASSISTIDA</span>';
                                                    echo '<span class="text-muted"><i class="material-icons icon-16pt icon-light">watch_later</i> ' . $infoAulas[$j]['tamanho'] . '</span>';
                                                    echo '</div>';
                                                    echo '</li>';
                                                }
                                            }


                                            echo '</ul>';
                                            echo '</div><br>';
                                        }
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                <div class="mdk-drawer__content">
                    <div class="sidebar sidebar-dark sidebar-left bg-dark-gray" data-perfect-scrollbar>

                    <div class="d-flex align-items-center sidebar-p-a">
                            <img src="./assets/logo.png" width="40%" class="flex align-items-center" style="
    width: 20%;
">
                        </div>


                        <ul class="sidebar-menu">
                            <li class="sidebar-menu-item">
                            </li>
                        </ul>

                        <div class="sidebar-heading">Estudante</div>
                        <div class="sidebar-block p-0">
                            <ul class="sidebar-menu mt-0">
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button" href="#">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">queue_play_next</i>
                                        <span class="sidebar-menu-text">Assistir Aulas</span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-menu-item">
                                <a class="sidebar-menu-button" href="cursos.php">
                                    <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">shopping_cart</i>
                                    <span class="sidebar-menu-text">Curso Completo</span>
                                </a>
                            </li> -->
                                <!-- <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="student-lessons.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons locked">dns</i>
                                        <span class="sidebar-menu-text">Certificado</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="edit-account.html">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">settings</i>
                                        <span class="sidebar-menu-text">Editar conta</span>
                                    </a>
                                </li> -->
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="./actions/logout">
                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">exit_to_app</i>
                                        <span class="sidebar-menu-text">Sair</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- // END drawer-layout -->

        <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-light sidebar-left" data-perfect-scrollbar>




                    <small class="text-dark-gray px-3 py-1">
                        <strong>Thursday, 28 Feb</strong>
                    </small>

                    <div class="list-group list-group-flush">

                        <div class="list-group-item bg-light">
                            <div class="row">
                                <div class="col-auto d-flex flex-column">
                                    <small>12:30 PM</small>
                                    <small class="text-dark-gray">2 hrs</small>
                                </div>
                                <div class="col">
                                    <div class="d-flex flex-column flex">
                                        <a href="#" class="text-body"><strong class="text-15pt">Marketing Team Meeting</strong></a>

                                        <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                    </div>
                                    <div class="avatar-group mt-2">

                                        <div class="avatar avatar-xs">
                                            <img src="assets/images/256_joao-silas-636453-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <img src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <img src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <small class="text-dark-gray px-3 py-1">
                        <strong>Wednesday, 27 Feb</strong>
                    </small>

                    <div class="list-group list-group-flush">

                        <div class="list-group-item bg-light">
                            <div class="row">
                                <div class="col-auto d-flex flex-column">
                                    <small>07:48 PM</small>
                                    <small class="text-dark-gray">30 min</small>
                                </div>
                                <div class="col">
                                    <div class="d-flex flex-column flex">
                                        <a href="#" class="text-body"><strong class="text-15pt">Call Alex</strong></a>


                                        <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                    </div>



                                </div>
                            </div>
                        </div>

                    </div>

                    <small class="text-dark-gray px-3 py-1">
                        <strong>Tuesday, 26 Feb</strong>
                    </small>

                    <div class="list-group list-group-flush">

                        <div class="list-group-item bg-light">
                            <div class="row">
                                <div class="col-auto d-flex flex-column">
                                    <small>03:13 PM</small>
                                    <small class="text-dark-gray">2 hrs</small>
                                </div>
                                <div class="col">
                                    <div class="d-flex flex-column flex">
                                        <a href="#" class="text-body"><strong class="text-15pt">Design Team Meeting</strong></a>

                                        <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">location_on</i> 16845 Hicks Road</small>


                                    </div>
                                    <div class="avatar-group mt-2">

                                        <div class="avatar avatar-xs">
                                            <img src="assets/images/256_rsz_1andy-lee-642320-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <img src="assets/images/256_luke-porter-261779-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                        <div class="avatar avatar-xs">
                                            <img src="assets/images/stories/256_rsz_clem-onojeghuo-193397-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <small class="text-dark-gray px-3 py-1">
                        <strong>Monday, 25 Feb</strong>
                    </small>

                    <div class="list-group list-group-flush">

                        <div class="list-group-item bg-light">
                            <div class="row">
                                <div class="col-auto d-flex flex-column">
                                    <small>12:30 PM</small>
                                    <small class="text-dark-gray">2 hrs</small>
                                </div>
                                <div class="col d-flex">
                                    <div class="d-flex flex-column flex">
                                        <a href="#" class="text-body"><strong class="text-15pt">Call Wendy</strong></a>


                                        <small class="text-muted d-flex align-items-center"><i class="material-icons icon-16pt mr-1">phone</i> 202-555-0131</small>

                                    </div>


                                    <div class="avatar avatar-xs">
                                        <img src="assets/images/256_michael-dam-258165-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- App Settings FAB -->
        <div id="app-settings">
            <app-settings layout-active="default" :layout-location="{
      'default': 'student-lessons.html',
      'fixed': 'fixed-student-lessons.html',
      'fluid': 'fluid-student-lessons.html',
      'mini': 'mini-student-lessons.html'
    }"></app-settings>
        </div>

        <!-- jQuery -->
        <script src="assets/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="assets/vendor/popper.min.js"></script>
        <script src="assets/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="assets/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="assets/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="assets/vendor/material-design-kit.js"></script>

        <!-- Range Slider -->
        <script src="assets/vendor/ion.rangeSlider.min.js"></script>
        <script src="assets/js/ion-rangeslider.js"></script>

        <!-- App -->
        <script src="assets/js/toggle-check-all.js"></script>
        <script src="assets/js/check-selected-row.js"></script>
        <script src="assets/js/dropdown.js"></script>
        <script src="assets/js/sidebar-mini.js"></script>
        <script src="assets/js/app.js"></script>


    </body>

    </html>

<?php } ?>