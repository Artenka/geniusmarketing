<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">

    <?php if(is_singular()) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>

</head>

<body>

<nav id="main-nav">
    <div class="main-nav-wrapper">
        <a class="brand" href="#">
            <span></span>
            <p>Genius Marketing</p>
        </a>
        <ul>
            <li><a href="#">Лаборатория Знаний</a></li>
            <li><a href="#">Наша История</a></li>
            <li><a href="#">Наши Тренинги</a></li>
            <li><a href="#">Истории Успеха</a></li>
            <li><a href="#">Магазин</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </div>
</nav>
