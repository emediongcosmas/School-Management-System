<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title><?= $page; ?></title>

    <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">
    <link href="../assets/css/custom.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a href="#">
                            <h3>Admin Panel </h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                         <li class=<?php if($page == "Dashboard"){echo "active";};?>>
                            <a href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class=<?php if($page == "Student"){echo "active has-sub";};?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-graduation-cap"></i>Student</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="addstudent.php">Add Student</a>
                                </li>
                                <li>
                                    <a href="viewstudent.php">View Student</a>
                                </li>
                            </ul>
                        </li>
                        <li class=<?php if($page == "Teacher"){echo "active has-sub";};?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Teacher</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="addteacher.php">Add Teacher</a>
                                </li>
                                <li>
                                    <a href="viewteacher.php">View Teacher</a>
                                </li>
                            </ul>
                        </li>
                        <li class=<?php if($page == "Subject"){echo "active has-sub";};?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-clipboard"></i>Subject</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="addsubject.php">Add Subject</a>
                                </li>
                                <li>
                                    <a href="viewsubject.php">View Subject</a>
                                </li>
                            </ul>
                        </li>
                        <li class=<?php if($page == "Grade"){echo "active";};?>>
                            <a href="grade.php">
                                <i class="fas fa-chart-bar"></i>Grade</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h3>Admin Panel </h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class=<?php if($page == "Dashboard"){echo "active";};?>>
                            <a href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class=<?php if($page == "Student"){echo "active has-sub";};?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-graduation-cap"></i>Student</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="addstudent.php">Add Student</a>
                                </li>
                                <li>
                                    <a href="viewstudent.php">View Student</a>
                                </li>
                            </ul>
                        </li>
                        <li class=<?php if($page == "Teacher"){echo "active has-sub";};?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user"></i>Teacher</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="addteacher.php">Add Teacher</a>
                                </li>
                                <li>
                                    <a href="viewteacher.php">View Teacher</a>
                                </li>
                            </ul>
                        </li>
                        <li class=<?php if($page == "Subject"){echo "active has-sub";};?>>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-clipboard"></i>Subject</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="addsubject.php">Add Subject</a>
                                </li>
                                <li>
                                    <a href="viewsubject.php">View Subject</a>
                                </li>
                            </ul>
                        </li>
                        <li class=<?php if($page == "Grade"){echo "active";};?>>
                            <a href="grade.php">
                                <i class="fas fa-chart-bar"></i>Grade</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?= 'admin'; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?= 'Admin'; ?></a>
                                                    </h5>
                                                    <span class="email"><?= $email; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
