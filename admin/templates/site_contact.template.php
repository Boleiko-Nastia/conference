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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Bootstrap remake CSS -->
    <link href="css/bootstrap-theme.min" rel="stylesheet">

    <!-- Bootstrap remake2 CSS -->
    <link href="css/bootstrap-theme" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.svg"  alt="logo"></img></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php">Главная</a>
                </li>
                <li>
                    <a href="sections.php">Секции</a>
                </li>
                <li>
                    <a href="rules.php">Условия</a>
                </li>
                <li>
                    <a href="calendar.php">Календарь</a>
                </li>
                <li>
                    <a href="news.php">Новости</a>
                </li>

                <li>
                    <a href="commission.php">Огранизаторы</a>
                </li>
                <li>
                    <a href="participants.php">Участники</a>
                </li>
                <li>
                    <a href="archive.php">Архив</a>
                </li>
                <li class="active">
                    <a href="contact.php">Контакты</a>
                </li>
                <li class="li-language">
                    <div class="btn-group group-language">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            RU <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">RU</a></li>
                            <li><a href="#">UA</a></li>
                            <li><a href="#">EN</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-sm-12">
            <h1 class="page-header">Контакты
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php">Главная</a>
                </li>
                <li class="active">Контакты</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">

        <div class="col-sm-9 mg-tp-40">
            <!-- Contact Details Column -->
            <big>
                <p><i class="fa fa-map-marker fa-2x"></i>
                    <abbr title="Адрес ВУЗа"> Адрес</abbr>: Проспект Ленина 14, Харьков, Украина</p>

                <p class="mg-tp-20"><i class="fa fa-phone fa-2x"></i>
                    <abbr title="Телефон приемной кафедры"> Тел.</abbr>: (057) 111-22-33</p>
                <p class="mg-tp-20"><i class="fa fa-envelope-o fa-2x"></i>
                    <abbr title="Электронная почта кафедры"> Email</abbr>: <a href="mailto:name@example.com">mst@nure.ua</a>
                </p>
            </big>
            <hr>
            <div class="col-sm-10 del-pad-x">
                <h3>Напишите нам:</h3>
                <br>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>ФИО:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Введите Ваше полное имя, фамилию и отчество!" placeholder="Иванов Иван Иванович">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Номер телефона:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Введите Ваш номер телефона!" placeholder="+38(057) 11-22-333">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Введите Ваш адрес электронной почты!" placeholder="ivanov_ivan@ukr.net">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Сообщение:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Введите текстовое сообщение, которое Вы хотите отправить!" placeholder="Введите сообщение..." maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary blue-button">Отправить</button>
                </form>
            </div>
            <hr>
        </div>
        <!-- /.row -->



        <div class="col-sm-3 del-pad-x">

            <!-- Sidebar Column -->
            <div class="col-sm-12">
                <div class="list-group">
                    <a href="news.php" class="list-group-item">Новости</a>
                    <a href="#" class="list-group-item">Программа конференции</a>
                    <a href="#" class="list-group-item">Сборник работ</a>
                    <a href="#" class="list-group-item">Решение конференции</a>
                </div>
            </div>

            <!-- Date Column -->
            <div class="col-sm-12">
                <h3 class="page-header">Даты</h3>
            </div>
            <div class="col-sm-12">
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">15 января 2016</h4>
                        <p>Начало регистрации.</p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">21 февраля 2016</h4>
                        <p>Окончание принятия/отклонения работ. </p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-clock-o fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">10 марта 2016</h4>
                        <p>Принятие окончательных работю</p>
                    </div>
                </div>
            </div>


            <!-- Download Column -->
            <div class="col-sm-12">
                <h3 class="page-header">Файлы</h3>
            </div>
            <div class="col-sm-12">
                <div class="list-group">
                    <a href="index.php" class="list-group-item media">
                        <div class="pull-left">
                            <i class="fa fa-file-word-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Информационное сообщение</h4>
                            <small>(українською, *. pdf, ~37 K)</small>
                        </div>
                    </a>
                    <a href="index.php" class="list-group-item media mg-tp">
                        <div class="pull-left">
                            <i class="fa fa-file-pdf-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Требования к оформлению тезисов</h4>
                            <small>(українською, *. pdf, ~37 K)</small>
                        </div>
                    </a>
                    <a href="index.php" class="list-group-item media mg-tp">
                        <div class="pull-left">
                            <i class="fa fa-file-pdf-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Требования к оформлению статьи в журнале «Бионика интеллекта»</h4>
                            <small>(українською, *. pdf, ~37 K)</small>
                        </div>
                    </a>
                    <a href="index.php" class="list-group-item media mg-tp">
                        <div class="pull-left">
                            <i class="fa fa-file-word-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Заявка на участие в выставке студенческих рабо</h4>
                            <small>(українською, *. pdf, ~37 K)</small>
                        </div>
                    </a>
                </div>
            </div>


        </div>
    </div>
    <!-- /.row -->

    <hr>
</div>
<!-- /.container -->

<!-- Footer -->
<footer>
    <div class="col-sm-12">
        <center>&copy; 2015 PMW </center>
    </div>
</footer>

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

</body>

</html>