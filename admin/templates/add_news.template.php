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
                <a class="navbar-brand" href="index.php"><img class="logo" src="../../img/logo.svg"  alt="logo"></img></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="login.php?logout=true"><i class="fa fa-sign-out"></i> Выход</a>
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
                <h1 class="page-header">Создание новости
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a>
                    </li>
                    <li><a href="main.php">Администратор</a>
                    </li>
                    <li class="active">Создание новости</li>
                </ol>            
 
            <!-- Contact Details Column -->
                <div class="col-sm-12 del-pad-x">

                    <form name="sentMessage" id="contactForm" action="./add_news.php" method="post" enctype="multipart/form-data">
                        <div class="control-group form-group">
                            <label>Выберите языковую версию новости:</label>
                            <label class="radio-inline mg-l-20">
                                <input type="radio" name="languages" checked id="Radio-RU" value="ru"> RU
                            </label>
                            <label class="radio-inline mg-l-20">
                                <input type="radio" name="languages" id="Radio-UA" value="ua"> UA
                            </label>
                            <label class="radio-inline mg-l-20">
                                <input type="radio" name="languages" id="Radio-ENG" value="en"> ENG
                            </label>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Заголовок:</label>
                                <input type="text" class="form-control" name="title" id="name" required data-validation-required-message="Введите заголовок новости!" placeholder="Введите заголовок новости...">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Кем добавлено:</label>
                                <input type="tel" class="form-control" name="name" id="phone" required data-validation-required-message="Введите Вашу фамилию и инициалы!" placeholder="Чеботарева И.Б.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">Добавление фото:</label>
                            <input type="file" id="exampleInputFile" name="articleimage">
                            <p class="help-block">Размер изображения: 900px * 300px</p>
                        </div>
                        <div class="control-group form-group mg-tp-20">
                            <div class="controls">
                                <label>Основной текст новости:</label>
                                <textarea name="article" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Введите новость в виде текстового сообщения!" placeholder="Введите текст..." maxlength="2999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="sendnewsletter"> Выполнить рассылку новости участникам конференции
                            </label>
                        </div>
                        <hr>                        
                        <!--Show error message for admin (before buttons)
                            <div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Заполните все поля!</div>
                        END error message-->
                        <!--Show success message for admin (instead of buttons) публикация
                            <div class="alert alert-success text-left" role="alert"><i class="fa fa-check"></i> Новость опубликована успешно!</div>
                        END success message-->
                        <!--Show success message for admin (instead of buttons) публикация + рассылка
                            <div class="alert alert-success text-left" role="alert"><i class="fa fa-check"></i> Публикация и рассылка новости выполнена успешно!</div>
                        END success message-->
                        <button type="submit" class="btn btn-primary blue-button mg-tp-20">Опубликовать новость</button>
                    </form>
                </div>
                <hr>
            </div>
        <!-- /.row -->


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->

    <footer>
        <div class="col-sm-12 text-center">
            &copy; <?=date('Y')?> PMW
        </div>
    </footer>

    <!-- jQuery Version 1.11.0 -->
    <script src="../../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="../../js/jqBootstrapValidation.js"></script>
<!--    <script src="../js/contact_me.js"></script>-->

</body>

</html>
