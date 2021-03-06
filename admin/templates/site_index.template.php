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
                            <li><a  href="javascript:set_lang('ru')">RU</a></li>
                            <li><a  href="javascript:set_lang('ua')">UA</a></li>
                            <li><a  href="javascript:set_lang('eng')">EN</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('img/slide-1-new2.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/slide-2-new2.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('img/slide-3-new2.png');"></div>
            <div class="carousel-caption">
                <h2></h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <!-- Content Row -->
        <!-- Content Column -->
        <div class="col-sm-9 del-pad-x">
            <div class="col-sm-12">
                <h2 class="page-header">
                    <?=$lang['MAINTEXT']['TITLE'][0]?><br>
                    <?=$lang['MAINTEXT']['TITLE'][1]?><br>
                </h2>
                <h3><?=$lang['MAINTEXT']['DATE']?>
                </h3>
            </div>
            <div class="col-sm-12">
                <p><?=$lang['MAINTEXT'][0]?></p>
                <p><?=$lang['MAINTEXT'][1]?><p>
                <p><?=$lang['MAINTEXT'][2]?></p>
                <p><?=$lang['MAINTEXT'][3]?><br>
                   <?=$lang['MAINTEXT'][4]?></p>
                <hr>
                <p><?=$lang['MAINTEXT'][5]?></p>
                <p><?=$lang['MAINTEXT'][7]?></p>
                <hr>
                <p> <i class="fa fa-exclamation-circle"></i>
                    <strong><?=$lang['MAINTEXT'][12]?></strong></p>
                <hr>
                <p> <i class="fa fa-exclamation-circle"></i>
                    <strong><?=$lang['MAINTEXT'][13]?></strong></p>
            </div>

            <div class="col-sm-12">
                <h2 class="page-header"><?=$lang['MAINTEXT'][14]?></h2>
                <big class="plus-pad-y">
                    <p>
                        <?=$lang['MAINTEXT'][15]?>
                    <p>
                        <?=$lang['MAINTEXT'][16]?>
                    <p>
                        <?=$lang['MAINTEXT'][17]?>
                    <p>
                        <?=$lang['MAINTEXT'][18]?>
                    <p>
                        <?=$lang['MAINTEXT'][19]?>
                    <p>
                        <?=$lang['MAINTEXT'][20]?>
                    <p>
                        <?=$lang['MAINTEXT'][21]?>
                    <p>
                        <?=$lang['MAINTEXT'][22]?>
                    <p>
                        <?=$lang['MAINTEXT'][23]?>
                    <p>
                        <?=$lang['MAINTEXT'][new8]?>
                    <p>
                        <?=$lang['MAINTEXT'][new6]?>
                    </p>
                </big>
            </div>



            <!-- Features Section -->
            <div class="col-sm-12">
                <h2 class="page-header"><?=$lang['MAINTEXT'][24]?></h2>
            </div>


            <div class="col-sm-12">
                <div class="col-md-8 del-pad-x">
                    <p><?=$lang['MAINTEXT'][beforebtn]?></p>
                </div>
                <div class="col-md-3 col-md-offset-1 del-pad-x">
                    <button type="button" class="btn btn-lg btn-default btn-block blue-button" data-toggle="modal" data-target="#myModal"><?=$lang['MAINTEXT'][25]?></button>


                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-lg">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><?=$lang['MAINTEXT'][Form1]?></h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" id="user" method="post" name="user" method="get" action="../../index.php" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">*<?=$lang['MAINTEXT'][Form2]?></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" required name="surename" id="inputName" placeholder="<?=$lang['MAINTEXT'][Form2ph]?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">*<?=$lang['MAINTEXT'][Form3]?></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" required name="name" id="inputSurename" placeholder="<?=$lang['MAINTEXT'][Form3ph]?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">*<?=$lang['MAINTEXT'][Form4]?></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" required name="lastname" id="inputFathername" placeholder="<?=$lang['MAINTEXT'][Form4ph]?>">
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">*<?=$lang['MAINTEXT'][Form5]?>
                                                <br> <h6><small><?=$lang['MAINTEXT'][Form5c]?> <br><?=$lang['MAINTEXT'][Form5c2]?> </small></h6></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="study" id="inputWorkplace" placeholder="<?=$lang['MAINTEXT'][Form5ph]?>" rows="4" cols="100" style="resize:vertical"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputPosition" class="col-sm-3 control-label">*<?=$lang['MAINTEXT'][Form6]?></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="job" id="inputWorkplace" placeholder="<?=$lang['MAINTEXT'][Form6ph]?>" rows="2" cols="100" style="resize:vertical"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['MAINTEXT'][Form7]?>
                                                <br> <h6><small><?=$lang['MAINTEXT'][Form7c]?></small></h6></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="degree" id="inputWorkplace" placeholder="<?=$lang['MAINTEXT'][Form7ph]?>" rows="2" cols="100" style="resize:vertical"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['MAINTEXT'][FormAfter7]?>
                                                <br> <h6><small><?=$lang['MAINTEXT'][Form7c]?></small></h6></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="academic_title" id="inputWorkplace" placeholder="<?=$lang['MAINTEXT'][FormAfter7ph]?>" rows="2" cols="100" style="resize:vertical"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">*<?=$lang['MAINTEXT'][Form8]?></label>
                                            <div class="col-sm-8">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="event" id="optionsRadios1" value="on" checked>
                                                        <?=$lang['MAINTEXT'][Form8ph]?>
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="event" id="optionsRadios2" value="off">
                                                        <?=$lang['MAINTEXT'][Form8ph1]?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">*<?=$lang['MAINTEXT'][Form9]?></label>
                                            <div class="col-sm-8">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="participation_1" value="<?=$lang['MAINTEXT'][Form9ph1]?>">
                                                        <?=$lang['MAINTEXT'][Form9ph1]?>
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="participation_2" value="<?=$lang['MAINTEXT'][Form9ph2]?>">
                                                        <?=$lang['MAINTEXT'][Form9ph2]?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['MAINTEXT'][FormAfter9]?>
                                                <br> <h6><small><?=$lang['MAINTEXT'][FormAfter9c]?></small></h6></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="coauthor" id="inputCo-Author" placeholder="<?=$lang['MAINTEXT'][FormAfter9ph]?>" rows="4" cols="100" style="resize:vertical"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['MAINTEXT'][FormAfter9New]?></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="titlereport" id="inputTitleReport" placeholder="<?=$lang['MAINTEXT'][FormAfter9Newph]?>" rows="2" cols="100" style="resize:vertical"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">*<?=$lang['MAINTEXT'][Form10]?></label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" required class="form-control" id="inputEmail" placeholder="<?=$lang['MAINTEXT'][Form10ph]?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['MAINTEXT'][Form11]?></label>
                                            <div class="col-sm-8">
                                                <input type="tel" name="tel" class="form-control" id="inputTel" placeholder="<?=$lang['MAINTEXT'][Form11ph]?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label"><?=$lang['MAINTEXT'][Form12]?></label>
                                            <div class="col-sm-8">
                                                <input type="text" name="address" class="form-control" id="inputPhone" placeholder="<?=$lang['MAINTEXT'][Form12ph]?>">
                                            </div>
                                        </div>
                                        <hr>
                                        <h4>*  -  <?=$lang['MAINTEXT'][Form13]?></h4>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-default blue-button"><?=$lang['MAINTEXT'][Form14]?></button>
                                            <button type="submit" class="btn btn-default red-hover" data-dismiss="modal"><?=$lang['MAINTEXT'][Form15]?></button>
                                        </div>
                                    </form>
                                    <!--Show error message for user (before buttons)

                                    END error message-->
                                    <div style="display: none" id="danger" class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Этот email уже есть в базе</div>
                                    <div style="display: none" id="success" class="alert alert-success text-left" role="alert"><i class="fa fa-check"></i> Ваша заявка успешно отправлена!</div>
                                    <!--Show success message for user (instead of buttons)

                                    END success message-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </div>




        <div class="col-sm-3 del-pad-x">

            <!-- Sidebar Column -->
            <div class="col-sm-12">
                <div class="list-group pad-tp-40">
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

    <hr>

</div>
<!-- /.container -->

<!-- Footer -->
<footer>
    <div class="col-sm-12">
        <center>&copy; 2016 PMW </center>
    </div>
</footer>

<!-- script <script>
    $(document).ready(function() {
        $('#bootstrapSelectForm')
            .find('[name="language"]')
                .selectpicker()
                .change(function(e) {
                    // revalidate the language when it is changed
                    $('#bootstrapSelectForm').formValidation('language');
                })
                .end()
            .formValidation({
                framework: 'bootstrap',
                excluded: ':disabled',
                icon: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    language: {
                        validators: {
                            notEmpty: {
                                message: 'Please select your native language.'
                            }
                        }
                    }
                }
            });
    });
</script> -->

<!-- jQuery Version 1.11.0 -->
<script src="js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>
<script src="../../js/user.js"></script>


</body>

</html>
