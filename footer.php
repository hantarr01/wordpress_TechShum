<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TechShum
 */

?>

		<!-- FOOTER started  -->

<footer class="page-footer">

    <div class="container">

        <div class="row">

              <div class="col l5 s12">

                <h5 class="white-text" id="letSpaceHeadingFooter">Оставьте комментарий</h5>

                <form class="grey-text text-lighten-4">
                	
                <input class="formFooter" type="email" name="" placeholder="Ваш email">

                <textarea class="formFooterTextarea" placeholder="Напишите комментарий здесь"></textarea>

                <input class="submitFooter" type="submit" value="Отправить" name="">

                </form>

              </div>

              <div class="col l5 offset-l2 s12">

                <h5 class="white-text" id="letSpaceHeadingFooter">Наши контакты</h5>

                <ul>

                  <li><p class="letSpace">Наш телефон:<p>
                   <p class="lineHeightFooter">8-(962)598-58-91</p>
                  </li>

                  <li><p class="letSpace">Наш адрес:</p>
                   <p class="lineHeightFooter">г. Шумерля, ул. Некрасова, д. 62</p>
                  </li>

                  <li><p class="letSpace">Наш почтовый ящик:</p>
                   <p class="lineHeightFooter">g16052015@mail.ru</p>
               	  </li>

                </ul>

              </div>

        </div>

    </div>

     <div class="footer-copyright">

        <div class="container">

        <b>TechShum</b> © 2019 All rights reserved.

        </div>

     </div>

</footer>


										<!--  FOOTER stoped  -->

<?php wp_footer(); ?>

</body>
</html>
