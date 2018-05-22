<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">

    <?php wp_head(); ?>

</head>

<header>

<div class="center-block-main">
<div class="logo"><a  href=""></a></div>
<nav>



    <?php wp_nav_menu(array(
        'theme_location' => 'headerMenu',
        'menu_class'      => 'menu',

    )); ?>

<!--<ul class="menu">-->
<!--<li class="main">-->
<!--<div class="hoverMenu">-->
<!--<a href="#">Бойцы</a>-->
<!--</div>-->
<!--</li>-->
<!--<li><a href="#">Видео</a></li>-->
<!--<li><a href="#">Новости</a></li>-->
<!--<li><a href="#">О сайте</a></li>-->
<!--</ul>-->

<div class="dropdown hidenDropDown" >
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="#">Новости туризма</a></li>
<li><a href="#">Документы для путешествий</a></li>
<li><a href="#">Турфирмы</a></li>
</ul>
</div>
</nav>
</div>
</header>
<body>