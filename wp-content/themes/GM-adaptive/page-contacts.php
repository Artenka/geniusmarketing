<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<header id="contacts-header">
    <div class="section-wrapper">
        <h1>Есть любой вопрос или Вам нужна помощь по продвижению Вашего бизнеса в Интернет?</h1>
        <p>Свяжитесь с нами прямо сейчас и наша команда сделает все, чтобы помочь Вам.</p>
    </div>
</header>

<!-- main -->
<section id="contacts-main">
    <div class="section-wrapper">
        <header>
            <p>...Если этого не случится - напишите мне, и я лично дам этому человеку "подзатыльник" :)</p>
        </header>

        <div class="contacts-main-block">
            <div class="contacts-message">
                <h1>НАПИШИТЕ НАМ</h1>
                <p>Заполните простую форму ниже (сообщение придет нам прямо на email главного клиент-сервиса) или свяжитесь с нами по контактам, которые видите справа.</p>
                <form>
                    <input id="contacts-name" placeholder="Ваше имя">
                    <input id="contacts-email" type="email" placeholder="Ваш E-mail">
                    <textarea id="contacts-text" placeholder="Напишите Ваш вопрос"></textarea>
                    <input type="submit" value="Свяжитесь со мной">
                </form>
            </div>

            <div class="contacts-info">
                <div class="contacts-phones">
                    <h2>Звоните нам в любое время с Пн-Пт:</h2>
                    <p><b>10:00-19:00 Киев/Мск</b></p>
                    <p>+7 495 241 07 87 (Россия)</p>
                    <p>+38 093 170 02 66 (Украина)</p>
                    <p>+38 050 388 76 20 (Украина)</p>
                    <div class="contacts-info-hr"></div>
                </div>
                <div class="contacts-call">
                    <h2>Хотите, чтобы мы перезвонили Вам?</h2>
                    <button>Да, перезвоните мне</button>
                    <div class="contacts-info-hr"></div>
                </div>
                <div class="contacts-mail-fb">
                    <div class="contacts-mail">
                        <p><b>Напишите нам на email: </b></p>
                        <a href="#">info@geniusmarketing.me</a>
                    </div>
                    <div class="contacts-fb">
                        <p><b>Напишите нам на facebook:</b></p>
                        <a href="#">Написать</a>
                    </div>
                </div>
            </div>
        </div>

        <h1>Впервые на сайте и думаете, с чего начать интернет-бизнес?</h1>
        <button class="btn-green">КЛИКАЙТЕ</button>
    </div>
</section>

<section id="contacts-social">
    <div class="section-wrapper">
        <h1>Мы в соцсетях:</h1>
        <p>
            Присоединяйтесь, чтобы узнавать обо всем первым.
            <span class="contacts-arrow-left"></span>
            <span class="contacts-arrow-right"></span>
        </p>

        <div class="social-groups">
            <div class="vk-group">
                <script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
                <!-- VK Widget -->
                <div id="vk_groups"></div>
                <script type="text/javascript">
                    VK.Widgets.Group("vk_groups", {mode: 0, width: "300", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 23808636);
                </script>
            </div>
            <div class="fb-group">
                <div class="fb-page" data-href="https://www.facebook.com/GeniusMarketing.me/" data-width="300" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/GeniusMarketing.me/"><a href="https://www.facebook.com/GeniusMarketing.me/">GeniusMarketing</a></blockquote></div></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>