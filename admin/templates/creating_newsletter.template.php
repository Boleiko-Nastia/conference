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
    <script>
        function add_user(){
            var name,email,usermsg;
            $('.modal-body').html('');
            name = $("input[name=nameReceiver]").val();
            email = $("input[name=emailReceiver]").val();
            if(name && email) {
                $.ajax({
                    type: "POST",
                    url: "./creating_newsletter.php",
                    data: { name: name, email: email }
                }).done(function( msg ) {
                    if(msg == 'false') {
                        usermsg = 'Field of name or email is empty';
                    } else if(msg == 'no') {
                        usermsg = 'This email already added';
                    } else {
                        usermsg = "Data Saved";
                    }
                    $('.modal-body').append("<p>"+usermsg+'</p>');
                    $("input[name=nameReceiver]").val('');
                    $("input[name=emailReceiver]").val('');
                });
            }
        }
    </script>
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
                <h1 class="page-header">Рассылка писем
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a>
                    </li>
                    <li><a href="main.php">Администратор</a>
                    </li>
                    <li class="active">Рассылка писем</li>
                </ol>

                <!-- Contact Details Column -->
                <div>
                <div class="col-sm-12 del-pad-x">
                    <form name="sentMessage" action="./creating_newsletter.php" method="post" id="contactForm" novalidate enctype="multipart/form-data">
                        <div class="control-group form-group">
                            <div class="controls">
                                <label>Заголовок письма</label>
                                <input type="text" name="object" class="form-control" id="name" required data-validation-required-message="Введите заголовок новости!" placeholder="Введите заголовок новости...">
                                <p class="help-block"></p>
                            </div>
                        </div>
                        <div class="control-group form-group mg-tp-20">
                            <div class="controls">
                                <label>Основной текст новости:</label>
                                <textarea name="maintext" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Введите новость в виде текстового сообщения!" placeholder="Введите текст..." maxlength="2999" style="resize:none"></textarea>
                            </div>
                        </div>
                        <div class="form-group mg-tp-20">
                            <label for="exampleInputFile">Прикрепить файл:</label>
                            <input type="file" name="userfile" id="exampleInputFile">
                        </div>
                        <div class="checkbox mg-tp-40">
                            <label>
                                <input name="sendnewsletter" type="checkbox"> Выполнить рассылку зарегистрированным участникам</input>
                            </label>

                                <br/>
                                <label class="mg-tp-20">
                                    <input name="addreceiver" type="checkbox" value="yes" id="Receiver" name="Receiver">Добавить получателя вручную</input>
                                </label>

                                <br>
                                <div class="pad-left-20">
                                    <label for="Receiver" class="mg-tp-20">Фамилия Имя Отчество:</label>
                                    <input id="nameReceiver" name="nameReceiver" class="form-control mg-tp" type="text" disabled="disabled"  required="required" data-validation-required-message="Введите фамилию, имя и отчество получателя!" placeholder="Иванов Иван Иванович">
                                    </input>
                                    <br>
                                    <label for="Receiver">Email:</label>
                                    <input id="emailReceiver" name="emailReceiver" class="form-control mg-tp" type="email" disabled="disabled"  required="required" data-validation-required-message="Введите адрес электронной почты получателя!" placeholder="ivanov_ivan@ukr.net">
                                    </input>
                                    <label for="Receiver" class="mg-tp-20"><button type="button" onclick="add_user()" data-toggle="modal" data-target="#myModal" class="btn btn-primary blue-button" id="buttonReceiver" name="buttonReceiver" disabled="disabled">Добавить</button>
                                    <!--Show error message for admin (before button)
                                        <div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Заполните все поля!</div>
                                    END error message-->
                                    <!--Show error message for admin (before button) Если человек с такими же ФИО, местом работы и названием доклада уже есть в таблице
                                        <div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle"></i> Такой участник уже добавлен!</div>
                                    END error message-->
                                    <!--Show success message for admin (instead of button)
                                        <div class="alert alert-success text-left" role="alert"><i class="fa fa-check"></i> ФИО успешно добавлен!</div>
                                    END success message-->
                                    <label for="Receiver" class="mg-tp-20"><button type="submit" class="btn btn-primary blue-button" id="buttonReceiver" name="buttonReceiver" disabled="disabled">Добавить</button>
                                    </label>
                                </div>

                            <br>
                            <hr>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="footer-push"></div>

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


                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary blue-button mg-tp-20">Выполнить рассылку</button>
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
</div> <!--/wrapper>
    <!-- Footer -->
<footer>
    <div class="col-sm-12">
        <center>&copy; 2015 PMW </center>
    </div>
</footer>

<!-- jQuery Version 1.11.0 -->
<script src="../js/jquery-1.11.0.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<!--<script src="../js/jqBootstrapValidation.js"></script>-->
<!--<script src="../js/contact_me.js"></script>-->

</body>

</html>
