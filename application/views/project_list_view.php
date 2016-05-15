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
    <link rel="stylesheet" href="<?=base_url();?>libs/css/font-awesome.min.css">
    <link href="<?=base_url();?>libs/css/style.css" rel="stylesheet">

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
  		<p style="text-align: center; font-size: 30pt;">Список проектов</p>
  		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Имя клиента</th>
		      <th>Прогресс проекта</th>
		      <th>Дата начала проекта</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php foreach($project as $p) {?>
		    <tr>
		      <td><?=$p['id']?></td>
		      <td><?=$p['name']?></td>
		      <td><?=$p['progress']?>%</td>
		      <td><?=$p['date']?></td>
		    </tr>
		    <?php }?>
		  </tbody>
		</table> 
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url();?>libs/js/bootstrap.min.js"></script>
  </body>
</html>