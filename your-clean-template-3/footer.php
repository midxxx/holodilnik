<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
	<footer>
    <div class="map">
        <iframe src="https://www.google.com/maps/d/embed?mid=1Q0fuAbVK2BhRzR8aljnDsjGeepe5ESDV" width="100%" height="675"></iframe>
        <div class="map_block">
            <p class="map_block_p1">Работаем по всей Москве и МО</p>
            <div>
                <p>Адрес:</p>
                <p>125195 Ленинградское ш. 47</p>
            </div>
            <div>
                <p>Время работы:</p>
                <p>Без выходных, с 8:00 до последнего клиента</p>
            </div>
            <div>
                <p>E-mail:</p>
                <p>info@miele-service24.ru</p>
            </div>
            <div>
                <p>Телефон:</p>
                <p>+7(495)997-17-90</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_wrap">
            <div class="footer_wrap_top">
                <ul>
                    <li><a href="#">о нас</a></li>
                    <li><a href="#">услуги</a></li>
                    <li><a href="#">отзывы</a></li>
                    <li><a href="#">вопрос-ответ</a></li>
                    <li><a href="#">контакты</a></li>
                </ul>
                <div class="footer_wrap_contact">
                    <a class="footer_wrap_mail" href="info@miele-service24.ru">info@miele-service24.ru</a>
                    <p class="footer_wrap_phone">8 <span>(</span>495<span>)</span>997-17-90</p>
                </div>
            </div>
            <div class="footer_wrap_copiryte">
                <p>© 2020 Сервисный центр Miele. Все права защищены. <span>Политика конфиденциальности</span></p>
                <p>Создание сайта - Trendspb</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
</body>
</html>