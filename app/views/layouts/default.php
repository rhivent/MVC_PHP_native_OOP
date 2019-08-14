<!DOCTYPE html>
<html>
  <head>
    <title><?=$this->siteTitle();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap -->
    <link href="<?=PROOT?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PROOT?>css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?= $this->content('head'); ?>

  </head>
  <body>
    <?=  $this->content('body'); ?>
    <!-- <h1>Hello, world!</h1> -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?=PROOT?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>
  </body>
</html>