<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

    <main>
        <div class="main" style="background-image: url(img/e88480035072c2ac6e6d4cf29a96f031.png);">
            <div class="main_top">
                <div class="main_top1">
                    <p>Профессиональный ремонт бытовой техники Miele</p>
                    <p>в Москве и Московской области</p>
                </div>
                <div class="main_top2">
                    <p>Хотите узнать точную причину поломки?</p>
                    <p>Закажите бесплатную диагностику в пределах Москвы!</p>
                    <form action="">
                        <input type="text">
                        <input type="text">
                        <input type="submit" value="">
                    </form>
                </div>
            </div>
        </div>
        <div class="main2">
            <div class="main2_block">
                <div>
                    <svg width="184" height="40" viewBox="0 0 184 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M0 0H184V40H0V0Z" fill="url(#pattern0)"/>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="translate(0.391304) scale(0.00241546 0.0111111)"/>
                            </pattern>
                            <image id="image0" width="90" height="90" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </div>
                <p>Гарантия на ремонт до 2 лет</p>
            </div>
            <div class="main2_block">
                <div>
                    <svg width="184" height="40" viewBox="0 0 184 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M0 0H184V40H0V0Z" fill="url(#pattern0)"/>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="translate(0.391304) scale(0.00241546 0.0111111)"/>
                            </pattern>
                            <image id="image0" width="90" height="90" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </div>
                <p>Доступные цены и системы скидок</p>
            </div>
            <div class="main2_block">
                <div>
                    <svg width="184" height="40" viewBox="0 0 184 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M0 0H184V40H0V0Z" fill="url(#pattern0)"/>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="translate(0.391304) scale(0.00236295 0.0108696)"/>
                            </pattern>
                            <image id="image0" width="92" height="92" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </div>
                <p>Многолетний опыт инженеров</p>
            </div>
            <div class="main2_block">
                <div>
                    <svg width="184" height="40" viewBox="0 0 184 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M0 0H184V40H0V0Z" fill="url(#pattern0)"/>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="translate(0.391304) scale(0.00241546 0.0111111)"/>
                            </pattern>
                            <image id="image0" width="90" height="90" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </div>
                <p>Всегда в наличии оригинальные запчасти</p>
            </div>
            <div class="main2_block">
                <div>
                    <svg width="184" height="40" viewBox="0 0 184 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M0 0H184V40H0V0Z" fill="url(#pattern0)"/>
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0" transform="translate(0.391304) scale(0.00241546 0.0111111)"/>
                            </pattern>
                            <image id="image0" width="90" height="90" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                </div>
                <p>Выезд мастера в течении часа</p>
            </div>
        </div>
        <p class="main_p1">Посмотрите возможные причины поломки и примерную стоимость ремонта</p>
        <div class="main3">
            <p>Мы используем cookie-файлы для наилучшего представления нашего сайта. Продолжая использовать этот сайт, вы соглашаетесь с использованием cookie-файлов.
                <a href="#">Ok</a>
            </p>
        </div>

        <article class="article1">
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
            <div class="article1_block">
                <div class="article1_block_img"></div>
                <div>
                    <p>Ремонт кофемашин</p>
                    <p>от 2500р</p>
                </div>
                <a href="#">Вызвать мастера</a>
            </div>
        </article>

        <div class="main5" style="margin-bottom: 0; margin-top: 4px;">
            <p>Мы свяжемся с вами в ближайшее время, чтобы уточнить все детали</p>
            <form action="">
                <input type="text">
                <input type="text">
                <input type="text">
                <input type="submit" value="">
            </form>
        </div>
    </main>

<?php get_footer(); // подключаем footer.php ?>