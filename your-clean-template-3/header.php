<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
		<link type="text/css" rel="stylesheet" href="/wp-content/themes/your-clean-template-3/css/style.css">


	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	
<header>
    <p>Мы выполняем ремонт и обслуживание бытовой техники только после окончания срока гарантии</p>
    <div class="header_top">
        <div class="header_top1">
            <a class="header_top1_logo" href="/"><img src="/wp-content/themes/your-clean-template-3/img/e964acd2c1ff8e217e63d1103e4a7e78.png" alt=""></a>
            <nav>
                <ul>
                    <li><a href="/o-nas/">О НАС</a></li>
                    <li><a href="#">УСЛУГИ</a></li>
                    <li><a href="#">ОТЗЫВЫ</a></li>
                    <li><a href="#">ВОПРОС-ОТВЕТ</a></li>
                    <li><a href="#">КОНТАКТЫ</a></li>
                </ul>
            </nav>
        </div>
        <div class="header_top2">
            <p>8 <span>(</span>495<span>)</span>997-17-90</p>
            <a href="#">Перезвоним через 2 минуты</a>
        </div>
    </div>
</header>
