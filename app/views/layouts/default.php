<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" >
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css" >
    <script src="<?=PROOT?>js/jquery-3.5.0.min.js" ></script>
    <script src="<?=PROOT?>js/bootstrap.min.js" ></script>

    <?= $this->content('head'); ?>

    <title><?= $this->siteTitle(); ?></title>

  </head>
  <body>
    <?= $this->content('body'); ?>
  </body>
</html>
