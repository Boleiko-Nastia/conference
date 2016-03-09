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
                <li class="active">
                    <a href="contact.php"><?=$lang['CONTACTS']?></a>
                </li>
                <li class="li-language">
                    <div class="btn-group group-language">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            RU <span class="caret"></span>
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
            <h1 class="page-header"><?=$lang['MAINTEXT'][129]?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><?=$lang['MAINTEXT'][130]?></a>
                </li>
                <li class="active"><?=$lang['MAINTEXT'][131]?></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">

        <div class="col-sm-9 mg-tp-40">
            <!-- Contact Details Column -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.8096103573266!2d36.22589751586513!3d50.01492362653113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a1243f9e69d1%3A0x6daed05394f03251!2z0KXQndCj0KDQrQ!5e0!3m2!1sru!2sua!4v1457488515665" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>

            <big>
                <p><i class="fa fa-map-marker fa-2x"></i>
                    <abbr title="<?=$lang['MAINTEXT'][132]?>"> <?=$lang['MAINTEXT'][133]?></abbr>: <?=$lang['MAINTEXT'][134]?></p>
                <p class="mg-tp-20"><i class="fa fa-phone fa-2x"></i>
                    <abbr title="<?=$lang['MAINTEXT'][135]?>"> <?=$lang['MAINTEXT'][136]?></abbr>: <?=$lang['MAINTEXT'][137]?></p>
                <p class="mg-tp-20"><i class="fa fa-envelope-o fa-2x"></i>
                    <abbr title="<?=$lang['MAINTEXT'][138]?>"> <?=$lang['MAINTEXT'][139]?></abbr>: <a href="mailto:pmw.nure.ua"><?=$lang['MAINTEXT'][140]?></a>
                </p>
            </big>
            <hr>
            <div class="col-sm-10 del-pad-x">
                <h3><?=$lang['MAINTEXT'][141]?></h3>
                <br>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?=$lang['MAINTEXT'][142]?></label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="<?=$lang['MAINTEXT'][143]?>" placeholder="<?=$lang['MAINTEXT'][144]?>">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?=$lang['MAINTEXT'][145]?></label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="<?=$lang['MAINTEXT'][146]?>" placeholder="<?=$lang['MAINTEXT'][147]?>">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?=$lang['MAINTEXT'][148]?></label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="<?=$lang['MAINTEXT'][149]?>" placeholder="<?=$lang['MAINTEXT'][150]?>">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><?=$lang['MAINTEXT'][151]?></label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="<?=$lang['MAINTEXT'][152]?>" placeholder="<?=$lang['MAINTEXT'][153]?>" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary blue-button"><?=$lang['MAINTEXT'][154]?></button>
                </form>
            </div>
            <hr>
        </div>
        <!-- /.row -->



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
                            <h4 class="media-heading"><?=$lang['MAINTEXT'][File1]?></h4>
                            <small><?=$lang['MAINTEXT'][File1d]?></small>
                        </div>
                    </a>
                    <a href="download/doc-2.pdf" target="_blank" class="list-group-item media mg-tp">
                        <div class="pull-left">
                            <i class="fa fa-file-pdf-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?=$lang['MAINTEXT'][File2]?></h4>
                            <small><?=$lang['MAINTEXT'][File2d]?></small>
                        </div>
                    </a>
                    <a href="index.php" class="list-group-item media mg-tp">
                        <div class="pull-left">
                            <i class="fa fa-file-pdf-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?=$lang['MAINTEXT'][File3]?></h4>
                            <small><?=$lang['MAINTEXT'][File3d]?></small>
                        </div>
                    </a>
                    <a href="index.php" class="list-group-item media mg-tp">
                        <div class="pull-left">
                            <i class="fa fa-file-word-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?=$lang['MAINTEXT'][File4]?></h4>
                            <small><?=$lang['MAINTEXT'][File4d]?></small>
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
        <center>&copy; <?php 
            $thisYear = (int)date('Y'); 
            echo $thisYear?> PMW 
        </center>
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
<script src="../../js/user.js"></script>
</body>

</html>
