<?php
$name = explode('/', $_SERVER['SCRIPT_NAME']);
$name = substr(ucfirst(end($name)),0, -4);
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/62453b0bee.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="./assets/css/<?= $name ?>.css?ver=<?= time() ?>">
<title>MyNetflixList - <?= $name ?></title>