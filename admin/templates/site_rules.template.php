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

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

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
            <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.svg"  alt="logo"></img></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="index.php"><?=$lang['MENU_HOME']?></a>
                </li>
                <li>
                    <a href="sections.php"><?=$lang['CONFERENCE_AREA']?></a>
                </li>
                <li class="active">
                    <a href="rules.php"><?=$lang['CONDITIONS']?></a>
                </li>
                <li>
                    <a href="calendar.php"><?=$lang['CALENDAR']?></a>
                </li>
                <li>
                    <a href="news.php"><?=$lang['NEWS']?></a>
                </li>
                <li>
                    <a href="commission.php"><?=$lang['ORGANISERS']?></a>
                </li>
                <li>
                    <a href="participants.php"><?=$lang['SPEAKERS']?></a>
                </li>
                <li>
                    <a href="archive.php"><?=$lang['ARCHIVE']?></a>
                </li>
                <li>
                    <a href="contact.php"><?=$lang['CONTACTS']?></a>
                </li>
                <li class="li-language">
                    <div class="btn-group group-language">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?=$lang['LANG']?> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a onclick="set_lang('ru')" href="">RU</a></li>
                            <li><a onclick="set_lang('ua')" href="">UA</a></li>
                            <li><a onclick="set_lang('eng')" href="">EN</a></li>
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
            <h1 class="page-header"><?=$lang['MAINTEXT'][36]?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><?=$lang['MAINTEXT'][37]?></a>
                </li>
                <li class="active"><?=$lang['MAINTEXT'][38]?></li>
            </ol>
        </div>


        <div class="col-sm-9 del-pad-x">
            <div class="col-sm-12">
                <h2 class="page-header"><?=$lang['MAINTEXT'][39]?></h2>
            </div>
            <div class="col-sm-12 del-pad-x">
                <ol class="pad-bot-10">
                    <li><?=$lang['MAINTEXT'][40]?></li>
                    <li><?=$lang['MAINTEXT'][41]?>
                        <ul><li><?=$lang['MAINTEXT'][42]?></li>
                            <li><?=$lang['MAINTEXT'][43]?></li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class="col-sm-12">
                <h2 class="page-header"><?=$lang['MAINTEXT'][44]?></h2>
            </div>
            <div class="col-sm-12 del-pad-x">
                <ul>
                    <li><?=$lang['MAINTEXT'][45]?></li>
                    <li><?=$lang['MAINTEXT'][46]?></li>
                    <li><?=$lang['MAINTEXT'][47]?></li>
                </ul>
            </div>

            <div class="col-sm-12">
                <h2 class="page-header"><?=$lang['MAINTEXT'][48]?></h2>
            </div>
            <div class="col-sm-12 del-pad-x">
                <ol class="pad-bot-10">
                    <li><?=$lang['MAINTEXT'][49]?></li>
                    <li><?=$lang['MAINTEXT'][50]?></li>
                </ol>
            </div>

            <div class="col-sm-12">
                <h2 class="page-header"><?=$lang['MAINTEXT'][51]?></h2>
            </div>
            <div class="col-sm-12 del-pad-x">
                <ul class="pad-bot-10">
                    <li><?=$lang['MAINTEXT'][52]?></li>
                    <li><?=$lang['MAINTEXT'][53]?></li>
                    <li><?=$lang['MAINTEXT'][54]?></li>
                </ul>
            </div>

        </div>


        <hr>


        <div class="col-sm-3 del-pad-x">

            <!-- Sidebar Column -->
            <div class="col-sm-12">
                <div class="list-group">
                    <a href="news.php" class="list-group-item"><?=$lang['NEWS']?></a>
                    <a href="#" class="list-group-item"><?=$lang['PROGRAM']?></a>
                    <a href="#" class="list-group-item"><?=$lang['COLLECTIONOFARTICLES']?></a>
                    <a href="#" class="list-group-item"><?=$lang['DECISION']?></a>
                </div>
            </div>

            <!-- Date Column -->
            <div class="col-sm-12">
                <h3 class="page-header"><?=$lang['DATES']?></h3>
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
                        <h4 class="media-heading"><?=$lang['DATE']['START'][0]?></h4>
                        <p><?=$lang['DATE']['START']['TEXT']?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-hourglass-start fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$lang['DATE']['END'][0]?></h4>
                        <p><?=$lang['DATE']['END']['TEXT']?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-hourglass-start fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$lang['DATE']['FINAL'][0]?></h4>
                        <p><?=$lang['DATE']['FINAL']['TEXT']?></p>
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




    <hr>

</div>

<!-- Footer -->
<footer>
    <div class="col-sm-12">
        <center>&copy; 2016 PMW </center>
    </div>
</footer>

</div>
<!-- /.row -->




<!-- /.container -->

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="../../js/user.js"></script>
</body>

</html>
