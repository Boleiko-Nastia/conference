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
            <a class="navbar-brand" href="index.html"><img class="logo" src="img/logo.svg"  alt="logo"></img></a>
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
<!-- Page Content -->
<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-sm-12">
                        <h1 class="page-header"><?=$lang['MAINTEXT'][55]?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><?=$lang['MAINTEXT'][56]?></a>
                </li>
                <li class="active"><?=$lang['MAINTEXT'][57]?></li>
            </ol>
        </div>


        <div class="col-sm-9 del-pad-x">
            <div class="col-sm-12">
                <div class="panel panel-default mg-tp-40">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="media-body calendar-head">
                                <h3 class="media-heading"><?=$lang['MAINTEXT'][58]?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <h2><?=$lang['MAINTEXT'][59]?>
                        </h2>

                        <table class="table table-striped del-mar-bot">
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 9:00 - 12:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][60]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 11:00 - 12:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][61]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 12:00 - 14:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][62]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 14:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][63]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 14:30</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][64]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 15:30 - 17:30</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][65]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 17:30 - 18:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][66]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 18:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][67]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 19:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][68]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 20:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][69]?></td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-hourglass-start fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="media-body calendar-head">
                                <h3 class="media-heading"><?=$lang['MAINTEXT'][70]?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <h2><?=$lang['MAINTEXT'][71]?>
                        </h2>
                        <!-- Date/Time -->
                        <table class="table table-striped del-mar-bot">
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 9:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][72]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 10:00 - 12:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][73]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 12:00 - 12:30</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][74]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 13:30 - 15:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][75]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 15:00 - 16:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][76]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 16:00 - 18:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][77]?></td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-hourglass-start fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="media-body calendar-head">
                                <h3 class="media-heading"><?=$lang['MAINTEXT'][78]?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <h2><?=$lang['MAINTEXT'][79]?>
                        </h2>

                        <!-- Date/Time -->
                        <table class="table table-striped del-mar-bot">
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 9:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][80]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 10:00 - 13:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][81]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 13:00 - 13:30</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][82]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 13:30 - 15:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][83]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 15:00 - 16:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][84]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 16:00 - 18:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][85]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 19:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][86]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 20:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][87]?></td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-hourglass-start fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="media-body calendar-head">
                                <h3 class="media-heading"><?=$lang['MAINTEXT'][88]?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <h2><?=$lang['MAINTEXT'][89]?>
                        </h2>

                        <!-- Date/Time -->
                        <table class="table table-striped del-mar-bot">
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 7:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][90]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 8:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][91]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 11:00 - 13:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][92]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 14:00 - 15:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][93]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 15:00 - 16:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][94]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 16:00 - 18:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][95]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 19:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][96]?></td>
                            </tr>
                            <tr>
                                <td class="col-sm-2"><i class="fa fa-clock-o"></i> 18:00</td>
                                <td class="col-sm-8"><?=$lang['MAINTEXT'][97]?></td>
                            </tr>
                        </table>
                    </div>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="media">
                            <div class="pull-left">
                                <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                      <i class="fa fa-hourglass-start fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                            <div class="media-body calendar-head">
                                <h3 class="media-heading"><?=$lang['MAINTEXT'][98]?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">

                        <h2><?=$lang['MAINTEXT'][99]?>
                        </h2>

                    </div>
                </div>
            </div>
        </div>


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
                                <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$lang['DATE']['Date1'][0]?></h4>
                        <p><?=$lang['DATE']['Date1']['TEXT']?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$lang['DATE']['Date2'][0]?></h4>
                        <p><?=$lang['DATE']['Date2']['TEXT']?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$lang['DATE']['Date3'][0]?></h4>
                        <p><?=$lang['DATE']['Date3']['TEXT']?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$lang['DATE']['Date4'][0]?></h4>
                        <p><?=$lang['DATE']['Date4']['TEXT']?></p>
                    </div>
                </div>
                <div class="media">
                    <div class="pull-left">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                            </span>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$lang['DATE']['Date5'][0]?></h4>
                        <p><?=$lang['DATE']['Date5']['TEXT']?></p>
                    </div>
                </div>
            </div>


            <!-- Download Column -->
            <div class="col-sm-12">
                <h3 class="page-header"><?=$lang['FILES']?></h3>
            </div>
            <div class="col-sm-12">
                <div class="list-group">
                    <a href="download/doc-1.doc" target="_blank" class="list-group-item media">
                        <div class="pull-left">
                            <i class="fa fa-file-word-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Информационное сообщение</h4>
                            <small>(українською, *. pdf, ~37 K)</small>
                        </div>
                    </a>
                    <a href="download/doc-2.pdf" target="_blank" class="list-group-item media mg-tp">
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
<!-- /.container -->


<!-- Footer -->
<footer>
    <div class="col-sm-12">
        <center>&copy; <?php echo date('Y');?> PMW </center>
    </div>
</footer>


</div>
<!-- /.row -->



<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="../../js/user.js"></script>
</body>

</html>
