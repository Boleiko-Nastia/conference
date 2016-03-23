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
    <script src="../js/jquery-1.11.0.js"></script>
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
                <h1 class="page-header">Добавление участников конференции
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Главная</a>
                    </li>
                    <li><a href="main.php">Администратор</a>
                    </li>
                    <li class="active">Добавление участников: конференции</li>
                </ol>

                <!-- Contact Details Column -->
                <div class="col-sm-12 del-pad-x">





                    <?php foreach($members as $title => $member): ?>
                        <?php
                            $sec_id = preg_match('/\-(.+)/i',$title,$m) ? $m[1] : 1;
                            $sec_title = preg_replace('/\-.+/i','',$title);
                        ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="media">
                                <div class="pull-left icon-section-part">
                                    <span class="fa-stack fa-lg">
                                        <image class="icon-section" src="../img/icon_sections/icon-<?=$sec_id?>.svg">
                                    </span>
                                </div>
                                <div class="media-body calendar-head">
                                    <h3 class="media-heading"><?=$sec_title?></strong></h3>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-striped del-mar-bot">
                                <tr>
                                    <th class="col-sm-2">Участник</th>
                                    <th class="col-sm-2">Место работы</th>
                                    <th class="col-sm-6">Название доклада</th>
                                </tr>
                                 <?php foreach($member as $k => $user): ?>
                                    <tr>
                                        <td class="col-sm-2"><?=$user['name']?></td>
                                        <td class="col-sm-2"><?=$user['job']?></td>
                                        <td class="col-sm-6"><?=$user['lecture_title']?></td>
                                        <td class="col-sm-1">
                                            <div class="pull-right">
                                                <button type="button" class="btn btn-primary red-button"  aria-label="Right Align" data-toggle="modal" data-target="#delete_user_<?=$user['id']?>" title="Удалить"><i class="fa fa-times"></i></button>
                                                <br>
                                                <button type="button" class="btn btn-primary blue-button mg-tp" aria-label="Right Align" data-toggle="modal" data-target="#edit_user_<?=$user['id']?>" title="Редактировать"><i class="fa fa-pencil"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                     <div class="modal fade popup-delete" id="delete_user_<?=$user['id']?>" tabindex="-1" role="dialog" aria-labelledby="delete_user">
                                         <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                     <h4 class="modal-title" id="delete user#1">Подтверждение удаления</h4>
                                                 </div>
                                                 <div class="modal-body">
                                                     <p>Вы действительно хотите удалить участника "<?=$user['name']?>"?</p>
                                                 </div>
                                                 <div class="modal-footer">
                                                     <button type="button" class="btn btn-primary red-button" onclick="delUser(<?=$user['id']?>)" data-dismiss="modal">Удалить</button>
                                                     <button type="button" class="btn btn-primary blue-button" data-dismiss="modal">Отмена</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="modal fade popup-delete" id="edit_user_<?=$user['id']?>" tabindex="-1" role="dialog" aria-labelledby="edit_user">
                                         <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                     <h4 class="modal-title" id="edit user#1">Редактирование участника</h4>
                                                 </div>
                                                 <div class="modal-body">
                                                     <div class="form-group">
                                                         <label class="col-sm-3 control-label">Участник</label>
                                                         <div class="col-sm-8">
                                                             <textarea class="form-control"  required id="inputName_<?=$user['id']?>" placeholder="Иванов Иван Иванович" rows="2" cols="100" style="resize:vertical"><?=$user['name']?></textarea>
                                                         </div>
                                                     </div>
                                                     <div class="form-group">
                                                         <label class="col-sm-3 control-label">Место работы</label>
                                                         <div class="col-sm-8">
                                                             <textarea class="form-control" required id="inputWork_<?=$user['id']?>" placeholder="Харьковский начиональный университет радиоэлектроники" rows="3" cols="100" style="resize:vertical"><?=$user['job']?></textarea>
                                                         </div>
                                                     </div>
                                                     <div class="form-group">
                                                         <label class="col-sm-3 control-label">Название доклада</label>
                                                         <div class="col-sm-8">
                                                             <textarea class="form-control" required id="inputArticle_<?=$user['id']?>" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia" rows="5" cols="100" style="resize:vertical"><?=$user['lecture_title']?></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="modal-footer">
                                                     <button type="button" class="btn btn-primary red-button" onclick="saveUser(<?=$user['id']?>)">Сохранить</button>
                                                     <button type="button" class="btn btn-primary blue-button" data-dismiss="modal">Отмена</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                    <?php endforeach; ?>

                    <form action="./add_user_conf.php" method="post">
                        <div class="controls">
                            <label>Выберите секцию:</label>
                            <div class="btn-group" role="group">
                                <select name="section" class="btn btn-default">
                                    <option>Секция</option>
                                    <?php
                                        foreach($sections as $section){
                                            echo  '<option value="'.$section['id'].'">'.$section['title'].'</section>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="mg-tp-40">
                            <label>Фамилия Имя Отчество участника:</label>
                            <input class="form-control" name="fullname" type="text" required data-validation-required-message="Введите фамилию, имя и отчество участника!" placeholder="Иванов Иван Иванович">
                            </input>
                            <label class="mg-tp-20">Место работы:</label>
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
        &copy; 2016 PMW
    </div>
</footer>
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

    function delUser(id){
        $.ajax({
            type: 'post',
            url: '../admin/bin/del_user.php',
            data: {id : id},
            success: function (data) {
                location.reload();
            }
        });
    }

    function saveUser(id){
        name = $('textarea#inputName_'+id).val();
        job = $('textarea#inputWork_'+id).val();
        lecture_title = $('textarea#inputArticle_'+id).val();

        $.ajax({
            type: 'post',
            url: '../admin/bin/save_user.php',
            data: {id : id,name: name, job: job, lecture_title: lecture_title},
            success: function (data) {
                location.reload();
            }
        });
    }
</script>
<!-- jQuery Version 1.11.0 -->

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Contact Form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="../js/jqBootstrapValidation.js"></script>
<!--<script src="../js/contact_me.js"></script>-->

</body>

</html>
