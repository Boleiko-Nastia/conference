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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../img/favicon.png">

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
                                <li><a href="add_news.php">Создание новости</a></li>
                                <li><a href="edit_news.php">Редактирование новостей</a></li>
                            </ul>
                        <a href="creating_newsletter.php" class="list-group-item">Рассылка</a>
                        <a href="#" class="list-group-item" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">Добавление участников <i class="fa fa-sort-desc pull-right"></i></a>
                            <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                                <li><a href="add_user_conf.php">конференции</a></li>
                                <li><a href="add_user_sem.php">школы-семинара</a></li>
                            </ul>
                        <a href="add_file.php" class="list-group-item">Добавление файлов в архив</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <h1 class="page-header">Редактирование новостей
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Главная</a>
                    </li>
                    <li><a href="main_ADMIN.html">Администратор</a>
                    </li>
                    <li class="active">Редактирование новостей</li>
                </ol>            

            <!-- Contact Details Column -->
                    <?php foreach($articles as $ak => $av): ?>

                        <div class="col-sm-12 del-pad-x">
                            <div class="thumbnail pad-15">
                                <div class-"col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-8"><h4><?=$av['title']?></h4></div>
                                        <div class="col-sm-4">
                                            <a href="#">
                                                <button type="submit" class="btn btn-primary red-button pull-right" data-toggle="modal" data-target="#delete_news_<?=$ak?>">Удалить</button>
                                            </a>
                                        </div>

                                        <div class="modal fade popup-delete" id="delete_news_<?=$ak?>" tabindex="-1" role="dialog" aria-labelledby="delete_news">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="delete news#1">Подтверждение удаления</h4>
                                                    </div>
                                                <div class="modal-body">
                                                <p>Вы действительно хотите удалить новость "<?=$av['title']?>"?</p>
                                                </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-primary red-button" onclick="delNews(<?=$ak?>)" data-dismiss="modal">Удалить</button>
                                                <button type="button" class="btn btn-primary blue-button" data-dismiss="modal">Отмена</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                    </div>

                                    <p><i class="fa fa-clock-o"></i> Опубликовано <?=$av['date_create']?></p><br>
                                    <div class="controls">
                                        <a href="edit_news_translation.php?article=<?=$ak?>&lang=ru"><button type="submit" class="btn btn-primary blue-button">Редактировать RU-версию</button></a>
                                        <a href="edit_news_translation.php?article=<?=$ak?>&lang=ua"><button type="submit" class="btn btn-primary blue-button mg-l-20">Редактировать UA-версию</button></a>
                                        <a href="edit_news_translation.php?article=<?=$ak?>&lang=en"><button type="submit" class="btn btn-primary blue-button mg-l-20">Редактировать ENG-версию</button></a>
                                    </div>
                                </div>

                            </div>
                    <?php endforeach; ?>

                </div>
                </div>
                </div>
                <hr>
            </div>
        <!-- /.row -->


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <div class="footer-push"></div>
    </div>
    <!-- Footer -->

    <footer>
        <div class="col-sm-12 text-center">
            &copy; 2016 PMW
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="../../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="../../js/jqBootstrapValidation.js"></script>
    <script>
        function delNews(id){
            $.ajax({
                type: 'post',
                url: '../admin/bin/del_news.php',
                data: {id : id},
                success: function (data) {
                    location.reload();
                }
            });
        }
    </script>
<!--    <script src="../js/contact_me.js"></script>-->

</body>

</html>
