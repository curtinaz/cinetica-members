<?php

require_once 'config.php';

if (!isset($_COOKIE['logado'])) { // testa se o usuário está logado, se não estiver, mostra a tela de Login.

    header('Location: ./');
} else {
    $name = $_COOKIE['name'];
    $mail = $_COOKIE['email'];
    $userId = $_COOKIE['user_id'];

    if (isset($_GET['id'])) {
        if ($_GET['id']) {
            $aulaid = $_GET['id'];
            $aulaQuery = $conexao->query("SELECT * FROM aulas WHERE id = '$aulaid'");
            $infoAula = $aulaQuery->fetch_all(MYSQLI_ASSOC);
            if ($aulaQuery->num_rows == 1) {
                $aulaTitulo = $infoAula[0]['titulo'];
                $aulaDesc = $infoAula[0]['corpo'];
                $youtube = $infoAula[0]['youtube'];
            } else {
                die('error'); //redirecionar para index
            }
        } else {
            die('error'); //redirecionar para index
        }
    } else {
        die('error'); //redirecionar para index
    }

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
        <title><?php echo $aulaTitulo ?> - Dermato Expert</title>

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
                                        <p class="sidebar-brand text-white">Dermato Expert</p>
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


                        <div class="page__heading border-bottom">
                            <div class="container-fluid page__container d-flex align-items-center">
                                <h1 class="mb-0"><?php echo $aulaTitulo ?></h1>
                            </div>
                        </div>

                        <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="dp-preview card">
                                        <iframe width="100%" height="380" src="https://www.youtube.com/embed/<?php echo $youtube ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <!-- <img src="https://trello-attachments.s3.amazonaws.com/605fabee0fd47879db19b6fc/60be4e4ed2e9e61bb9aa401d/20545830b75c56f31b3f66879f919d68/ss.png" alt="digital product" class="img-fluid"> -->
                                        <!-- <span class="dp-preview__overlay">
                                        <span class="btn btn-light">ASSISTIR</span>
                                    </span> -->
                                    </div>

                                    <?php
                                    if ($aulaDesc) {

                                        echo '<div class="mb-3"><strong class="text-dark-gray">DESCRIÇÃO</strong></div>';
                                        echo '<p class="mb-3">' . $aulaDesc . '</p>';
                                    }
                                    ?>

                                    <br><br>

                                </div>
                                <div class="col-lg-4">
                                    <div class="card card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <img width="100%" src="https://cineticaedu.com/wp-content/uploads/2021/05/Agrupar-4-min.png">
                                        </div>

                                        <div class="mb-4">
                                            <!-- <button class="btn btn-outline-success btn-block btn-lg">Marcar como concluído</button><br> -->
                                            <?php
                                            if ($_GET['id'] == 15) {
                                                echo '<a href="./certificado/gerador.php"><button class="btn btn-light btn-block">Emitir certificado</button></a>';
                                            }
                                            ?>
                                        </div>

                                        <div class="mb-4 text-center">
                                            <div class="d-flex flex-column align-items-center justify-content-center">

                                                <span class="mb-1">
                                                    <a href="#" class="rating-link active"><i class="material-icons ">star</i></a>
                                                    <a href="#" class="rating-link active"><i class="material-icons ">star</i></a>
                                                    <a href="#" class="rating-link active"><i class="material-icons ">star</i></a>
                                                    <a href="#" class="rating-link active"><i class="material-icons ">star</i></a>
                                                    <a href="#" class="rating-link active"><i class="material-icons ">star_half</i></a>
                                                </span>
                                                <div class="d-flex align-items-center">
                                                    <strong>4.8/5</strong>
                                                    <span class="text-muted ml-1">&mdash; 354 avaliações</span>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- <div class="list-group list-group-flush mb-4">
                                        <div class="list-group-item bg-transparent d-flex align-items-center px-0">
                                            <strong>Level</strong>
                                            <div class="ml-auto">Beginner</div>
                                        </div>
                                        <div class="list-group-item bg-transparent d-flex align-items-center px-0">
                                            <strong>Released</strong>
                                            <div class="ml-auto">21 January 2019</div>
                                        </div>
                                        <div class="list-group-item bg-transparent d-flex align-items-center px-0">
                                            <strong>Students</strong>
                                            <div class="ml-auto">393</div>
                                        </div>
                                    </div>

                                    <div class="card card-body mb-0 bg-dark">
                                        <ul class="list-unstyled text-white ml-1 mb-0">
                                            <li class="d-flex align-items-center pb-1"><i class="material-icons icon-16pt text-white mr-2">check_circle</i> Created by the Frontted Team</li>
                                            <li class="d-flex align-items-center pb-1"><i class="material-icons icon-16pt text-white mr-2">check_circle</i> 6 Months Support</li>
                                            <li class="d-flex align-items-center"><i class="material-icons icon-16pt text-white mr-2">check_circle</i> 100% Money Back Guarantee</li>
                                        </ul>
                                    </div> -->

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- // END header-layout__content -->

                </div>
                <!-- // END header-layout -->

            </div>
            <!-- // END drawer-layout__content -->

            <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
                <div class="mdk-drawer__content">
                    <div class="sidebar sidebar-dark sidebar-left bg-dark-gray" data-perfect-scrollbar>

                        <div class="d-flex align-items-center sidebar-p-a">
                            <img src="./assets/logo.png" width="40%" class="flex align-items-center" style="
    width: 20%; padding: 8px 40px 0 40px;
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
                                    <a class="sidebar-menu-button" href="./">
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
      'default': 'student-course-purchase.html',
      'fixed': 'fixed-student-course-purchase.html',
      'fluid': 'fluid-student-course-purchase.html',
      'mini': 'mini-student-course-purchase.html'
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

        <!-- App Settings (safe to remove) -->
        <!-- <script src="assets/js/app-settings.js"></script> -->




    </body>

    </html>

<?php } //reinicia o php para poder fechar
?>