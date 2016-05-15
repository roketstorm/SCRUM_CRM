<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Портал для клиентов - ZlatRec Studio - Уфа</title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>libs/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>libs/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url();?>libs/css/font-awesome.min.css">
    <script src="<?=base_url();?>libs/audiojs/audio.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<br>
  	<div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Здравствуйте, <?=$project[0]['name']?>!</h3>
            </div>
            <div class="panel-body">
              <h3>Ваш проект готов на <?=$project[0]['progress']?>%</h3>
              <div class="progress progress-striped active">
                <div class="progress-bar" style="width: <?=$project[0]['progress']?>%"></div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="col-md-6">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Список работ</h3>
            </div>
            <div class="panel-body">
              <table class="table table-striped table-hover ">
                <thead>
                  <tr>
                    <th>Наименование</th>
                    <th>Статус услуги</th>
                    <th>Цена услуги</th>
                    <th>Оплачено</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="success">
                    <td>Запись</td>
                    <td>Выполнено</td>
                    <td>400 руб.</td>
                    <td><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></td>
                  </tr>
                  <tr>
                    <td>Сведение</td>
                    <td>Выполняется</td>
                    <td>600 руб.</td>
                    <td><span class="glyphicon glyphicon-plus text-success" aria-hidden="true"></span></td>
                  </tr>
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Файлы проекта</h3>
            </div>
            <div class="panel-body">
              <p>Демо-версия проекта: <audio src="<?=$project[0]['demo']?>" preload="auto" /></p>
              <p><a href="<?=$project[0]['dlink']?>" class="btn btn-success">Скачать</a></p>
            </div>
          </div>
        </div>
      </div>
  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url();?>libs/js/bootstrap.min.js"></script>

    <script>
      audiojs.events.ready(function() {
        var as = audiojs.createAll();
      });
    </script>
  </body>
</html>