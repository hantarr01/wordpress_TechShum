<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TechShum
 */

get_header();
?>

	<div class="contentBlock">
	
  <div class="slide--parent">
	<div class="parent--el">
		<div class="two--col">
			<div class="is-item has--img">
				<figure class="the-img">
					<img src="img/makeWebSite.jpg" alt="">
				</figure>
			</div>
			<div class="is-item has--content">
				<div class="is-item--inner">
					<span>WEB-проект</span>
					<hr>
					<p>Наша команда молодых и талантливых разработчиков выслушает и поможет спроектировать сайт, так</p>
					<p>как вы желаете.</p>
					<a href="contact.html"><button class="submitFooter"  name="">Заказать</button></a>
				</div>
			</div>
		</div>
	</div>

	<div class="parent--el">
		<div class="two--col">
			<div class="is-item has--img">
				<figure class="the-img">
					<img src="img/diz.jpg" alt="">
				</figure>
			</div>
			<div class="is-item has--content">
				<div class="is-item--inner">
					<span>WEB-дизайн</span>
					<hr>
					<p>Наши дизайнеры могут реализовать дизайн который</p>
					<p>вам точно понравится.</p>
					<a href="contact.html"><button class="submitFooter"  name="">Заказать</button></a>
				</div>
			</div>
		</div>
	</div>

	<div class="parent--el">
		<div class="two--col">
			<div class="is-item has--img">
				<figure class="the-img">
					<img src="img/backend.jpg" alt="">
				</figure>
			</div>
			<div class="is-item has--content">
				<div class="is-item--inner">
					<span>WEB-кодинг</span>
					<hr>
					<p>Наши бэкенд разработчики могут установить сайт на WordPress или создать свою админку</p>
					<p>стоит только выбрать.</p>
					<a href="contact.html"><button class="submitFooter"  name="">Заказать</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


										<!-- INFOTABLE start here -->


<div class="infoBlock">

	<div class="headInfo">Почему нас выбирают</div>

	<ul>
		<div  class="containerForBcli">
		<li class="bckgrndLi2">
 			<i class="large material-icons">group</i>
 			<p class="liHeadText">РАБОТА НА ПРЯМУЮ</p>
 			<p class="liText">Вы работаете напрямую с создателями студии. 
 			Так что мы крайне заинтересованы в том, чтобы Вы остались довольны результатом.
 			 Клиент для нас на первом месте.</p>
 		</li>
		
		<li class="bckgrndLi">
 			<i class="large material-icons">color_lens</i>
 			<p class="liHeadText">УНИКАЛЬНЫЙ ДИЗАЙН</p>
 			<p class="liText">Разрабатываем только уникальный дизайн для сайтов на основе Ваших пожеланий.
 			 Данный дизайн будет направлен на решение конкретных задач.
 			 Никаких шаблонов.</p>
		</li>

		<li class="bckgrndLi">
 			<i class="large material-icons">work</i>
 			<p class="liHeadText">АДЕКВАТНАЯ ЦЕНА</p>
 			<p class="liText">Ясное и четкое понимание стоимости до начала работ.
 			 Мы не хотим, чтобы Вы переплачивали за бренд "именитых" компаний.
 			 Оплата только за проделанную работу.</p>
 		</li>

		<li class="bckgrndLi">
 			<i class="large material-icons">security</i>
 			<p class="liHeadText">ПРОЗРАЧНОСТЬ</p>
 			<p class="liText">Устанавливаем точные сроки перед началом работ
 			 и прописываем их в договоре на оказание услуг.
 			 Отчетность перед Вами после каждого этапа.</p>
 		</li>
 		</div>
 	</ul>
</div>


									<!-- INFOTABLE close -->


								<!-- Place for content, here stop -->

<?php
get_footer();
