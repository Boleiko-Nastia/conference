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

    <!-- Favicon -->
    <link rel="shortcut icon" href="../img/favicon.png">

</head>

<body>

<div class="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><img class="logo" src="../img/logo.svg"  alt="logo"></img></a>
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
                            <li><a href="add_news_translations.php">Редактирование новостей</a></li>
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
                <h1 class="page-header">Добавление участников школы-семинара
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a>
                    </li>
                    <li><a href="main.php">Администратор</a>
                    </li>
                    <li class="active">Добавление участников: школы-семинара</li>
                </ol>

                <!-- Contact Details Column -->
                <div class="col-sm-12 del-pad-x">
                    <form name="sentMessage" id="contactForm" action="./add_user_sem.php" method="post" novalidate>
                        <div>
                            <label class="mg-tp-20">Фамилия Имя Отчество участника:</label>
                            <input class="form-control" name="fullname" type="text" required data-validation-required-message="Введите фамилию, имя и отчество участника!" placeholder="Иванов Иван Иванович">
                            </input>
                            <label class="mg-tp-20">Фамилия Имя Отчество руководителя:</label>
                            <input class="form-control" name="mentorname" type="text" required data-validation-required-message="Введите фамилию, имя и отчество руководителя!" placeholder="Иванов Иван Иванович">
                            </input>
                            <label class="mg-tp-20">ВУЗ:</label>
                            <input class="form-control" name="job" type="text" required data-validation-required-message="Введите название учебного заведения или компании!" placeholder="Харьковский национальный университет радиоэлектроники">
                            </input>
                            <label class="mg-tp-20">Название доклада:</label>
                            <input class="form-control" name="titlelecture" type="text" required data-validation-required-message="Введите название доклада!" placeholder="Изучение информационных систем полиграфии в мире">
                            </input>
                            <hr>
                            <!--Show error message for admin (before button)
                                <div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Заполните все поля!</div>
                            END error message-->
                            <!--Show error message for admin (before button) Если человек с такими же ФИО, местом работы и названием доклада уже есть в таблице
                                <div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Такой участник уже добавлен!</div>
                            END error message-->
                            <!--Show success message for admin (instead of button)
                                <div class="alert alert-success text-left" role="alert"><i class="fa fa-check"></i> ФИО успешно добавлен!</div>
                            END success message-->
                            <label class="mg-tp-40"><button type="submit" class="btn btn-primary blue-button">Добавить</button>
                            </label>
                        </div>

                    </form>

                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                    <script>
                        var update_receiver = function () {
                            if ($("#Receiver").is(":checked")) {
                                $('#nameReceiver').prop('disabled', false);
                                $('#emailReceiver').prop('disabled', false);
                                $('#buttonReceiver').prop('disabled', false);
                            }
                            else {
                                $('#nameReceiver').prop('disabled', 'disabled');
                                $('#emailReceiver').prop('disabled', 'disabled');
                                $('#buttonReceiver').prop('disabled', 'disabled');
                            }
                        };
                        $(update_receiver);
                        $("#Receiver").change(update_receiver);
                    </script>
                    <div class="footer-push"></div>

                    </form>
                </div>
                <!-- / checkbox-->

            </div>
            <!-- /.9-->

        </div>
        <!-- /.row -->

    </div>

</div>
<!-- /.container -->

</div> <!--/wrapper-->
<!-- Footer -->
<footer>
    <div class="col-sm-12 text-center">
        &copy; <?php echo date('Y');?> PMW
    </div>
</footer>

<!-- jQuery Version 1.11.0 -->
<script src="../js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="../js/jqBootstrapValidation.js"></script>
<!--<script src="../js/contact_me.js"></script>-->

</body>

</html>
