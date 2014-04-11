<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <?php
    
    $base = Flight::request()->base;
    if($base == '/') $base = '';

    
    echo '<title>' . $title . '</title>';
    echo '<link rel="stylesheet" href="' . $base . '/css/bootstrap.min.css">';
    echo '<link href="' . $base . '/css/style.css" rel="stylesheet">';

    ?>

  </head>
  <body>
