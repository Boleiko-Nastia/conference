<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Конференция в Харьковском национальном университете радиоэлектроники</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Bootstrap remake CSS -->
    <link href="../css/bootstrap-theme.min" rel="stylesheet">

    <!-- Bootstrap remake2 CSS -->
    <link href="css/bootstrap-theme" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html"><img class="logo" src="../img/logo.svg"  alt="logo"></img></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="sections.html"><i class="fa fa-sign-out"></i> Выход</a>
                </li>
            </ul>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container mg-tp-40">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">


            <div class="col-sm-3 del-pad-x">

                <!-- Sidebar Column -->
                <div class="col-sm-12 mg-tp-40">
                    <div class="list-group">
                        <a href="#" class="list-group-item" id="btn-2" data-toggle="collapse" data-target="#submenu-trans" aria-expanded="false">Создание новости <i class="fa fa-sort-desc pull-right"></i></a>
                            <ul class="nav collapse" id="submenu-trans" role="menu" aria-labelledby="btn-2">
                                <li><a href="add_news.php">Создание новости RU</a></li>
                                <li><a href="add_news_translations.php">Добавление перевода UA/ENG</a></li>
                            </ul>
                        <a href="creating_newsletter" class="list-group-item">Рассылка</a>
                        <a href="#" class="list-group-item" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">Добавление участников <i class="fa fa-sort-desc pull-right"></i></a>
                            <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                                <li><a href="add_user_conf">конференции</a></li>
                                <li><a href="add_user_sem">школы-семинара</a></li>
                            </ul>
                        <a href="add_file" class="list-group-item">Добавление файлов в архив</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <h1 class="page-header">Добавдение перевода новости UA/ENG
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Главная</a>
                    </li>
                    <li><a href="main_ADMIN.html">Администратор</a>
                    </li>
                    <li class="active">Добавление перевода UA/ENG</li>
                </ol>            
 
            <!-- Contact Details Column -->
                <div class="col-sm-12 del-pad-x">
                        <div class="control-group form-group">
                            <h3>Выберите язык добавления перевода для соответствующей новости!</h3>
               <!-- Adding translations for NEWS-1 -->
                            <hr>
                            <div class="row">
                                <div class="col-sm-6"><h4>Название новости №1 Пример </h4></div>
                                <div class="col-sm-6"> 
                                    <div class="controls"> 
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default dropdown-toggle mg-r-20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                UA
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="add_news_translations_UA.php">UA</a></li>
                                                <li><a href="add_news_translations_ENG.php">EN</a></li>
                                            </ul>
                                        </div>
                                        <button type="submit" class="btn btn-primary blue-button">Добавить перевод</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                <!-- // END Adding translations for NEWS-1 -->

                 <!-- Adding translations for NEWS-2 -->
                            <hr>
                            <div class="row">
                                <div class="col-sm-6"><h4>Название новости №2 Пример </h4></div>
                                <div class="col-sm-6"> 
                                    <div class="controls"> 
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default dropdown-toggle mg-r-20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                UA
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="add_news_translations_UA.php">UA</a></li>
                                                <li><a href="add_news_translations_ENG.php">EN</a></li>
                                            </ul>
                                        </div>
                                        <button type="submit" class="btn btn-primary blue-button">Добавить перевод</button>
                                    </div>
                                </div>
                            </div>
                <!-- // END Adding translations for NEWS-2 -->  
                <!-- Adding translations for NEWS-3 -->
                            <hr>
                            <div class="row">
                                <div class="col-sm-6"><h4>Название новости №3 Пример </h4></div>
                                <div class="col-sm-6"> 
                                    <div class="controls"> 
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-default dropdown-toggle mg-r-20" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                UA
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="add_news_translations_UA.php">UA</a></li>
                                                <li><a href="add_news_translations_ENG.php">EN</a></li>
                                            </ul>
                                        </div>
                                        <button type="submit" class="btn btn-primary blue-button">Добавить перевод</button>
                                    </div>
                                </div>
                            </div>
                <!-- // END Adding translations for NEWS-3 -->       
                
                </div>
                <hr>
                <div class="footer-push"></div>
            </div>
        <!-- /.row -->


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    </div>
    <!-- Footer -->

    <footer>
        <div class="col-sm-12 text-center">
            &copy; 2015 PMW
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

</body>

</html>