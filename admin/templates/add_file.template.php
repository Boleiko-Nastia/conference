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
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Bootstrap remake2 CSS -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">

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
                        <a href="add_news.php" class="list-group-item">Создание новости</a>
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
                <h1 class="page-header">Добавление файлов в архив
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a>
                    </li>
                    <li><a href="main.php">Администратор</a>
                    </li>
                    <li class="active">Добавление файлов в архив</li>
                </ol>

                <!-- Contact Details Column -->
                <div class="col-sm-12 del-pad-x">
                    <form name="sentMessage" id="contactForm" action="./add_file.php" enctype="multipart/form-data" method="post">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Заголовок:</label>
                                <input type="text" class="form-control" id="name" name="postname" required data-validation-required-message="Введите заголовок новости!" placeholder="Введите заголовок новости...">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <label for="exampleSelect1">Дата добавления:</label>
                            <select class="form-control btn btn-default day" name="day" >
                                <?php
                                for($i = 1;$i <= 31; $i++){
                                    echo '<option>'.$i.'</option>';
                                }
                                ?>
                            </select>
                            <select class="form-control btn btn-default month" name="month">
                                <?php
                                $month = array('Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь');
                                foreach($month as $monthitem => $monthname) {
                                    $monthitem += 1;
                                    echo '<option value='.$monthitem.'>'.$monthname.'</option>';
                                }
                                ?>
                            </select>
                            <select class="form-control btn btn-default year" name="year">
                                <?php
                                $date = date('Y');
                                for($i = $date; $i<=$date+3; $i++){
                                    echo '<option>'.$i.'</option>';
                                }
                                ?>
                            </select>

                        </fieldset>
                        <div class="form-group mg-tp-20">
                            <label for="exampleInputFile">Добавление файла:</label>
                            <input type="file" id="exampleInputFile" name="addfile">
                        </div>
                        <button type="submit" class="btn btn-primary blue-button mg-tp-20">Сохранить</button>

                        <!--///////////////////Показать если файл загружен / не загружен
                                                <hr>
                                                <div class="alert alert-success">
                                                    <i class="fa fa-check-square"></i> <strong>Файл загружен успешно!</strong>
                                                </div>
                                                <div class="alert alert-danger">
                                                    <i class="fa fa-times"></i> <strong>Ошибка! Файл не загружен!</strong>
                                                </div>
                        /////////////////////////////-->

                        <div class="footer-push"></div>

                    </form>
                </div>
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
<!--<script src="../js/contact_me.js"></script>-->

</body>

</html>