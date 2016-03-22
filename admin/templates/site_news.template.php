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
                <li class="active">
                    <a href="news.php"><?=$lang['NEWS']?></a>
                </li>
                <li>
                    <a href="sections.php"><?=$lang['CONFERENCE_AREA']?></a>
                </li>
                <li>
                    <a href="calendar.php"><?=$lang['CALENDAR']?></a>
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
            <h1 class="page-header"><?=$lang['MAINTEXT'][100]?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><?=$lang['MAINTEXT'][101]?></a>
                </li>
                <li class="active"><?=$lang['MAINTEXT'][102]?></li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">

        <div class="col-sm-9 del-pad-x">
            <?php foreach($public_articles as $id => $article): ?>
            <div class="col-sm-12">
                <!-- First Blog Post -->
                <h2>
                    <a href="?id=<?=$id?>"></a>
                </h2>
                <p class="lead">
                    <?=$lang['MAINTEXT'][AddBy]?><?=$article['addedby']?>
                </p>
                <p><i class="fa fa-clock-o"></i> <?=$lang['MAINTEXT'][AddDate]?><?=$article['date_create']?></p>
                <hr>
                <a href="?id=<?=$id?>">
                    <img class="img-responsive img-hover" src="img/news-img/<?=$article['image_id'].'.'.$article['image_type']?>" alt="">
                </a>
                <hr>
                <p><?php
                    if(!$_GET['id']) {
                        $string = substr($article['full_text'], 0, 200);
                        $string = rtrim($string, "!,.-");
                        $string = substr($string, 0, strrpos($string, ' '));
                        $string .= '…';
                    } else {
                        $string = $article['full_text'];
                    }
                    echo $string;
                    ?></p>
                <?php if(!$_GET['id']):?>
                <a class="btn btn-primary blue-button" href="?id=<?=$id?>"><?=$lang['MAINTEXT'][More]?><i class="fa fa-angle-right"></i></a>
                <?php endif; ?>
                <hr>
                <!-- END First Blog Post -->
                
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Blog Sidebar Widgets Column -->


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
                    <a href="<?=$lang['MAINTEXT'][File1_url]?>" target="_blank" class="list-group-item media">
                        <div class="pull-left">
                            <i class="fa fa-file-word-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?=$lang['MAINTEXT'][File1]?></h4>
                            <small><?=$lang['MAINTEXT'][File1d]?></small>
                        </div>
                    </a>
                    <a href="<?=$lang['MAINTEXT'][File2_url]?>" target="_blank" class="list-group-item media mg-tp">
                        <div class="pull-left">
                            <i class="fa fa-file-pdf-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?=$lang['MAINTEXT'][File2]?></h4>
                            <small><?=$lang['MAINTEXT'][File2d]?></small>
                        </div>
                    </a>
                    <a href="<?=$lang['MAINTEXT'][File3_url]?>" target="_blank" class="list-group-item media mg-tp">
                        <div class="pull-left">
                            <i class="fa fa-file-pdf-o fa-2x"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?=$lang['MAINTEXT'][File3]?></h4>
                            <small><?=$lang['MAINTEXT'][File3d]?></small>
                        </div>
                    </a>
                    <a href="<?=$lang['MAINTEXT'][File4_url]?>" target="_blank"class="list-group-item media mg-tp">
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
        <center>&copy; 2016 PMW </center>
    </div>
</footer>


<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="../../js/user.js"></script>
</body>

</html>
