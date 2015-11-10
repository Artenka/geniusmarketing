<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <title><?php echo wp_title(); ?></title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="author" content="Олесь Тимофеев">
    <meta property="og:description" content="Сообщество интернет предпринимателей"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
    <?php if(is_singular()) wp_enqueue_script('comment-reply'); ?>
    <?php wp_head(); ?>

</head>

<body>

<nav id="main-nav">
    <div class="main-nav-wrapper">
        <a class="brand" href="<?php echo get_home_url(); ?>">
            <span></span>
            <p>Genius Marketing</p>
        </a>

        <ul class="nav-lg nav">
            <?php wp_list_pages('title_li='); ?>
        </ul>

        <div class="nav-md nav">
            <div class="collapse-btn-sm"></div>
            <div class="collapse-btn">Меню</div>
            <ul class="menu">
                <?php wp_list_pages('title_li='); ?>
            </ul>
        </div>
    </div>
</nav>
